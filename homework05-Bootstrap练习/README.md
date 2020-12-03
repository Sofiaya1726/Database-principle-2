### Bootstrap代码练习


#### 面包屑导航
<ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Photos</a></li>
  <li class="breadcrumb-item"><a href="#">Summer 2017</a></li>
  <li class="breadcrumb-item"><a href="#">Italy</a></li>
  <li class="breadcrumb-item active">Rome</li>
</ul>

#### 分页
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item active"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

#### CAT工具导航页面练习代码
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<title>PM_navigation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
</head>

		<style>
      		.navbar {
        	margin-top: 5px;
			margin-bottom:0px;
      		}
			div{
			font-family:幼圆;
			font-weight:600;
			font-size:100%;
			}
			a
			{
				color:#FFFFFF;
			}
			td
			{
    			text-align:middle;
				padding-top:5px;
				padding-bottom:10px;
				padding-left:5px;
				padding-right:5px;
			}
			#table0
			{
				margin-bottom:15px;
				margin-top:25px;
				margin-left:35px;
				outline: #FFFFFF solid 5px;
				background: #FFFFFF;
				color:#333366;
			}
			#row1
			{
				background-color: #0066CC;
			}
			#row2col1
			{
				background-color: #333366;
			}
			.row{
				margin-left:0;
				margin-right:0;

			}
			li
			{
				padding-top:10px;
				padding-bottom:10px;
				margin-bottom:5px;
				margin-top:0px;
			}
		</style>
	</head>

    <body>
    	<div class="container-fiuled" id="row1">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<nav class="navbar navbar-expand-sm" role="navigation">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">
								<img alt="logo" width="180px" src="/meowcat/image/logo1.png" />
							</a>
						</div>
							<ul class="nav navbar-nav pull-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">开始工作<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">团队项目</a>
										</li>
										<li>
									 		<a href="#">人员管理</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">PM档案</a>
								</li>
								<li>
									<a href="#">注销</a>
								</li>
							</ul>

					</nav>
				</div>
			</div>
		</div>

		<div class="container-fiuled" >
			<div class="row clearfix">
				<div class="col-md-2 column" id="row2col1">
					<ul class="nav nav-stacked text-center">
						<li>
							<table id="table0">
								<tr>
									<td colspan="2">
										<svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  											<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  											<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 											<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
										</svg>
									<td>
								</tr>
								<tr>
									<td align="left">
										用户名
									</td>
									<td align="right">
										xxx
									</td>
								</tr>
								<tr>
									<td align="left">
										用户ID
									</td>
									<td align="right">
										xxxxxx
									</td>
								</tr>
								<tr>
									<td align="left">
										邮箱
									</td>
									<td align="right">
										xxxxx@xx.com
									</td>
								</tr>
							</table>
						</li>
						<li class="row2-3">
							<a href="#">文档列表</a>
						</li>
						<li class="row2-3">
							<a href="#">术语库</a>
						</li>
						<li class="row2-3">
							<a href="#">翻译记忆库</a>
						</li>
						<li class="row2-3">
							<a href="#">机器翻译</a>
						</li>
						<li class="row2-3">
							<a href="#">风格指南</a>
						</li>
						<li>
							<a href="#">关于我们</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid col-md-10 column" style="margin-top:80px">
			
		</div>
		

	
		
    </body>
</html>
