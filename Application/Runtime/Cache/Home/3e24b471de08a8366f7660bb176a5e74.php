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
  
<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/Home/news_list.css">

   <div class="box-1">
        <h1>职信道新闻和数据实时跟踪</h1>
        <p><a href="javascript:;" >媒体合作</a></div></p>   
    </div>

    <div class="box-2">
    <div class="container">
        <div class="sort">
            <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><div class="title"> 
                 <p class="name" ><?php echo ($news["cata_id"]); ?></p>
                 <p class="more"><a href="javascript:;">more</a></p>
            </div>
            <div class="picture">
                    <img src="/aoshi/Public/<?php echo ($news["news_picture"]); ?>" width="300px" height="150px">
            </div>
            <p class="text-title"><?php echo ($news["news_title"]); ?></p>
            <a class="details" href="<?php echo U('News/news_detail',array('id'=>$news['id']));?>" >查看详情</a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>
    </div>

    <div class="box-3">
        <div class="container">
            <div class="out">
                <div class="in">
                    <?php if(is_array($info)): $i = 0; $__LIST__ = array_slice($info,3,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><div class="left" ><img src="/aoshi/Public/<?php echo ($news["news_picture"]); ?>" width="300px" height="150px"></a></div>
                    <div class="right">
                        <h2><a href="javascript:;" ><?php echo ($news["news_title"]); ?></a></h2>
                        <p>  <?php echo htmlspecialchars_decode($news.news_content); ?></p>
                        <p><?php echo ($news["author"]); echo (date("Y-m-d H:i:s",$new["add_time"])); ?></p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
      </div>


      <div class="box-4">
          <div class="container">
              <p><a href="javascript:;">浏览更多</a></p>
          </div>
      </div>
</body>
</html>