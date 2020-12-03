## 以下为在老师提供的网站上找到的教程代码 自己在电脑上运行后发现可以成功使用，并且可以做一些小改动实现不同的功能。

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>JCompare</title>
<link rel="stylesheet" type="text/css" href="jqgrid/css/ui.jqgrid.css">
<link rel="stylesheet" type="text/css"	href="jqgrid/jquery.ui/jquery-ui.css">
<script type="text/javascript" src="jqgrid/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jqgrid/js/i18n/grid.locale-cn.js"></script>
<script type="text/javascript" src="jqgrid/js/jquery.jqGrid.min.js"></script>
<script type="text/javascript" src="jqgrid/jquery.ui/jquery-ui.js"></script>
</head>
<body>
	<table id="list"></table>
<span style="background-color: rgb(204, 204, 204);">	<div id="pager"></div></span>
</body>
</html>
 
<script type="text/javascript">
$("#list").jqGrid({        
   	url:'server.php?q=2',//请求数据的地址
	datatype: "json",
   	colNames:['Id','姓名', '年龄'],
	//jqgrid主要通过下面的索引信息与后台传过来的值对应
   	colModel:[
   		{name:'id',index:'id', width:55},
   		{name:'name',index:'invdate', width:90},
   		{name:'age',index:'name', width:100}
      	],
   	caption:"我是jqgrid的标题",
<span style="background-color: rgb(204, 204, 204);">    rowNum : 10,
    rowList : [ 10, 20, 30 ],
    pager : '#pager',
    sortname : 'id',
    recordpos : 'right',
    height:300,
    viewrecords : true</span>
});
 
</script>
