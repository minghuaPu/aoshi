<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap-->
    <link rel="stylesheet" href="/aoshi/Public/libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/aoshi/Public/css/normalize.css">
    <!--style-->
    <link rel="stylesheet" href="/aoshi/Public/css/base.css">
    <!--[if lt IE 9]>
    <script src="/aoshi/Public/libs/html5shiv/html5shiv.min.js"></script>
    <script src="/aoshi/Public/libs/respond/respond.min.js"></script>
    <![endif]-->
    <!--owlcarousel-->
    <link rel="stylesheet" href="/aoshi/Public/libs/owlcarousel/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="/aoshi/Public/libs/owlcarousel/assets/owl.theme.default.css">-->
    <link rel="stylesheet" href="/aoshi/Public/css/animate.min.css">
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
                    <li><a href="<?php echo U('News/index');?>"><span>新闻和数据</span></a></li>
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
    <link rel="stylesheet" href="/aoshi/Public/css/home/news_detail.css">


<!--news-->
<div class="news">
    <div class="news-main">
        <div class="news-content">
            <h1 class="h1-title"><?php echo ($info[0]['news_title']); ?></h1>
            <div class="info"><p class="author"><?php echo ($info[0]['author']); ?><em>&nbsp;· &nbsp;</em><span class="time"><?php echo (date("Y-m-d H:i:s",$info[0]['add_time'])); ?></span><p class="tags"><?php echo ($info[0]['cata_id']); ?></p></p></div>
            <div class="content">
                   <?php echo htmlspecialchars_decode($info[0]['news_content']); ?>
            </div>
        </div>
        <div class="news-next">
            <h3 class="title">下一篇</h3>
            <p class="text-title"><a href="<?php echo U('News/news_detail',array('id'=>$info[0]['id']));?>"><?php echo ($info[0]['news_title']); ?></a></p>
            <div class="info"><p class="author">Cher Deo<em>&nbsp;· &nbsp;</em><span class="time">2016-10-10</span></p><p class="tags">干货文章</p></div>
        </div>
    </div>
    <div class="sider">
        <div class="news-sider">
            <div class="hot-news">
                <h3 class="title">热门新闻</h3>
                <ul>
                    <li><p class="text-title"><a href="#">职信道启动“攻薪季”招聘周，撮合优质大厂与实力牛人</a></p><div class="info"><p class="author"><span class="time">2016-10-22</span></p><p class="tags">公司动态</p></div></li>

                    <li><p class="text-title"><a href="#">职场人士如何利用业余时间实现自我提升</a></p><div class="info"><p class="author"><span class="time">2016-10-10</span></p><p class="tags">干货文章</p></div></li>

                    <li><p class="text-title"><a href="#">做好这七步，分分钟化解同事间冲突</a></p><div class="info"><p class="author"><span class="time">2016-10-08</span></p><p class="tags">干货文章</p></div></li>

                    <li><p class="text-title"><a href="#">社会即将分层，你将会在第几层？</a></p><div class="info"><p class="author"><span class="time">2016-09-29</span></p><p class="tags">干货文章</p></div></li>

                    <li style=" border-bottom:0px;"><p class="text-title"><a href="#" >张一鸣：我遇到的优秀年轻人的5个特质</a></p><div class="info"><p class="author"><span class="time">2016-09-29</span></p><p class="tags">干货文章</p></div></li>
                </ul>
            </div>
        </div>
        <div class="cooperation-sider"><a href="javascript:;" title="媒体合作" ><img src="/aoshi/Public/images/cooperation.jpg" width="400px" /></a></div>
    </div>
</div>

</body>
</html>