### 英文示例：
By Tuesday morning, the robotic probe had flown 116 days in an Earth-Mars transfer trajectory toward the red planet, about 63.8 million km away from the Earth, it noted.

### 中文示例：
截至11月17日，“天问一号”已在地火转移轨道上飞行了116天，距离地球约6380万千米，仍在奔向火星的途中。

### 创建数据库表：
CREATE TABLE `homework_test`.`test1` ( `id` INT NOT NULL , `source` VARCHAR(200) NOT NULL , `target` VARCHAR(200) NOT NULL ) ENGINE = InnoDB;

### 向数据库中插入语料：
INSERT INTO `test`(`id`, `source`, `target`) VALUES ('1','By Tuesday morning, the robotic probe had flown 116 days in an Earth-Mars transfer trajectory toward the red planet, about 63.8 million km away from the Earth, it noted.','截至11月17日，“天问一号”已在地火转移轨道上飞行了116天，距离地球约6380万千米，仍在奔向火星的途中。')

### 通过pdo访问数据库并返回包装结果
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Jhomework_test</title>
<link rel="stylesheet" type="text/css" href="jqgrid/css/ui.jqgrid.css">
<link rel="stylesheet" type="text/css"	href="jqgrid/jquery.ui/jquery-ui.css">
<script type="text/javascript" src="jqgrid/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jqgrid/js/i18n/grid.locale-cn.js"></script>
<script type="text/javascript" src="jqgrid/js/jquery.jqGrid.min.js"></script>
<script type="text/javascript" src="jqgrid/jquery.ui/jquery-ui.js"></script>
</head>
<body>
	<table id="list"></table>
</body>
</html> 
<script type="text/javascript">
$("#list").jqGrid({        
   	url:'server.php?q=2',//请求数据的地址
	datatype: "json",
   	colNames:['Id','原文', '译文'],
	//jqgrid主要通过下面的索引信息与后台传过来的值对应
   	colModel:[
   		{name:'id',index:'id', width:55},
   		{name:'source',index:'invdate', width:100},
   		{name:'target',index:'invdate', width:100}
      	],
   	caption:"翻译框",
});
