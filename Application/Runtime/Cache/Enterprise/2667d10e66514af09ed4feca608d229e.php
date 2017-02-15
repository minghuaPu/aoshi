<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/aoshi/Public/css/enterprise/login.css?5">
    <link rel="stylesheet" href="/aoshi/Public/css/enterprise/register.css?2">
    <script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>

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
    <div class="login reg">
        <div class="touxiang"></div>
        <form action="<?php echo U('Login/register');?>" method="post">
            <div class="form-group">
                <input type="text" name="user_name" class="name" placeholder="用户名" required>
                <p></p>
            </div>
            <div class="form-group">
                <input type="password" name="user_pwd" class="pwd" placeholder="密码" required>
                <p></p>
            </div>
            <div class="form-group">
                <input type="password" name="user_pwd_confirm" class="pwd_confirm" placeholder="确认密码" required>
                <p></p>
            </div>
            <p>请用户尽快完善公司信息以便审核</p>
            <div class="form-group sub">
                <input type="submit" class="btn btn-primary" value="注 册" id="register">
            </div>

        </form>

        <ul>
            <li><a href="<?php echo U('Login/login');?>">返回登录</a></li>
        </ul>
        <a href="<?php echo U('Jobseekers/Login/register');?>" class="ex_jobseeker">切换到求职者版</a>
    </div>
</div>
<script src="/aoshi/Public/js/jquery.1.11.1.min.js" type="text/javascript"></script>
<script src="/aoshi/Public/js/enterprise/login.js?3" type="text/javascript"></script>
<script>
    var action="<?php echo (ACTION_NAME); ?>";

    if (action=="register"){
        $(document).attr("title","注册");
    }
</script>
</body>
</html>