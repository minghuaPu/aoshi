<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>我的简历</title>
		<link rel="stylesheet" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/cropper.min.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/main.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/resume.css">
	</head>

	<body ng-app="resume">
		<header id="header">
			<div class="inner">
				<div class="left">
					<a class="logo" href="<?php echo U('Home/Index/index');?>"></a>
					<a href="<?php echo U('Home/Index/index');?>" style="background-color:#00C2B8;">首页</a>
					<a href="#">找工作</a>
					<a href="<?php echo U('Index/delivery');?>">投递箱</a>
				</div>
				<div class="right">
					<a href="<?php echo U('Index/index');?>" ng-bind="basic[0].nickname" style="padding: 0;"></a>
					<a href="<?php echo U('Login/log_out');?>">退出</a>
				</div>
			</div>
		</header>
		<section id="resume" class="inner">
			<article id="preview" class="resume-inner left">
				<img src="/aoshi/Public/images/resume-bg.png">
				<img class="portrait" src="<?php echo ($user[0]["photo"]); ?>">
				<div id="crop-avatar" class="portrait" style="z-index: 1;">
	<div class="avatar-view" title="点击换头像">
		<?php if(is_array($jobseekers_info)): foreach($jobseekers_info as $key=>$item): ?><img src="<?php echo ($item["photo"]); ?>" id="avatar-img" style="border-radius:50%" class="rate" /><?php endforeach; endif; ?>
	</div>
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
							<div class="avatar-upload">
								<input class="avatar-src" name="avatar_src" type="hidden" />
								<input class="avatar-data" name="avatar_data" type="hidden" />
								<label for="avatarInput">头像上传</label>
								<input class="avatar-input" id="avatarInput" name="avatar_file" type="file" />
							</div>
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
</div>
				<article id="basic" class="basic" ng-controller="resumeBasic">
					<div ng-hide="form" ng-bind="basic[0].nickname"></div>
					<div ng-hide="form" ng-bind="basic[0].peculiarity"></div>
					<div ng-hide="form">
						<span ng-bind="basic[0].sex"></span>
						<span ng-bind="basic[0].birth"></span>
						<span ng-bind="basic[0].top_edu"></span>
						<span ng-bind="basic[0].work_years"></span>
						<span ng-bind="basic[0].current_city"></span>
					</div>
					<div ng-hide="form">
						<span ng-bind="basic[0].phone"></span>
						<span ng-bind="basic[0].e_mail"></span>
					</div>
					<a class="edit" ng-click="edit(basic[0])">编辑</a>
					<button class="add" ng-click="add()" ng-hide="basic[0]">+ 添加基本资料</button>
					<form id="user-info-form" ng-show="form" name="myForm" novalidate>
						<fieldset>
							<label>姓名</label>
							<input class="input-text" ng-model="form.nickname" name="nickname" maxlength="10" required>
						</fieldset>
						<fieldset>
							<label>介绍</label>
							<input class="input-text" ng-model="form.peculiarity" maxlength="15" required>
						</fieldset>
						<fieldset>
							<label>性别</label>
							<select class="input-text" ng-model="form.sex" required>
								<option>男</option>
								<option>女</option>
							</select>
						</fieldset>
						<fieldset>
							<label>出生年份</label>
							<select class="input-text" ng-model="form.birth" required>
								<option>00后</option>
								<option>90后</option>
								<option>80后</option>
								<option>其他</option>
							</select>
						</fieldset>
						<fieldset>
							<label>最高学历</label>
							<select class="input-text" ng-model="form.top_edu" required>
								<option>大专</option>
								<option>本科</option>
								<option>硕士</option>
								<option>其他</option>
							</select>
						</fieldset>
						<fieldset>
							<label>工作年限</label>
							<select class="input-text" ng-model="form.work_years" required>
								<option>应届毕业生</option>
								<option>1-3年</option>
								<option>3-5年</option>
								<option>5-10年</option>
								<option>10年以上</option>
							</select>
						</fieldset>
						<fieldset>
							<label>所在城市</label>
							<select class="input-text" ng-model="form.current_city" required>
								<option>北京</option>
								<option>上海</option>
								<option>广州</option>
								<option>深圳</option>
								<option>杭州</option>
								<option>其它</option>
							</select>
						</fieldset>
						<fieldset>
							<label>手机号码</label>
							<input type="tel" class="input-text" ng-minlength="11" ng-maxlength="11" ng-pattern="/^1[3|5|8][0-9]\d{8}$/" name="phone" ng-model="form.phone" required>
							<div class="tip" ng-show="myForm.phone.$dirty && myForm.phone.$invalid">
								<span class="text-danger" ng-show="myForm.phone.$error.required">* 此处不能为空。</span>
								<span class="text-danger glyphicon glyphicon-remove" ng-show="myForm.phone.$error.pattern">请输入以1、3、5、8开头的有效手机号且11位数！</sapn>
							</div>
						</fieldset>
						<fieldset>
							<label>联系邮箱</label>
							<input type="email" class="input-text" name="e_mail" ng-model="form.e_mail" required>
							<div class="tip" ng-show="myForm.e_mail.$dirty&&myForm.e_mail.$invalid">
                                <span class="text-danger" ng-show="myForm.e_mail.$error.required">* 此处不能为空。</span>
								<span class="text-danger glyphicon glyphicon-remove" ng-show="myForm.e_mail.$error.email">非法的邮箱地址。</span>
							</div>
						</fieldset>
						<fieldset>
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="((myForm.phone.$dirty || myForm.phone.$pristine) && myForm.phone.$invalid) || ((myForm.e_mail.$dirty || myForm.e_mail.$pristine)&& myForm.e_mail.$invalid)||((myForm.nickname.$dirty || myForm.nickname.$pristine) && myForm.nickname.$invalid)">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</article>
				<article id="jobexp" class="jobexp" ng-controller="resumeJobexp">
					<div class="title"><span>工作经历</span>
						<a class="edit" href="javascript:;" ng-click="add()">添加</a>
					</div>
					<button class="add" ng-click="add()" ng-hide="experience[0]">+ 添加工作经历</button>
					<p ng-repeat="item in experience" ng-hide="form">
						<em ng-bind="item.re_company_name"></em>
						<em ng-bind="item.working_time"></em><br>
						<em ng-bind="item.job_title"></em><br>
						<em ng-bind="item.job_description"></em>
						<a class="del" href="javascript:;" ng-click="remove(item)">删除</a>
						<a class="edit" href="javascript:;" ng-click="edit(item)">修改</a>
					</p>
					<form id="job-exp-form" name="jobexp" ng-show="form">
						<fieldset>
							<label>公司</label>
							<input type="text" id="job-exp-c_n" name="c_n" class="input-text" ng-model="form.re_company_name" ng-maxlength="30" required>
						</fieldset>
						<fieldset>
							<label>职位</label>
							<input class="input-text" ng-model="form.job_title" maxlength="6">
						</fieldset>
						<fieldset>
							<label>任职时间</label>
							<input class="input-text" placeholder="如:2010-11-12~至今" ng-model="form.working_time" maxlength="21">
						</fieldset>
						<fieldset>
							<label class="align-top">工作内容</label>
							<textarea class="input-text" maxlength="300" rows="5" placeholder="如:在职期间的工作范围或为公司创造了什么价值" ng-model="form.job_description" maxlength="500"></textarea>
						</fieldset>
						<fieldset>
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="(jobexp.c_n.$dirty || jobexp.c_n.$pristine) && jobexp.c_n.$invalid ">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</article>
				<article id="eduexp" class="eduexp" ng-controller="resumeEduexp">
					<div class="title"><span>教育经历</span>
						<a class="edit" href="javascript:;" ng-click="add()">添加</a>
					</div>
					<button class="add" ng-click="add()" ng-hide="education[0]">+ 教育经历</button>
					<p ng-repeat="item in education" ng-hide="form">
						<em ng-bind="item.school_name"></em>
						<em ng-bind="item.graduated+'年毕业'"></em><br>
						<em ng-bind="item.degree+' - '+item.major"></em>
						<a class="del" href="javascript:;" ng-click="remove(item)">删除</a>
						<a class="edit" href="javascript:;" ng-click="edit(item)">修改</a>
					</p>
					<form id="edu-exp-form" name="eduexp" ng-show="form">
						<fieldset>
							<label>学校名称</label>
							<input class="input-text" id="edu-exp-s_n" name="s_n" ng-model="form.school_name" ng-maxlength="10" required>
						</fieldset>
						<fieldset>
							<label>所学专业</label>
							<input class="input-text" ng-model="form.major" maxlength="10">
						</fieldset>
						<fieldset>
							<label>学历</label>
							<select class="input-text" ng-model="form.degree" required>
								<option>大专</option>
								<option>本科</option>
								<option>硕士</option>
								<option>博士</option>
								<option>其他</option>
							</select>
						</fieldset>
						<fieldset>
							<label>毕业时间</label>
							<select class="input-text" ng-model="form.graduated" required>
								<option>2017</option>
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
								<option>2013</option>
								<option>2012</option>
								<option>2011</option>
								<option>2010</option>
								<option>2009</option>
								<option>2008</option>
								<option>2007</option>
								<option>2006</option>
								<option>2005</option>
								<option>2004</option>
								<option>2003</option>
								<option>2002</option>
								<option>2001</option>
								<option>2000</option>
							</select>
						</fieldset>
						<fieldset>
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="(eduexp.s_n.$dirty||eduexp.s_n.$pristine)&&eduexp.s_n.$invalid ">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</article>
				<article id="career" class="career" ng-controller="resumeCareer">
					<div class="title"><span>求职意向</span>
						<a class="edit" href="javascript:;" ng-click="edit(prefered[0])">修改</a>
					</div>
					<button class="add" ng-click="add(prefered[0])" ng-hide="prefered[0]">+ 添加求职意向</button>
					<div ng-show="prefered[0]" ng-hide="form">
						<em ng-bind="prefered[0].expected_position"></em>
						<em ng-bind="prefered[0].job_type"></em>
						<em ng-bind="prefered[0].expected_location"></em>
						<em ng-bind="prefered[0].expected_monthly_income"></em>
					</div>
					<form id="job-career-form" name="jobcareer" ng-show="form">
						<fieldset>
							<label>期望职位</label>
							<input class="input-text" id="job-career-career" name="career" ng-model="form.expected_position" maxlength="10" required>
						</fieldset>
						<fieldset>
							<label>职位类型</label>
							<select class="input-text" ng-model="form.job_type" required>
								<option>无限</option>
								<option>全职</option>
								<option>兼职</option>
								<option>实习</option>
							</select>
						</fieldset>
						<fieldset>
							<label>期望城市</label>
							<select class="input-text" ng-model="form.expected_location" required>
								<option>无限</option>
								<option>北京</option>
								<option>上海</option>
								<option>广州</option>
								<option>深圳</option>
								<option>杭州</option>
							</select>
						</fieldset>
						<fieldset>
							<label>期望月薪</label>
							<select class="input-text" ng-model="form.expected_monthly_income" required>
								<option>无限</option>
								<option>5k以下</option>
								<option>5k-10k</option>
								<option>10k-15k</option>
								<option>15k-20k</option>
								<option>20k-50k</option>
								<option>50k以上</option>
							</select>
						</fieldset>
						<fieldset>
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="(jobcareer.career.$dirty||jobcareer.career.$pristine)&&jobcareer.career.$invalid">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</article>
				<div class="status" ng-controller="resumeState">
					<select ng-model="basic[0].current_status" ng-change="change()" ng-disabled="!basic[0]">
						<option>目前正在找工作</option>
						<option>观望有好机会会考虑</option>
						<option>我目前不想换工作</option>
					</select>
				</div>
			</article>
			<aside class="resume-nav right">
				<div style="position: fixed;width: 280px;">
					<div class="integrity">
						<span>简历完整度 ：<em ng-bind="integrity+'%'"></em></span>
						<a href="<?php echo U('Index/preview');?>" target="_blank" style="float: right;"><em>预览简历</em></a>
						<progress style="width:100%;height:4px;" value="{{integrity}}" max="100"></progress>
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
		<script>
			var SITE_URL = "/aoshi/index.php/Jobseekers";
		</script>
		<script src="/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js"></script>
		<script src="/aoshi/Public/js/angular-1.0.1.min.js"></script>
		<script src="/aoshi/Public/css/bootstrap-3.3.0/js/bootstrap.min.js"></script>
		<script src="/aoshi/Public/js/jobseekers/cropper.min.js"></script>
		<script src="/aoshi/Public/js/jobseekers/main.js"></script>
		<script src="/aoshi/Public/js/jobseekers/resume.js"></script>
	</body>

</html>