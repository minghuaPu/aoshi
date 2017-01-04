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

    <link rel="stylesheet" href="/aoshi/aoshi/Public/css/enterprise/job.css?2">

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
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">技术</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">设计</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <h5>工作经验</h5>
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
                            所有时间
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">所有时间</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大于3年</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大于2年</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大于1年</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">其他</a></li>
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
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">本科及以上</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">大专及以上</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">学历不限</a></li>
                        </ul>
                    </div>
                </div>
                <div class="search_box">
                    <input type="text" placeholder="输入关键词：职业类型或者地点等，例如：JAVA，广州天河">
                    <input type="button" value="筛 选" class="btn btn-primary">
                </div>
            </form>
            <div class="tit_box row">
                <div class="col-md-2 col-xs-2">职位名称</div>
                <div class="col-md-1 col-xs-1">类型</div>
                <div class="col-md-1 col-xs-1">薪资</div>
                <div class="col-md-1 col-xs-1">工作地点</div>
                <div class="col-md-1 col-xs-1">工作经验</div>
                <div class="col-md-2 col-xs-2">学历要求</div>
                <div class="col-md-1 col-xs-1">发布时间</div>
                <div class="col-md-2 col-xs-2">技能要求</div>
                <div class="col-md-1 col-xs-1">职位描述</div>
            </div>
            <table class="table row">
                <?php if(is_array($job_info)): foreach($job_info as $key=>$job_item): ?><tr id_val= "<?php echo ($job_item['id']); ?> ">
                        <th class="col-md-2 col-xs-2 revise job" name="job_name"><?php echo ($job_item['job_name']); ?></th>
                        <th class="col-md-1 col-xs-1" name="job_type"><?php echo ($job_item['job_type']); ?></th>
                        <th class="col-md-1 col-xs-1 revise money" name="money">￥<?php echo ($job_item['money']); ?></th>
                        <th class="col-md-1 col-xs-1 revise place" name="place"><?php echo ($job_item['place']); ?></th>
                        <th class="col-md-1 col-xs-1" name="work_time"><?php echo ($job_item['work_time']); ?></th>
                        <th class="col-md-2 col-xs-2" name="education"><?php echo ($job_item['education']); ?></th>
                        <th class="col-md-1 col-xs-1" name="add_time"><?php echo ($job_item['add_time']); ?></th>
                        <th class="col-md-2 col-xs-2 revise require" name="job_require"><?php echo ($job_item['job_require']); ?></th>
                        <th class="col-md-1 col-xs-1" name="add_time">点击详情</th>
                    </tr><?php endforeach; endif; ?>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>
<script src="/aoshi/aoshi/Public/js/enterprise/index.js?2"></script>
<script src="/aoshi/aoshi/Public/js/enterprise/search.js"></script>
<script>
    $(".revise").click(function  () {
        var this_val=$(this).text();
        var this_id=$(this).parent().attr("id_val");
        var this_name=$(this).attr("name");

        var job_val=$(".job").text();
        var money_val=$(".money").text();
        var place_val=$(".place").text();
        var require_val=$(".require").text();

        //怎么去除左右的空格
        // this_val.trim();

        // 把当前的变成输入框,并且赋上原来的值
        $(this).html("<input value='"+this_val.trim()+"' >");
        //为什么输入不了内容？
        $(this).find('input').focus();



        // 是在当前文本框失去焦点的时候执行
        $(this).find("input").blur(function  () {
            //$(this)  //td盒子  还是  input
            var input_val=$(this).val();
            // 还原，就是把当前td的input还原为纯文本的
            $(this).parent().html(input_val);//td对象

            if (this_name == "job_name") {
                job_val = input_val
            } else if (this_name == "money") {
                money_val = input_val
            } else if (this_name == "place") {
                place_val = input_val
            } else if (this_name == "job_require") {
                require_val = input_val
            }
            $.post(SITE_URL + "/job/ajax_add", {
                "id": this_id,
                "job_name": job_val,
                "place": place_val,
                "money": money_val,
                "job_require": require_val
            }, function (rtn) {

            }, "json")


            // 进行用ajax请求
            //第一个参数：请求的地址
            //第二个参数：请求的数据对象，标题的值，当前的文章id

        })
    })
</script>