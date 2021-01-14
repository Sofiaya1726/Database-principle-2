### Word解析

```
public ProcessFileInfo processDOCX(File file,String uploadPath)throws Exception{
        String fileName=file.getName().substring(0,file.getName().lastIndexOf("."));//获取文件名称
        WordprocessingMLPackage wmp = WordprocessingMLPackage.load(file);//加载源文件
        String basePath=String.format("%s%s%s", uploadPath,File.separator,fileName);//基址
        FileUtils.forceMkdir(new File(basePath));//创建文件夹
        String zipFilePath=String.format("%s%s%s.%s", uploadPath,File.separator,fileName,"ZIP");//最终生成文件的路径
        Docx4J.toHTML(wmp, String.format("%s%s%s", basePath,File.separator,fileName),fileName,new FileOutputStream(new File(String.format("%s%s%s", basePath,File.separator,"index.html"))));//解析
        scormService.zip(basePath, zipFilePath);//压缩包
        FileUtils.forceDelete(new File(basePath));//删除临时文件夹
        file.delete();//解析完成，删除原docx文件
        return new ProcessFileInfo(true,new File(zipFilePath).getName(),zipFilePath);//返回目标文件相关信息
    }

```

### Excel解析

```
/**
     * 程序入口方法
     *
     * @param filePath
     *            文件的路径
     * @return <table>
     *         ...
     *         </table>
     *         字符串
     */
    public static List<String> readExcelToHtml(String filePath) {
            List<String> htmlExcel=null;
            try {
                File sourcefile = new File(filePath);
                InputStream is = new FileInputStream(sourcefile);
                Workbook wb = WorkbookFactory.create(is);
                htmlExcel = getExcelToHtml(wb);
            } catch (EncryptedDocumentException e) {
                e.printStackTrace();
            } catch (FileNotFoundException e) {
                e.printStackTrace();
            } catch (InvalidFormatException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }
        return htmlExcel;

    }

```
### Pdf解析

```
/**
         * 根据文件名中的数字排列图片
         *     a>提取文件名中的数字放入int数组(序列)
         *  b>判断序列数组元素个数与文件个数是否一致,不一致则抛出
         *  c>将序列数组从小到大排列
         *  d>遍历序列数组获取Map中的文件名(value)并写html
         */
        String nm=null;
        int[] i=new int[imgNames.size()];
        Map<Integer,String> names=new HashMap<Integer,String>();
        Pattern p=Pattern.compile("[^0-9]");
        for(int j=0;j<imgNames.size();j++){
            nm=imgNames.get(j).substring(0,imgNames.get(j).lastIndexOf("."));//提取名称
            String idx=p.matcher(nm).replaceAll("").trim();
            i[j]=Integer.parseInt("".equals(idx)?"0":idx);
            names.put(i[j],imgNames.get(j));
        }
        if(names.keySet().size()!=i.length){
            //System.out.println("====请检查您的图片编号====");/*重复或者不存在数字编号*/
            return new ProcessFileInfo(false,null,null);
        }
        Arrays.sort(i);//int数组内元素从小到大排列

        //包装成html
        StringBuilder html=new StringBuilder();
        html.append("<!DOCTYPE html><html><head><meta charset='UTF-8'><title>PDF</title></head>");
        html.append("<body style=\"margin:0px 0px;padding:0px 0px;\">");
        for (int  k : i) {
            html.append(String.format("%s%s%s%s%s","<div style=\"width:100%;\"><img src=\"./",fileName,File.separator,names.get(k),"\"  style=\"width:100%;\" /></div>"));
        }
        html.append("</body></html>");
        File indexFile=new File(String.format("%s%s%s",basePath,File.separator,"index.html"));
        Writer fw=null;
        PrintWriter bw=null;
        //构建文件(html写入html文件)
        try{
             fw= new BufferedWriter( new OutputStreamWriter(new FileOutputStream(indexFile),"UTF-8"));//以UTF-8的格式写入文件
             bw=new PrintWriter(fw);
             bw.write(html.toString());
        }catch(Exception e){
            throw new Exception(e.toString());//错误扔出
        }finally{
            if (bw != null) {
                bw.close();
            }
            if(fw!=null){
                fw.close();
            }
        }
        String zipFilePath=String.format("%s%s%s.%s", uploadPath,File.separator,file.hashCode(),"ZIP");
        scormService.zip(basePath, zipFilePath);
        //删除文件
        file.delete();
        FileUtils.forceDelete(new File(basePath));
        return new ProcessFileInfo(true,new File(zipFilePath).getName(),zipFilePath);
    }
    
```
