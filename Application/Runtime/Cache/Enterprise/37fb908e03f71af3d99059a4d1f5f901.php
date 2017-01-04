<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (ACTION_NAME); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/aoshi/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/aoshi/aoshi/Public/css/enterprise/index.css?5">
    <script type="text/javascript" src="/aoshi/aoshi/Public/js/jquery.1.11.1.min.js"></script>
    <script type="text/javascript" src="/aoshi/aoshi/Public/libs/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        var SITE_URL="/aoshi/aoshi/index.php/Enterprise";
    </script>
</head>
<body>
<div class="body">
    <div class="header">
        <div class="logo">
            <div class="logoImg">
                BRAND
                <br>职信通
            </div>
            <h3>互联网招聘神器</h3>
        </div>
    </div>
    <div class="nav_bar">
        <div class="touxiang">
            <div class="box">头像</div>
            <p>姓名</p>
        </div>
        <div class="nav_item">
            <div class="item job">
                <div
                    <?php if(ACTION_NAME== add_job): ?>class="tit it_sel"<?php endif; ?>
                    <?php if(ACTION_NAME== job_list): ?>class="tit it_sel"<?php endif; ?>
                class="tit">
                    <span class="icon_job"></span>
                    <p>职位</p>
                    <span
                        <?php if(ACTION_NAME== add_job): ?>class="i_open"<?php endif; ?>
                        <?php if(ACTION_NAME== job_list): ?>class="i_open"<?php endif; ?>
                    class="i_close"></span>
                </div>
                <ul
                    <?php if(ACTION_NAME== add_job): ?>class="show"<?php endif; ?>
                    <?php if(ACTION_NAME== job_list): ?>class="show"<?php endif; ?>
                    class="hide">
                    <li
                    <?php if(ACTION_NAME== add_job): ?>class="li_sel"<?php endif; ?>
                    ><a href="<?php echo U('Job/add_job');?>">新职位</a></li>
                    <li
                    <?php if(ACTION_NAME== job_list): ?>class="li_sel"<?php endif; ?>
                    ><a href="<?php echo U('Job/job_list');?>">已发布职位</a></li>
                </ul>
            </div>
            <div class="item seeker">
                <div
                    <?php if(ACTION_NAME== resume): ?>class="tit it_sel"<?php endif; ?>
                class="tit">
                    <span class="icon_user"></span>
                    <p>求职者</p>
                    <a href="<?php echo U('Seeker/resume');?>"></a>
                </div>
            </div>
            <!--<div class="item mess">-->
                <!--<div class="tit">-->
                    <!--<span class="icon_mess"></span>-->
                    <!--<p>消息</p>-->
                    <!--<span class="badge">14</span>-->
                <!--</div>-->
            <!--</div>-->
            <div class="item me">
                <div
                <?php if(ACTION_NAME== index): ?>class="tit it_sel"<?php endif; ?>
                class="tit">
                    <span class="icon_me"></span>
                    <p>公司信息</p>
                    <a href="<?php echo U('Company/index');?>"></a>
                </div>
            </div>
    </div>
    <div class="tool">
        <div class="logout">
            <span class="i_logout"></span>
            <p><a href="<?php echo U('login/logout');?>">退出登陆</a></p>
        </div>
    </div>
</div>

</div>
</body>
</html>
<script src="/aoshi/aoshi/Public/js/enterprise/index.js?2"></script>