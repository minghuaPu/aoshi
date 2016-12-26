<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
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

<!--内容-->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-defined">
                <h1 class="animated fadeInDown">职信道,让你更快更好找到心仪的工作</h1>
            </div>
            <div class="col-md-12">
                <h2 class="animated fadeInDown">在线聊天·行为数据匹配·名气高薪职位</h2>
            </div>
            <div class="col-lg-12">
                <div class="input-group input-defined">
                    <form action="" method="get">
                        <input type="text" class="form-control animated bounceIn" placeholder="输入公司或职位">
                        <span class="input-group-btn">
        <button class="btn btn-default icon-search" type="submit"></button>
      </span>
                    </form>

                </div>
            </div>
            <div class="col-md-4">
                <div class="wrap">
                    <i class="icon-box"></i>
                    <h5>注册职信道</h5>
                </div>
                <div class="wrap-mouse">
                    <h5>注册职信道</h5>
                    <p>即刻与百万Boss立即开聊</p>
                    <a href="#">
                        <button class="btn btn-default  btn-defined">注册</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 cur">
                <div class="wrap">
                    <i class="icon-box box2"></i>
                    <h5>扫描登录网页版</h5>
                </div>
                <div class="wrap-mouse">
                    <h5>扫描登录网页版</h5>
                    <p>老用户使用职信道APP扫描二维码</p>
                    <a href="#">
                        <button class="btn btn-default btn-defined btn-defined1">
                            <i class="icon-comp"></i>
                            扫码登录
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrap">
                    <i class="icon-box box3"></i>
                    <h5>下载职信道</h5>
                </div>
                <div class="wrap-mouse">
                    <h5>下载职信道</h5>
                    <p>即刻与百万Boss立即开聊</p>
                    <a href="#">
                        <button class="btn btn-default btn-defined">下载</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--内容-->
<!--chat-->
<section class="chat">
    <h1 class="wow animated fadeInDown">职信道</h1>
    <p class="wow animated fadeInDown">企业职场达人与职场牛人直接在线开聊</p>
    <div class="container">
        <div class="row">
            <div class="col-md-3"><div class="circle circle1"></div></div>
            <div class="col-md-3"><div class="circle circle2"></div></div>
            <div class="col-md-3"><div class="circle circle3"></div></div>
            <div class="col-md-3"><div class="circle circle4"></div></div>
            <div class="col-md-12">
                <img class="line" src="/aoshi/Public/images/figure-line.png" alt="..">
            </div>
            <div class="col-md-12">
                <p class="brand-defined">BRAND<br>职信道</p>
            </div>
            <div class="col-md-12">
                <img class="phone" src="/aoshi/Public/images/figure-phone-1.png" alt="..">
            </div>
        </div>
    </div>
</section>
<!--chat-->

<!--details-->
<section id="details">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-5">
                <div class="img-wrap">
                    <p>TOM</p>
                    <img class="chat-wrap" src="/aoshi/Public/images/download-phone.png" alt="...">
                    <div class="list-wrap">
                        <img src="/aoshi/Public/images/chat-list.png" alt="..." class="chat-list wow animated fadeInUp">
                    </div>

                    <img src="/aoshi/Public/images/chat-tip.png" alt="..." class="chat-tip wow animated fadeInUp">
                </div>

            </div>
            <div class="col-md-6">
                <div class="content-wrap">
                    <h1 class="media-heading wow animated fadeInDown">职信道/DIRECT-CHATTING</h1>
                    <p class="wow animated fadeInDown">在APP上跟未来BOSS直接开聊<br>与冷冰冰的简历投递说再见</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--details-->
