<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<form action="<?php echo U('Article/save');?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			文章标题:
			<input type="text" name="article_title"></div>

			<div class="form-group">
			缩略图上传:
			<input type="file" name="thumb" class="dropify">
		</div>
		<div class="form-group">
			文章内容:
		 
			<textarea name="article_content" id="container" cols="30" rows="10"></textarea>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success" value="添加"></div>
	</form>
</div>


<script type="text/javascript" src="/aoshi/Public/libs/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/aoshi/Public/libs/ueditor/ueditor.all.min.js"></script>

<script type="text/javascript">
	 var ue = UE.getEditor('container');
</script>



<link rel="stylesheet" type="text/css" href="/aoshi/Public/libs/dropify/dropify.min.css">
<script type="text/javascript" src="/aoshi/Public/libs/dropify/dropify.min.js"></script>
<script type="text/javascript">
	$('.dropify').dropify();
</script>



<a href="<?php echo U('Login/logout');?>">退出</a>
</body>
</html>