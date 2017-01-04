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
<link rel="stylesheet" href="/project/aoshi/Public/css/findjob.css"> 
  	 

<!-- banner -->
	<div class="container">
		<div class="banner-download">
			<div class="img">
				<img src="/project/aoshi/Public/images/download-phone.png">
			</div>
			<span>上职信道<br>找好工作</span>
			<p>职信道<br>助您轻松找工作</p>
			<div class="btn-download">
				<a href="#" class="iphone"></a>
				<a href="#" class="android"></a>
			</div>
		</div>
	</div>
<!-- 职位列表 -->
	<div class="container">
		<div class="position-left">
			<div class="item">
				<div class="main">
					<span>技术</span>
					<ul>
						<li><a href="#">Java</a></li>
						<li><a href="#">PHP</a></li>
						<li><a href="#">Web前端</a></li>
						<li><a href="#">测试工程师</a></li>
						<li><a href="#">C++</a></li>
					</ul>
				</div>
				<!-- 职位弹框 -->
				<div class="slide">
					<div class="top-job">
						<span>技术类top10职位</span>
						<ul>
							<li><a href="#">Java</a></li>
							<li><a href="#">PHP</a></li>
							<li><a href="#">Web前端</a></li>
							<li><a href="#">测试工程师</a></li>
							<li><a href="#">C++</a></li>
							<li><a href="#">android</a></li>
							<li><a href="#">运维工程师</a></li>
							<li><a href="#">.Net</a></li>
							<li><a href="#">项目经理</a></li>
							<li><a href="#">IOS</a></li>
						</ul>
					</div>
				</div>
				<div class="cover"></div>				
			</div>
			<div class="item">
				<div class="main">
					<span>设计</span>
					<ul>
						<li><a href="#">平面设计师</a></li>
						<li><a href="#">美工</a></li>
						<li><a href="#">UI设计师</a></li>
						<li><a href="#">视觉设计师</a></li>
						<li><a href="#">三维/CAD/制图</a></li>
					</ul>
				</div>
				<!-- 职位弹框 -->
				<div class="slide">
					<div class="top-job">
						<span>设计类top10职位</span>
						<ul>
							<li><a href="#">平面设计师</a></li>
							<li><a href="#">美工</a></li>
							<li><a href="#">UI设计师</a></li>
							<li><a href="#">视觉设计师</a></li>
							<li><a href="#">三维/CAD/制图</a></li>
							<li><a href="#">网页设计师</a></li>
							<li><a href="#">美术设计师</a></li>
							<li><a href="#">设计师助理</a></li>
							<li><a href="#">家具设计</a></li>
							<li><a href="#">交互设计师</a></li>
						</ul>
					</div>
				</div>	
				<div class="cover"></div>			
			</div>
		</div>
		<div class="position-right">
			<div class="search-box">
				<form id="search-form" action="" method="post">
					<input type="text" name="key" placeholder="请输入职位或公司名称" class="search">
					<input type="submit" value="搜索" class="btn btn-info">
				</form>
			</div>
			<div class="search-tip">
				<p><?php echo ($_REQUEST['key']); ?>&nbsp;相关搜索结果</p>

			</div>
			<!-- 职位详情表 -->


<!-- 第四步：遍历模版变量 -->
		<?php if(is_array($job_info)): foreach($job_info as $key=>$job_item): ?><div class="job-list">
				<a href="#"><!-- <?php echo U('Index/jobdetail');?> -->
					<div class="job-left">
					<!-- 第五步：给对应信息添加动态数据 -->
						<p class="job-name"><?php echo ($job_item['job_name']); ?></p>
						<p class="word-red"><strong>￥<?php echo ($job_item['money']); ?></strong></p>
						<ul>
							<li>广州</li>
							<li>1-3年</li>
							<li>本科</li>
						</ul>
					</div>
					<div class="job-right">
						<div class="company-img">
							<img src="/project/aoshi/Public/images/company-logo2.png">
						</div>
						<span><?php echo ($job_item['company_name']); ?></span>
					</div>
				</a>
			</div><?php endforeach; endif; ?>

			<div class="next-page">
				<a href="#">下一页</a>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="/project/aoshi/Public/js/enterprise/findjob.js"></script>
</body>
</html>