<!--company-->
<section class="company chat">
    <h1 class="wow animated fadeInDown">名企 / FAMOUS COMPANY</h1>
    <p class="wow animated fadeInDown">阿里百度腾讯，滴滴美团京东。都在用职信道招人</p>
    <div class="container">
        <div class="row">
            <div class="comp-img-wrap">
                <img src="/aoshi/Public/images/figure-computer.png" alt="...">
            </div>
            <div class="logo-wrap">
                <ul class="figure-logo">
                    <li class="logo1">
                        <img src="/aoshi/Public/Picture/logo-didi.png" alt="...">
                    </li>
                    <li class="logo2">
                        <img src="/aoshi/Public/Picture/logo-baidu.png" alt="...">
                    </li>
                    <li class="logo3">
                        <img src="/aoshi/Public/Picture/logo-meituan.png" alt="...">
                    </li>
                    <li class="logo4">
                        <img src="/aoshi/Public/Picture/logo-jd.png" alt="...">
                    </li>
                    <li class="logo5">
                        <img src="/aoshi/Public/Picture/logo-ali.png" alt="...">
                    </li>
                    <li class="logo6">
                        <img src="/aoshi/Public/Picture/logo-tencent.png" alt="...">
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!--company-->

<!--details-->
<section id="pay">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-wrap">
                    <h1 class="wow animated fadeInDown">DECENT PAY / 高薪</h1>
                    <p class="wow animated fadeInDown">除了真人在线之外<br>BOSS们认为最能表现诚意的是可观的薪资</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-wrap">
                    <img src="/aoshi/Public/images/figure-phone-3.png" alt="...">
                </div>
                <ul class="cards-list">
                    <li class="card1 wow animated fadeInUp"></li>
                    <li class="card2 wow animated fadeInUp"></li>
                    <li class="card3 wow animated fadeInUp"></li>
                    <li class="card4 wow animated fadeInUp"></li>
                    <li class="card5 wow animated fadeInUp"></li>
                    <li class="card6 wow animated fadeInUp"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--details-->
<!--media-->
<section class="media">
    <div class="title wow animated fadeInDown">
        <h1>媒体报道</h1>
        <p class="line"></p>

    </div>
    <div class="container">
        <div class="row">
            <div class="media-link col-md-12">
                <div class="col-md-2 link1 wow animated fadeInLeft">
                   <a href="#"></a>
                </div>
                <div class="col-md-2 link2 wow animated fadeInLeft">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link3 wow animated fadeInLeft">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link4 wow animated fadeInRight">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link5 wow animated fadeInRight">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link6 wow animated fadeInRight">
                    <a href="#"></a>
                </div>
                <div class="col-md-12" style="margin:20px 0"></div>
                <div class="col-md-2 link7 wow animated fadeInLeft">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link8 wow animated fadeInLeft">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link9 wow animated fadeInLeft">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link10 wow animated fadeInRight">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link11 wow animated fadeInRight">
                    <a href="#"></a>
                </div>
                <div class="col-md-2 link12 wow animated fadeInRight">
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </div>

</section>
<!--media-->

<!--carousel-->
<section class="carousel">
    <div class="title wow animated fadeInDown">
        <h1>他们一直在用</h1>
        <p class="line"></p>
    </div>
    <div class="owl-carousel">
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-1.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-2.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-3.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-4.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-5.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-6.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-7.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-8.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-9.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-10.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-11.png"></div>
        <div class="owl-item"><img src="/aoshi/Public/Picture/c-12.png"></div>
        <div class="owl-nav">
            <div class="owl-pre"></div>
            <div class="owl-next"></div>
        </div>
    </div>
</section>
<!--carousel-->

<!--footer-->
<section class="footer">
    <p class="p1">Copyright © 2016 zhixindao.com京ICP备14018958号-1</p>
    <p class="p2">zhixindao.com.保留所有版权. 使用这些服务遵守用户协议</p>
</section>
<!--footer-->
<script src="/aoshi/Public/libs/jquery/jquery.min.js"></script>
<script src="/aoshi/Public/js/wow.min.js"></script>
<script src="/aoshi/Public/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/aoshi/Public/libs/owlcarousel/owl.carousel.min.js"></script>
<script src="/aoshi/Public/js/base.js"></script>
</body>
</html>