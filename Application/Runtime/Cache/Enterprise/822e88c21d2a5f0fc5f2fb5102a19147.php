<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (ACTION_NAME); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/project/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/project/aoshi/Public/css/enterprise/index.css?1">
    <script type="text/javascript" src="/project/aoshi/Public/js/jquery.1.11.1.min.js"></script>
    <script type="text/javascript" src="/project/aoshi/Public/libs/bootstrap/js/bootstrap.min.js"></script>
      		<script type="text/javascript" src="/project/aoshi/Public/js/jobseekers/main.js"></script>
   		<script type="text/javascript" src="/project/aoshi/Public/js/jobseekers/cropper.min.js"></script>
    <script type="text/javascript">
        var SITE_URL="/project/aoshi/index.php/Enterprise";
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
            <div class="box">
    
            <!----------------------------------------------------img(begin)------------------------------------------->            
                    
 		   <div  id="crop-avatar" class="center" >
            
                        <!-- Current avatar -->
                      
            <div class="avatar-view" title="点击换头像">
               <?php if(is_array($user_info)): foreach($user_info as $key=>$item): ?><img src="<?php echo ($item["photo"]); ?>"  id="avatar-img" style="border-radius:50%" class="rate"/><?php endforeach; endif; ?>
            </div>
            
                      
                      <!-- Cropping modal -->
            <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="avatar-form" action="<?php echo U('Crop/index');?>" enctype="multipart/form-data" method="post">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" type="button">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">更换头像</h4>
                            </div>
                            <div class="modal-body">
                                <div class="avatar-body">

                                    <!-- Upload image and data -->
                                    <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden"/>
                                        <input class="avatar-data" name="avatar_data" type="hidden"/>
                                        <label for="avatarInput">头像上传</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file"/>
                                    </div>

                                    <!-- Crop and preview -->
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="avatar-preview preview-lg"></div>
                                            <div class="avatar-preview preview-md"></div>
                                            <div class="avatar-preview preview-sm"></div>
                                        </div>
                                    </div>

                                    <div class="row avatar-btns">
                                        <div class="col-md-9">
                                            <div class="btn-group">
                                                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal-footer">
                              <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->

      </div>
 		 <!---------------------------------------------------------img(end)------------------------------------------>

            </div>
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

<link rel="stylesheet" href="/project/aoshi/Public/css/enterprise/resume.css?3">
<div class="container">
    <div class="content">
        <form action="">
            <div class="search_nav">
                <div class="dropdown">
                    <h5>职位类别</h5>
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                        选择职业
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Web前端开发工程师</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Java后台架构师</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">更多以后再完善</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <h5>投递时间</h5>
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
                        所有时间
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">所有时间</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">今天</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">最近三天</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">最近一周</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">最近一个月</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <h5>学历</h5>
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown">
                        选择学历
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">研究生</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">本科</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大专</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">其他</a></li>
                    </ul>
                </div>
            </div>
            <div class="search_box">
                <input type="text" placeholder="输入关键词：职业类型或者地点等，例如：JAVA，广州天河">
                <input type="button" value="筛 选" class="btn btn-primary">
            </div>
        </form>
        <div class="tit_box row">
            <div class="col-md-3 col-xs-3">职位名称</div>
            <div class="col-md-1 col-xs-1">姓名</div>
            <div class="col-md-1 col-xs-1">性别</div>
            <div class="col-md-1 col-xs-1">薪资</div>
            <div class="col-md-1 col-xs-1">学历</div>
            <div class="col-md-2 col-xs-2">投递时间</div>
            <div class="col-md-2 col-xs-2">联系电话</div>
            <div class="col-md-1 col-xs-1">详情</div>
        </div>
        <table class="table row">
                <tr>
                    <th class="col-md-3 col-xs-3">Web前端开发工程师</th>
                    <th class="col-md-1 col-xs-1">陈小明</th>
                    <th class="col-md-1 col-xs-1">男</th>
                    <th class="col-md-1 col-xs-1">￥5555</th>
                    <th class="col-md-1 col-xs-1">本科大学</th>
                    <th class="col-md-2 col-xs-2">16年10月26日</th>
                    <th class="col-md-2 col-xs-2">18888888888</th>
                    <th class="col-md-1  col-xs-1 state"><input type="button" value="点击查看" class="btn btn-info"></th>
                </tr>
        </table>
    </div>
</div>
</div>
</body>
</html>
<script src="/project/aoshi/Public/js/enterprise/index.js?2"></script>
<script src="/project/aoshi/Public/js/enterprise/search.js"></script>