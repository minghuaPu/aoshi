<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap-->
    <link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/normalize.css">
    <!--style-->
    <link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/base.css">
    <!--[if lt IE 9]>
    <script src="/thinkphp_3.2.3_full/Public/libs/html5shiv/html5shiv.min.js"></script>
    <script src="/thinkphp_3.2.3_full/Public/libs/respond/respond.min.js"></script>
    <![endif]-->
    <!--owlcarousel-->
    <link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/libs/owlcarousel/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/libs/owlcarousel/assets/owl.theme.default.css">-->
    <link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/animate.min.css">
    <title>前端首页</title>
</head>
<body>
<!--header-->
<header id="header">
    <!--导航条-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BRAND<br>&nbsp;职信道</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li <?php if(ACTION_NAME== index): ?>class="active"<?php endif; ?> ><a href="<?php echo U('Index/index');?>"><span>首页  </span></a></li>
                    
                    <li <?php if(ACTION_NAME== findjob): ?>class="active"<?php endif; ?> ><a href="<?php echo U('Index/findjob');?>"><span>求职</span></a></li>
                    <li><a href="#"><span>扫码登录</span></a></li>
                    <li><a href="#"><span>新闻和数据</span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="icon-ios"></i>iOS</a></li>
                    <li><a href="#"><i class="icon-android"></i>Android</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<!--header-->
 

	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/common.css">
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/jobdetail.css">
	 
	<div class="container">
		<div class="con-l">
			<div class="chat-top">
				<ul>
					<li><a><img src="/thinkphp_3.2.3_full/Public/images/phone-icon.PNG">交换电话</a></li>
					<li><a><img src="/thinkphp_3.2.3_full/Public/images/wx.PNG">交换微信</a></li>
				</ul>
			</div>
			<div class="chat-content">
				<div class="company-word">
					<i></i>公司名希望与您沟通以下职位<i></i>
				</div>		
				<div class="job-profile">
					<p>前端工程师</p>
					<p class="word-red">￥15K-30K</p>
					<ul>
						<li>广州</li>
						<li>1-3年</li>
						<li>本科</li>
					</ul>
				</div>
				<p class="local-time">20:20</p>
				<div class="speak-box">
					<div class="box-con">
						<div class="img">
						
						</div>
						<p>
							<i class="i-left-jian"></i>
							你好！
						</p>
					</div>
					
				</div>
				<div class="speak-box">
					<div class="box-con">
						<div class="img">
						
						</div>
						<p>
							<i class="i-left-jian"></i>
							你现在已经离职了？
						</p>
					</div>
					
				</div>
				<div class="speak-box">
					<div class="box-con">
						<div class="img">
						
						</div>
						<p>
							<i class="i-left-jian"></i>
							我是某公司的，请问你对这职业感兴趣？
						</p>
					</div>
					
				</div>
			</div>
			<form action>
				<div class="form-container">
					<textarea class="form-control" rows="4" placeholder="跟公司说点什么吧！"></textarea>

					<p class="error"></p>
					<input type="submit" value="发送" class="send">
				</div>
			</form>
			
		</div>
		<div class="con-r">
			<div class="search-box">
				<form action="" method="post">
					<input type="text" name="key" placeholder="请输入职位或公司名称" class="search">
					<input type="submit" value="搜索" class="btn btn-info">
				</form>
			</div>
			<!-- 职位显示表-->
			<div class="job-list">
				<a href="#">
					<div class="job-left">
						<p>前端工程师</p>
						<p class="word-red"><strong>￥15K-30K</strong></p>
						<ul>
							<li>广州</li>
							<li>1-3年</li>
							<li>本科</li>
						</ul>
					</div>
					<div class="job-coner">
						
					</div>
					<sup>职信道</sup>
				</a>
				<label>2016-12-20<span>更新</span></label>
			</div>
			<!-- 公司显示表-->
			<div class="company-dec">
				<div class="company-left">
					<div class="company-img">
						<img src="">
					</div>
					<div class="company-name">
						<p>公司名<span>招聘中</span></p>
						<span class="company-status">在线</span>
					</div>
					<a href="#" class="btn-chat">立即开聊</a>
				</div>
			</div>
			<!-- 职位详情-->
			<div class="job-detail">
				<p class="job-describe">职位描述</p>
				<p class="con-dec">职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述职位描述</p>
				<p class="job-require">岗位要求</p>
				<p class="con-dec">岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求岗位要求</p>
				<p class="company-address">公司地址</p>
				<p class="con-dec">公司地址公司地址公司地址公司地址公司地址公司地址</p>
			</div>
		</div>
	</div>
</body>
</html>