## formatter是一个格式化的函数，可以对jqgrid的单元格进行格式化，同时，还能用来自定义单元格元素，用来添加标签。

#### 函数原型：
function customFmatter(cellvalue, options, rowObject){  
  
} 

### formatter主要是设置格式化类型（integer ,email等以及函数来支持自定义类型），formatoptions用来设置对应formatter的参数

## jqGrid中预定义了常见的格式及其options:

integer

        thousandSeparator://千分位分隔符，

        defaulValue

number

        decimalSeparator,//小数分隔符，如"."

         tousandsSwparator,//千分位分隔符，如","

         decimalPlaces,//小数保留位数

       defaulValue

currency

decimalSeparator, //小数分隔符，如"."
thousandsSeparator, //千分位分隔符，如","
decimalPlaces, //小数保留位数
defaulValue, 
prefix //前缀，如加上"$"
suffix//后缀
date
srcformat, //source的本来格式
newformat //新格式
email
没有参数，会在该cell是email加上： mailto:name@domain.com
showlink
baseLinkUrl, //在当前cell中加入link的url，如"jq/query.action"
showAction, //在baseLinkUrl后加入&action=actionName
addParam, //在baseLinkUrl后加入额外的参数，如"&name=aaaa"
target,
idName     //默认会在baseLinkUrl后加入,如".action?id=1"。改如果设置idName="name",那么".action?name=1"。其中取值为当前rowid
checkbox
disabled      //true/false 默认为true此时的checkbox不能编辑，如当前cell的值是1、0会将1选中
select
设置下拉框，没有参数，需要和colModel里的editoptions配合使用
下面是一个使用的例子:

Java代码 
var datas = [  
                  {"id":1,  "name":"name1",  "price":123.1,     "email":"abc@163.com",  "amount":1123423,   "gender":"1", "type":"0"},  
                  {"id":2,  "name":"name2",  "price":1452.2,    "email":"abc@163.com",  "amount":12212321,  "gender":"1", "type":"1"},  
                  {"id":3,  "name":"name3",  "price":125454,    "email":"abc@163.com",  "amount":2345234,   "gender":"0", "type":"0"},  
                  {"id":4,  "name":"name4",  "price":23232.4,   "email":"abc@163.com",  "amount":2345234,   "gender":"1", "type":"2"}]  
                  

Js代码  
colModel:[  
    {name:'id',     index:'id',     formatter:  customFmatter},  
    {name:'name',   index:'name',   formatter: "showlink", formatoptions:{baseLinkUrl:"save.action",idName: "id", addParam:"&name=123"}},  
    {name:'price',  index:'price',  formatter: "currency", formatoptions: {thousandsSeparator:",",decimalSeparator:".", prefix:"$"}},  
    {name:'email',  index:'email',  formatter: "email"},  
    {name:'amount', index:'amount', formatter: "number", formatoptions: {thousandsSeparator:",", defaulValue:"",decimalPlaces:3}},        
    {name:'gender', index:'gender', formatter: "checkbox",formatoptions:{disabled:false}},  
    {name:'type',   index:'type',   formatter: "select", editoptions:{value:"0:无效;1:正常;2:未知"}}  
],  

