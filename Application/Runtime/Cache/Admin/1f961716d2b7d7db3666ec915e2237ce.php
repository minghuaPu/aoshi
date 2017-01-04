<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/aoshi/aoshi/Public/css/admin/common.css">
	<script type="text/javascript" src="/aoshi/aoshi/Public/js/jquery.1.11.1.min.js"></script>
	<script type="text/javascript">
		var SITE_URL="/aoshi/aoshi/index.php/Admin";
	</script>
</head>
<body>



<div class="container">
	<h1><?php echo ($info["article_title"]); ?></h1>
	<div>
		<?php echo htmlspecialchars_decode($info['article_content']) ?>
	</div>
	  
</div>
 


<div class='container'><a class=" btn btn-danger" style=" float: right;" href="<?php echo U('Login/logout');?>">退出</a></div>
</body>
</html>