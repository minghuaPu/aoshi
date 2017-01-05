<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap-->
    <link rel="stylesheet" href="/project/aoshi/Public/libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/project/aoshi/Public/css/normalize.css">
    <!--style-->
    <link rel="stylesheet" href="/project/aoshi/Public/css/base.css">
    <!--[if lt IE 9]>
    <script src="/project/aoshi/Public/libs/html5shiv/html5shiv.min.js"></script>
    <script src="/project/aoshi/Public/libs/respond/respond.min.js"></script>
    <![endif]-->
    <!--owlcarousel-->
    <link rel="stylesheet" href="/project/aoshi/Public/libs/owlcarousel/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="/project/aoshi/Public/libs/owlcarousel/assets/owl.theme.default.css">-->
    <link rel="stylesheet" href="/project/aoshi/Public/css/animate.min.css">
    <script type="text/javascript" src="/project/aoshi/Public/js/jquery.1.11.1.min.js"></script>
    <title>前端首页</title>
    <script src="/project/aoshi/Public/libs/jquery/jquery.min.js"></script>
    <script src="/project/aoshi/Public/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        var SITE_URL="/project/aoshi/index.php/Home";
         var PUBLIC="/project/aoshi/Public";

    </script>
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
                    <li <?php if(CONTROLLER_NAME== Index AND ACTION_NAME== index ): ?>class="active"<?php endif; ?> ><a href="<?php echo U('Index/index');?>"><span>首页  </span></a></li>
                    
                    <li <?php if(ACTION_NAME== findjob): ?>class="active"<?php endif; ?> ><a href="<?php echo U('Index/findjob');?>"><span>求职</span></a></li>
                    <li><a href="#"><span>扫码登录</span></a></li>
                    <li <?php if(CONTROLLER_NAME== News): ?>class="active"<?php endif; ?> ><a href="<?php echo U('News/index');?>"><span>新闻和数据</span></a></li>
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
 

	<link rel="stylesheet" href="/project/aoshi/Public/css/common.css">
	<link rel="stylesheet" href="/project/aoshi/Public/css/jobdetail.css">
	 <div class="content">
	 	<div class="container">
		<div class="con-l">
			<div class="chat-top">
				<ul>
					<li><a><img src="/project/aoshi/Public/images/phone-icon.PNG">交换电话</a></li>
					<li><a><img src="/project/aoshi/Public/images/wx.PNG">交换微信</a></li>
				</ul>
			</div>
			<div class="chat-content">

				<?php if(is_array($job_detail)): foreach($job_detail as $key=>$job_item): ?><div class="company-word">
					<i></i><?php echo ($job_item['company_name']); ?>希望与您沟通以下职位<i></i>
				</div>		
				<div class="job-profile">
					<p><?php echo ($job_item['job_name']); ?></p>
					<p class="word-red">￥<?php echo ($job_item['money']); ?></p>
					<ul>
						<li>广州</li>
						<li>1-3年</li>
						<li>本科</li>
					</ul>
				</div><?php endforeach; endif; ?>
				<p class="local-time"></p>
				<div class="speak-box">
					<div class="box-con">
						<div class="img">
							<img src="/project/aoshi/Public/images/company-logo2.png">
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
							<img src="/project/aoshi/Public/images/company-logo2.png">
						</div>
						<p>
							<i class="i-left-jian"></i>
							你现在已经离职了？
						</p>
					</div>
					
				</div>
				<?php if(is_array($job_detail)): foreach($job_detail as $key=>$job_item): ?><div class="speak-box">
					<div class="box-con">
						<div class="img">
							<img src="/project/aoshi/Public/images/company-logo2.png">
						</div>
						<p>
							<i class="i-left-jian"></i>
							我是<?php echo ($job_item['company_name']); ?>公司的，请问你对这职业感兴趣？
						</p>
					</div>
					
				</div>
			</div>
			<form action>
				<div class="form-container">
					<textarea class="form-control" rows="4" placeholder="跟<?php echo ($job_item['company_name']); ?>说点什么吧！"></textarea>

					<p class="error"></p>
					<input type="submit" value="发送" class="send">
				</div>
			</form><?php endforeach; endif; ?>
			
		</div>
		<div class="con-r">
			<div class="search-box">
				<form action="findjob.html" method="post">
					<input type="text" name="key" placeholder="请输入职位或公司名称" class="search">
					<input type="submit" value="搜索" class="btn btn-info">
				</form>
			</div>
			<!-- 职位显示表-->

			<?php if(is_array($job_detail)): foreach($job_detail as $key=>$job_item): ?><div class="job-list">
				<div class="job-left">
					<p><?php echo ($job_item[job_name]); ?></p>
					<p class="word-red"><strong>￥<?php echo ($job_item[money]); ?></strong></p>
					<ul>
						<li>广州</li>
						<li>1-3年</li>
						<li>本科</li>
					</ul>
				</div>
				<div class="job-coner">
					
				</div>
				<sup>职信道</sup>
				<label><?php echo ($job_item[add_time]); ?><span>更新</span></label>
			</div>
			<!-- 公司显示表-->
			<div class="company-dec">
				<div class="company-left">
					<div class="company-img">
						<img src="/project/aoshi/Public/images/company-logo2.png">
					</div>
					<div class="company-name">
						<p><?php echo ($job_item[company_name]); ?><span>招聘中</span></p>
						<span class="company-status">在线</span>
					</div>
					<a href="#" class="btn-chat">立即开聊</a>
				</div>
			</div>
			<!-- 职位详情-->
			<div class="job-detail">
				<p class="job-describe">职位描述</p>
				<p class="con-dec"><?php echo ($job_item[job_describe]); ?></p>
				<p class="job-require">岗位要求</p>
				<p class="con-dec"><?php echo ($job_item[job_require]); ?></p>
				<p class="company-address">公司地址</p>
				<p class="con-dec"><?php echo ($job_item[place]); ?></p>
			</div>
		</div>
	</div><?php endforeach; endif; ?>
	 </div>
	
</body>
</html>