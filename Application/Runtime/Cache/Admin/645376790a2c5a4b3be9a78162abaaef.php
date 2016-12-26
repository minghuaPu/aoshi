<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>




        <div class="container">
            <h1 class="h1-title"><?php echo ($info[0]['news_title']); ?></h1>
            <div class="form-group"><div class="author" style="float: right;"><?php echo ($info[0]['author']); ?><em>&nbsp;· &nbsp;</em><span style="float: right;" class="time"><?php echo (date("Y-m-d H:i:s",$info[0]['add_time'])); ?></span></div></div>
            <span class="tags" style="float: left;"><?php echo ($info[0]['cata_id']); ?></sqan>
            <div class="content">
                   <?php echo htmlspecialchars_decode($info[0]['news_content']); ?>
            </div>
            <a href="javascript:history.go(-1);" class="btn  btn-default">返回</a>
        </div>
       
    


</div>


<div class='container'><a class=" btn btn-danger" style=" float: right;" href="<?php echo U('Login/logout');?>">退出</a></div>
</body>
</html>