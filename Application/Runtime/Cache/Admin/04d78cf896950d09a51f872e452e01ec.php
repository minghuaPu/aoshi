<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<h1>添加新闻</h1>
	<form action="<?php echo U('News/update');?>" enctype="multipart/form-data" method="post">
		<input type="hidden" name="id" value="<?php echo ($info[0]['id']); ?>">
		<div class="form-group">新闻标题：<input type="text" name="news_title" value="<?php echo ($info[0]['news_title']); ?>"></div>
		<div class="form-group">作者：<input type="text" name="author" value="<?php echo ($info[0]['author']); ?>"></div>
		<div class='form-group'>新闻类型：
			<select name="cata_id">
				<option value="教育类" <?php if($info[0]['cata_id'] == '教育类' ): ?>selected="selected"<?php endif; ?> >教育类</option>
				<option value="科学类" <?php if($info[0]['cata_id'] == '科学类'): ?>selected="selected"<?php endif; ?> >科学类</option>
				<option value="人文类">人文类</option>
				<option value="数据报告" <?php if($info[0]['cata_id'] == '数据报告'): ?>selected="selected"<?php endif; ?> >数据报告</option>
		   </select></div>
		<div class='form-group'>发布新闻：
			<input type="radio" name="status" value="0" <?php if($info[0]['status'] == 0 ): ?>checked="checked"<?php endif; ?>>不发布<input type="radio" value="1" name="status" <?php if($info[0]['status'] == 1 ): ?>checked="checked"<?php endif; ?>>发布</div>
		
		<div class='form-group'>新闻内容：<textarea name="article_content" id='content' cols="15" rows="7" required><?php echo ($info[0]['news_content']); ?></textarea></div>
		<div class='form-group'>上传图片：<input type="file" name="upphoto" class="dropify" data-height="300px" width="300px" data-default-file="/aoshi/Public/<?php echo ($info[0]['news_picture']); ?>" ></div>
		<div class='form-group'><input type="submit" class="btn  btn-success" value="保存">&nbsp;&nbsp;<a href="javascript:history.go(-1);" class="btn  btn-default">返回</a></div>


	</form>
</div>
<link rel="stylesheet" type="text/css" href="/aoshi/Public/libs/dropify/dropify.min.css">
<script type="text/javascript" src="/aoshi/Public/libs/dropify/dropify.min.js"></script>

<script type="text/javascript">
	$('.dropify').dropify();
</script>

<script type="text/javascript" src="/aoshi/Public/libs/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/aoshi/Public/libs/ueditor/ueditor.all.min.js"></script>

<script type="text/javascript">
	 var ue = UE.getEditor('content');
</script>


<div class='container'><a class=" btn btn-danger" style=" float: right;" href="<?php echo U('Login/logout');?>">退出</a></div>
</body>
</html>