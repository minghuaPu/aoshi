<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<form action="<?php echo U('index/save');?>" method="post">
		<div class="form-group">
			文章标题:
			<input type="text" name="article_title"></div>
		<div class="form-group">
			文章内容:
			<textarea name="article_content" id="" cols="30" rows="10"></textarea>
		</div>

		<div class="form-group">
			<input type="submit" class="btn" value="添加"></div>
	</form>
</div>

</body>
</html>