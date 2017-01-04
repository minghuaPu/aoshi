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

<link rel="stylesheet" href="/aoshi/aoshi/Public/css/enterprise/add.css?6">

    <div class="container">
        <div class="content">
            <form action="<?php echo U('Job/save');?>" method="post" class="form">
                <div class="content_box qu">
                    <h5>公司基本信息<span style="color: red ;font-weight: 600;font-size: 22px">*</span></h5>
                    <p>您的公司信息还未通过审核，请尽快通过审核，否则您将不能发布招聘信息！！</p>
                        <div class="form-group">
                            <div class="tit">公司全称</div>
                            <input type="text" name="company_name" required>
                        </div>
                </div>
                <div class="content_box">
                    <h5>职业基本信息<span style="color: red ;font-weight: 600;font-size: 22px">*</span></h5>
                        <div class="form-group">
                            <div class="tit">职位类型</div>
                            <input type="text" name="job_type" class="hide">
                            <div class="dropdown choose">
                                <button class="btn btn-default dropdown-toggle" required type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    选择职业类型
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">技术</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">设计</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="tit">职位名称</div>
                            <input type="text" name="job_name" required>
                        </div>
                        <div class="form-group">
                            <div class="tit">技能要求</div>
                            <input type="text" name="job_require" required>
                        </div>
                        <div class="form-group">
                            <div class="tit">工作地点</div>
                            <input type="text" name="place" required>
                        </div>
                        <div class="form-group">
                            <div class="tit">薪酬范围</div>
                            <input type="text" name="money" required>
                        </div>
                        <div class="form-group">
                            <div class="tit">学历要求</div>
                            <input type="text" name="education" class="hide">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" required type="button" id="dropdownMenu3" data-toggle="dropdown">
                                    选择学历
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu develop" role="menu" aria-labelledby="dropdownMenu2">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">博士</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">本科及以上</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大专及以上</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">学历不限</a></li>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="tit">工作经验</div>
                            <input type="text" name="work_time" class="hide">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" required type="button" id="dropdownMenu4" data-toggle="dropdown">
                                    不限
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu develop" role="menu" aria-labelledby="dropdownMenu2">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大于3年</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大于2年</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大于1年</a></li>
                            </div>
                        </div>
                        <div class="form-group job-require">
                            <div class="tit">职业描述</div>
                            <textarea  name="job_describe" required></textarea>
                        </div>
                </div>
                <div class="content_box">
                    <h5>其他信息<span style="color: red ;font-weight: 600;font-size: 22px">*</span></h5>
                    <div class="form-group">
                        <div class="tit">简历接收邮箱</div>
                        <input type="text" name="mail" required>
                    </div>
                </div>
                <div class="content_box qu">
                    <input type="hidden" name="enterprise_id"  value="<?php echo session('tid')?>">
                    <input type="submit" value="发 布" class="btn">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
<script src="/aoshi/aoshi/Public/js/enterprise/index.js?2"></script>
<script src="/aoshi/aoshi/Public/js/enterprise/add_job.js"></script>