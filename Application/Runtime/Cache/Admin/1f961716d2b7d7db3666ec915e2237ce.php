<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<h1><?php echo ($info["article_title"]); ?></h1>
	<div>
		<?php echo htmlspecialchars_decode($info['article_content']) ?>
	</div>
	  
</div>
 


<a href="<?php echo U('Login/logout');?>">退出</a>
</body>
</html>