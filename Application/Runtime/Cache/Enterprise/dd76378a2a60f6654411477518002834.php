<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/aoshi/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/aoshi/aoshi/Public/css/enterprise/login.css?3">
</head>
<body>
<div class="body">
    <div class="bg"></div>
    <div class="logo">
        <div class="logoImg">
            BRAND
            <br>职信通
        </div>
        <h3>互联网招聘神器</h3>
    </div>
    <div class="login">
        <div class="touxiang"></div>
        <form action="<?php echo U('Login/login');?>" method="post">
            <div class="form-group">
                <input type="text" name="user_name" placeholder="用户名" class="write" required >
            </div>
            <div class="form-group">
                <input type="password" name="user_pwd" placeholder="密码" class="write" required>
            </div>
            <div class="form-group">
                <input type="text" name="verify_val" placeholder="验证码" required>
                <img src="<?php echo U('Login/get_verify');?>">
            </div>
            <div class="form-group log">
                <input type="submit" class="btn btn-primary" value="登 录">
            </div>
        </form>
        <ul>
            <li><a href="<?php echo U('Login/register');?>">注册</a></li>
            <li>忘记密码？</li>
        </ul>
    </div>
</div>

</body>
</html>