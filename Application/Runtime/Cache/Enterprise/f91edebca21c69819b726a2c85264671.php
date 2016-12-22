<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/index.css">
</head>
<body>
<div class="body">
	<div class="header">
		<div class="logo">logo</div>
	</div>
	<div class="nav_bar">
		<div class="touxiang">
			<div class="box">头像</div>
			<p>姓名</p>
		</div>
		<div class="nav_item">
			<div class="item job">
				<div class="tit">
					<span class="icon_job"></span>
					<p>职位</p>
					<span class="i_open"></span>
				</div>
				<ul style="display: none">
					<li><a href="add_job.html">新职位</a></li>
					<li><a href="job_list.html">已发布职位</a></li>
				</ul>
			</div>
			<div class="item user">
				<div class="tit">
					<span class="icon_user"></span>
					<p>牛人</p>
					<span class="i_open"></span>
				</div>
				<ul style="display: none">
					<li>看过我</li>
					<li>收藏我</li>
					<li>搜索</li>
				</ul>
			</div>
			<div class="item select">
				<div class="tit">
					<span class="icon_select"></span>
					<p>候选人</p>
				</div>
			</div>
			<div class="item mess">
				<div class="tit">
					<span class="icon_mess"></span>
					<p>消息</p>
				</div>
			</div>
			<div class="item me">
				<div class="tit">
					<span class="icon_me"></span>
					<p>我的</p>
					<span class="i_open"></span>
				</div>
				<ul style="display: none">
					<li>我的公司</li>
				</ul>
			</div>
		</div>
		<div class="tool">
			<div class="logout">
				<span class="i_logout"></span>
				<p>退出登录</p>
			</div>
			<div class="setting">
				<span class="i_logout"></span>
				<p>设置</p>
			</div>
		</div>
	</div>
</div>

    <link rel="stylesheet" href="../public/css/job.css">

    <div class="container">
        <div class="content">
            <form action="">
                <div class="search">
                    <div class="job_type">
                        <span>职位类型</span>
                        <input type="text">
                    </div>
                    <div class="time">
                        <span>发布时间</span>
                        <input type="date">
                        到
                        <input type="date">
                    </div>
                    <input type="button" value="筛 选" class="btn">
                </div>
            </form>
            <div class="tit_box">
                <ul>
                    <li>职位名称</li>
                    <li>职位类型</li>
                    <li>薪资</li>
                    <li>工作地点</li>
                    <li>发布时长</li>
                    <li>看过我的</li>
                    <li>状态</li>
                </ul>
            </div>
            <table class="table">
                <tr>
                    <th>PHP工程师</th>
                    <th>工程师</th>
                    <th>3k到5k</th>
                    <th>广州天河区</th>
                    <th>5个月5天</th>
                    <th><a href="">共5人</a></th>
                    <th>已结束</th>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.1.11.1.min.js"></script>
<script src="/thinkphp_3.2.3_full/Public/js/index.js?3"></script>