<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
    <script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
    <title>前端首页</title>
    <script src="/aoshi/Public/libs/jquery/jquery.min.js"></script>
    <script src="/aoshi/Public/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        var SITE_URL="/aoshi/index.php/Home";
         var PUBLIC="/aoshi/Public";

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

                    <?php if($name): if(is_array($name)): foreach($name as $key=>$name): ?><li> <a href="<?php echo U('Jobseekers/Index/index');?>"><?php echo ($name["username"]); ?></a></li>
       <li><a href="<?php echo U('Jobseekers/Login/log_out');?>">退出</a></li><?php endforeach; endif; ?>  
    <?php else: ?>   
         <li><a href="<?php echo U('Jobseekers/Login/login');?>">登录/注册</a></li><?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<!--header-->
<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/Home/news_list.css">

<div class="box-1">
    <h1>职信道新闻和数据实时跟踪</h1>
    <p><a href="javascript:;" >媒体合作</a></div></p>   
</div>
<div class="container main">
    <div class="box-2">
        <?php if(is_array($type)): $i = 0; $__LIST__ = array_slice($type,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><div class="sort">
                    <div class="title"> 
                         <p class="name" ><?php echo ($news["cata_id"]); ?></p>
                         <span class="more"><a class="better" id_val="<?php echo ($news["cata_id"]); ?>">more</a></span>
                    </div>
                     <div class="picture">
                    <a href="<?php echo U('News/news_detail',array('id'=>$news['id']));?>"><img src="/aoshi/Public/<?php echo ($news["news_picture"]); ?>" width="300px" height="150px"></a>
                     </div>
                        <p class="text-title"><a href="<?php echo U('News/news_detail',array('id'=>$news['id']));?>" ><?php echo ($news["news_title"]); ?></a></p>
                        <p class="details"><a href="<?php echo U('News/news_detail',array('id'=>$news['id']));?>" >查看详情</a></p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <div class="box-3">
        <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><div class="in">
                <div class="left" ><a href="<?php echo U('News/news_detail',array('id'=>$news['id']));?>"><img src="/aoshi/Public/<?php echo ($news["news_picture"]); ?>" width="300px" height="180px"></a><a href="#"><span class='cata'><?php echo ($news["cata_id"]); ?></span> </a></div>
                <div class="right">
                    <p class="list"><a href="<?php echo U('News/news_detail',array('id'=>$news['id']));?>" ><?php echo ($news["news_title"]); ?></a></p>
                    <p class="author"><?php echo msubstr(strip_tags(str_replace('&nbsp;','',htmlspecialchars_decode($news['news_content']))),0,100,$charset="utf-8",$suffix=ture); ?></p>
                    <p class="author"><?php echo ($news["author"]); ?>&nbsp;.&nbsp;<?php echo (date("Y-m-d H:i:s",$news["add_time"])); ?></p>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

      <div class="box-4">
              <p><a class="skin" href="javascript:;">浏览更多</a></p>
      </div>
       <div class="box-5"></div>
</div>

<script type="text/javascript" src='/aoshi/Public/js/Home/news_list.js'></script> 

<<<<<<< HEAD


=======
<!--footer-->
<section class="footer">
    <p class="p1">Copyright © 2016 zhixindao.com京ICP备14018958号-1</p>
    <p class="p2">zhixindao.com.保留所有版权. 使用这些服务遵守用户协议</p>
</section>
<!--footer-->
<script src="/aoshi/Public/js/wow.min.js"></script>
<script src="/aoshi/Public/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/aoshi/Public/libs/owlcarousel/owl.carousel.min.js"></script>
<script src="/aoshi/Public/js/base.js"></script>
>>>>>>> 52745953a4e8f54f493eca97c12ccde434932b74
</body>
</html>