<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>用户登录界面</title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/jobseekers/register-login.css">
</head>
<body>
<div class="cent-box">
	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="login.html" class="active">登录</a>
				<a href="register.html">注册</a>
				<div class="slide-bar"></div>				
			</div>
		</div>
	<form action="<?php echo U('Login/index');?>" method="post">
		<div class="login form">
			<div class="group">
				<div class="group-ipt user">
					<input type="text" name="username" id="user" class="ipt" placeholder="请输入登录号码" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="password" id="password" class="ipt" placeholder="输入您的登录密码" required>
				</div>
                <div class="group-ipt " >
                	<input type="text" name="verify_val" placeholder="验证码" required> <br><img src="<?php echo U('Login/get_verify');?>" onclick="this.src=this.src+'?'">
                </div>
			</div>
		</div>

		<div class="button">
			<button type="submit" class="login-btn register-btn" id="button">登录</button>
		</div>

		<div class="remember clearfix">
			<label class="remember-me"><span class="icon"><span class="zt"></span></span><input type="checkbox" name="remember-me" id="remember-me" class="remember-mecheck" checked>记住我</label>
			<label class="forgot-password">
				<a href="#">忘记密码？</a>
			</label>
		</div>
	</div>
</form>
<script src="/aoshi/Public/js/jobseekers/background.js" type="text/javascript"></script>
<script src="/aoshi/Public/js/jobseekers/particles.js" type="text/javascript"></script>
<script src="/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/aoshi/Public/js/jobseekers/layer/layer.js" type="text/javascript"></script>
<script src="/aoshi/Public/js/jobseekers/index.js" type="text/javascript"></script>
<script>
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	});
</script>
</body>
</html>