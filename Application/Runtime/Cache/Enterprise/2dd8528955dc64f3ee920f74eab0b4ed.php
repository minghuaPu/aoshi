<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/aoshi/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/aoshi/aoshi/Public/css/enterprise/index.css">
	<script type="text/javascript" src="/aoshi/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>
<div class="body">
	<div class="header">
		<div class="logo">
			<img src="/aoshi/aoshi/Public/images/enterprise/logo.png">
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
					<span class="i_close"></span>
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
			<div class="item user">
				<div
                    <?php if(ACTION_NAME== visit): ?>class="tit it_sel"<?php endif; ?>
                    <?php if(ACTION_NAME== resume): ?>class="tit it_sel"<?php endif; ?>
                    class="tit">
					<span class="icon_user"></span>
					<p>牛人</p>
					<span class="i_close"></span>
				</div>
				<ul
                    <?php if(ACTION_NAME== visit): ?>class="show"<?php endif; ?>
                    <?php if(ACTION_NAME== resume): ?>class="show"<?php endif; ?>
                    class="hide">
					<li
					<?php if(ACTION_NAME== visit): ?>class="li_sel"<?php endif; ?>
					><a href="<?php echo U('Seeker/visit');?>">看过我</a></li>
					<li
					<?php if(ACTION_NAME== resume): ?>class="li_sel"<?php endif; ?>
					><a href="<?php echo U('Seeker/resume');?>">收到的简历</a></li>
				</ul>
			</div>
			<div class="item mess">
				<div class="tit">
					<div>
						<span class="icon_mess"></span>
						<p>消息</p>
						<span class="badge">14</span>
					</div>
				</div>
			</div>
			<div class="item me">
				<div
                    <?php if(ACTION_NAME== company): ?>class="tit it_sel"<?php endif; ?>
                    class="tit">
					<span class="icon_me"></span>
					<p>我的</p>
					<span class="i_close"></span>
				</div>
				<ul
                    <?php if(ACTION_NAME== company): ?>class="show"<?php endif; ?>
                    class="hide">
					<li
					<?php if(ACTION_NAME== company): ?>class="li_sel"<?php endif; ?>
					><a href="<?php echo U('Me/company');?>">公司信息</a></li>
				</ul>
			</div>
		</div>
		<div class="tool">
			<div class="logout">
				<span class="i_logout"></span>
				<p><a href="<?php echo U('login/logout');?>">退出登陆</a></p>
			</div>
		</div>
	</div>

<<<<<<< HEAD
	<style type="text/css">
		#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
		.form-control{width:15%;text-align: center;display: inline-block;margin-bottom: 20px;}
		.container h3{position: relative;top:-6px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=YdbN7zpCh0K9e73AB9k0s4Y8Tm36xIdw"></script>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3>公司简介：</h3>
					</div>
					<div class="panel-body" >
			    		<p>广州源酷信息科技有限公司团队始创于2010年，于2012年正式在工商登记注册，公司坐落于广州市。公司自成立以来一直专注互联网技术服务和高端IT人才解决方案，源酷科技依靠专业的技术团队为客户提供：品牌策划、互联网开发、电商运营、高校专业化项目实训等服务。</p>
			  		</div>
		  		</div>
			</div>
			<div class="col-sm-12">
				<div class="panel panel-success">
		  		<div class="panel-heading"><h3>公司地址：</h3></div>
		  		<div class="panel-body" style="height:500px">
		    		经度：<input type="text" id="lng" class="form-control">
					纬度：<input type="text" id="lat" class="form-control">
					<div id="allmap"></div>
		  		</div>
		
			</div>
		</div>
	</div>
	



<script type="text/javascript">
	// 百度地图API功能
	var lng=document.getElementById("lng");
	var lat=document.getElementById("lat");
	var map = new BMap.Map("allmap");
	map.centerAndZoom("广州",12);
	var point = new BMap.Point(lng.value, lat.value);
	var marker = new BMap.Marker(point);
	map.addOverlay(marker);               // 将标注添加到地图中
	marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画            
	// map.centerAndZoom("广州",12);

	//单击获取点击的经纬度
	map.addEventListener("click",function(e){
		map.clearOverlays();
		// alert(e.point.lng + "," + e.point.lat);
		lng.value=e.point.lng;
		lat.value=e.point.lat;
		var point = new BMap.Point(lng.value, lat.value);
		var marker = new BMap.Marker(point);  // 创建标注
		map.addOverlay(marker);               // 将标注添加到地图中
		marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	});
	map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
	map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用


	var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
	var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); //右上角，仅包含平移和缩放按钮
	function add_control(){
		map.addControl(top_left_control);        
		map.addControl(top_left_navigation);     
		map.addControl(top_right_navigation);    
	}
	add_control();

	
</script>
</div>
</body>
</html>
<script src="/aoshi/aoshi/Public/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/aoshi/aoshi/Public/js/enterprise/index.js"></script>
<!--=======-->
<!--</div>
</body>
</html>
<script src="/aoshi/aoshi/Public/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/aoshi/aoshi/Public/js/enterprise/index.js"></script>-->
<!--&gt;>>>>>> 530c8c5de4819f04bacd4bf682399d8147ec76fb-->