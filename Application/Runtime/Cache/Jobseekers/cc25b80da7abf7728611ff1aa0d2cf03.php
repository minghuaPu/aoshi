<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>我的简历</title>
		<link rel="stylesheet" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/cropper.min.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/main.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/resume.css">
		<style>
		body {
				margin: 0;
			}
			
			.inner {
				width: 1024px;
				margin: auto;
				overflow: hidden;
			}
			
			.inner .left {
				float: left;
			}
			
			.inner .right {
				float: right;
			}
			
			#header {
				height: 50px;
				line-height: 50px;
				margin-bottom: 24px;
				background-color: #53cac3;
			}
			
			#header a {
				display: inline-block;
				font-size: 16px;
				color: #fff;
				padding: 0 20px;
				vertical-align: top;
			}
			
			#header .logo {
				width: 50px;
				height: 50px;
				margin-right: 25px;
				padding: 0;
				background: url('/aoshi/Public/images/logos.gif') center no-repeat;
			}
			
			#resume .resume-inner {
				width: 702px;
			}
			
			#resume .resume-nav {
				width: 280px;
			}
			
			#resume .resume-nav .integrity {
				margin-bottom: 15px;
				padding: 15px;
				background-color: #fafafa;
			}
			
			#resume .resume-nav .integrity em {
				color: #00C2B8;
				font-style: normal;
			}
			
			#resume .resume-nav .nav a {
				display: block;
				padding: 15px 50px;
				color: #333;
				border-left: 2px solid #eee;
			}
			
			#resume .resume-nav .nav a:hover {
				background-color: #fafafa;
			}
			
			#resume .resume-nav .nav a.selected {
				color: #00C2B8;
				background-color: #fafafa;
				border-left-color: #00C2B8;
			}
		}
		</style>
	</head>

	<body>
		<header id="header">
			<div class="inner">
				<div class="left">
					<a class="logo" href="<?php echo U('Home/Index/index');?>"></a>
					<a href="<?php echo U('Home/Index/index');?>" style="background-color:#00C2B8;">首页</a>
					<a href="#">找工作</a>
					<a href="<?php echo U('Index/delivery');?>">投递箱</a>
				</div>
				<div class="right">
					<a href="<?php echo U('Index/index');?>" style="padding: 0;">648253615</a>
					<a href="<?php echo U('Login/log_out');?>">退出</a>
				</div>
			</div>
		</header>
		<section id="resume" class="inner">
			<article id="preview" class="resume-inner left">
				<img src="/aoshi/Public/images/resume-bg.png">
				<img class="portrait" src="<?php echo ($photo[0]["photo"]); ?>">
				<div id="crop-avatar" class="portrait" style="z-index: 1;">

	<!-- Current avatar -->

	<div class="avatar-view" title="点击换头像">

		<?php if(is_array($jobseekers_info)): foreach($jobseekers_info as $key=>$item): ?><img src="<?php echo ($item["photo"]); ?>" id="avatar-img" style="border-radius:50%" class="rate" /><?php endforeach; endif; ?>

	</div>

	<!-- Cropping modal -->
	<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form class="avatar-form" action="<?php echo U('Crop/index');?>" enctype="multipart/form-data" method="post" style="display:block">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" type="button">&times;</button>
						<h4 class="modal-title" id="avatar-modal-label">更换头像</h4>
					</div>
					<div class="modal-body">
						<div class="avatar-body">

							<!-- Upload image and data -->
							<div class="avatar-upload">
								<input class="avatar-src" name="avatar_src" type="hidden" />
								<input class="avatar-data" name="avatar_data" type="hidden" />
								<label for="avatarInput">头像上传</label>
								<input class="avatar-input" id="avatarInput" name="avatar_file" type="file" />
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
										<button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">向左旋转</button>
										<button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15度</button>
										<button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30度</button>
										<button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45度</button>
									</div>
									<div class="btn-group">
										<button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">向右旋转</button>
										<button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15度</button>
										<button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30度</button>
										<button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45度</button>
									</div>
								</div>
								<div class="col-md-3">
									<button class="btn btn-primary btn-block avatar-save" type="submit">点击上传</button>
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	<!-- /.modal -->
</div>
				<article id="basic" class="basic">
					<div><?php echo ($basic[0]["nickname"]); ?></div>
					<div><?php echo ($basic[0]["peculiarity"]); ?></div>
					<div><span><?php echo ($basic[0]["sex"]); ?></span><span><?php echo ($basic[0]["birth"]); ?></span><span><?php echo ($basic[0]["top_edu"]); ?></span><span><?php echo ($basic[0]["work_years"]); ?></span><span><?php echo ($basic[0]["current_city"]); ?></span></div>
					<div><span><?php echo ($basic[0]["phone"]); ?></span><span><?php echo ($basic[0]["e_mail"]); ?></span></div>
				</article>
				<article id="jobexp" class="jobexp">
					<div class="title"><span>工作经历</span></div>
					<?php if(is_array($experience)): foreach($experience as $key=>$item): ?><p><em><?php echo ($item["re_company_name"]); ?></em><em><?php echo ($item["working_time"]); ?></em><br><em><?php echo ($item["job_title"]); ?></em><br><em><?php echo ($item["job_description"]); ?></em></p><?php endforeach; endif; ?>
				</article>
				<article id="eduexp" class="eduexp">
					<div class="title"><span>教育经历</span></div>
					<?php if(is_array($education)): foreach($education as $key=>$item): ?><p><em><?php echo ($item["school_name"]); ?></em><em><?php echo ($item["graduated"]); ?></em><br><em><?php echo ($item["degree"]); ?>-<?php echo ($item["major"]); ?></em></p><?php endforeach; endif; ?>
				</article>
				<article id="career" class="career" ng-controller="resumeCareer">
					<div class="title"><span>求职意向</span></div>
					<div><em><?php echo ($prefered[0]["expected_position"]); ?></em><em><?php echo ($prefered[0]["job_type"]); ?></em><em><?php echo ($prefered[0]["expected_location"]); ?></em><em><?php echo ($prefered[0]["expected_monthly_income"]); ?></em></div>
				</article>
				<div class="status" ng-controller="resumeState">
					{{}}
				</div>
			</article>
			<aside class="resume-nav right">
				<div style="position: fixed;width: 280px;">
					<div class="integrity">
						<span>简历完整度 ：<em ng-bind="photo_rate+one_rate+two_rate+three_rate+four_rate+five_rate-integrity">%</em></span>
						<a href="<?php echo U('Index/preview');?>" target="_blank" style="float: right;"><em>预览简历</em></a>
					</div>
					<div class="nav">
						<a class="selected" href="#basic">基本信息</a>
						<a href="#jobexp">工作经历</a>
						<a href="#eduexp">教育经历</a>
						<a href="#career">求职意向</a>
					</div>
				</div>
			</aside>
		</section>
		<script src="/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js"></script>
		<script src="/aoshi/Public/js/angular-1.0.1.min.js"></script>
		<script src="/aoshi/Public/css/bootstrap-3.3.0/js/bootstrap.min.js"></script>
		<script src="/aoshi/Public/js/jobseekers/cropper.min.js"></script>
		<script src="/aoshi/Public/js/jobseekers/main.js"></script>
		<script src="/aoshi/Public/js/jobseekers/resume.js"></script>
	</body>

</html>