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


<link rel="stylesheet" type="text/css" href="/aoshi/aoshi/Public/css/admin/login.css">


<div class="login_box">
    <div class="h3-title">
    	<h3>职信道总后台管理系统</h3>
    </div>
    <div class="login">
        <form role="form" action="<?php echo U('Login/index');?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="user_name" required  placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="user_pwd" required placeholder="请输入密码">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="verify_val" required placeholder="请输入验证码">
                <br><img style="cursor: pointer;" class='verify_img' src="<?php echo U('Login/get_verify',array());?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">登录</button>
                
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src='/aoshi/aoshi/Public/js/admin/login.js'>   </script>
</body>
</html>