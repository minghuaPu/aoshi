<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<h1>
 总后台管理首页</h1>
	 <a class="btn btn-large btn-success" href="<?php echo U('article/index');?>">内容管理</a>
<br>	

<div class='container'><a class=" btn btn-danger" style=" float: right;" href="<?php echo U('Login/logout');?>">退出</a></div>
</body>
</html>