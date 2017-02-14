<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html ng-app="resume">

	<head>
		<meta charset="utf-8">
		<title>我的简历</title>
		<link rel="stylesheet" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/cropper.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/main.css" rel="stylesheet" />
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/resume.css">
		<script>
			var SITE_URL = "/aoshi/index.php/Jobseekers";
		</script>
		<style type="text/css">
			@charset "UTF-8";
			[ng\:cloak],
			[ng-cloak],
			[data-ng-cloak],
			[x-ng-cloak],
			.ng-cloak,
			.x-ng-cloak,
			.ng-hide {
				display: none !important;
			}
			
			ng\:form {
				display: block;
			}
			
			.ng-animate-start {
				clip: rect(0, auto, auto, 0);
				-ms-zoom: 1.0001;
			}
			
			.ng-animate-active {
				clip: rect(-1px, auto, auto, 0);
				-ms-zoom: 1;
			}
		</style>

	</head>

	<body id="resume">
		<!--头部-->
		<header id="header">
			<nav class="container">
				<a class="logo" href=""><img src="/aoshi/Public/images/logo.png"></a>
				<a class="nav-link selected" href="<?php echo U('Home/Index/index');?>">首页</a>
				<a class="nav-link" href="<?php echo U('Index/index');?>">简历管理</a>
				<a class="nav-link" href="<?php echo U('Index/delivery');?>">投递箱</a>
				<a class="nav-link fr" href="<?php echo U('Login/log_out');?>">退出</a>
				<a class="nav-link fr" href="<?php echo U('Index/index');?>" ng-bind="basic[0].nickname" style="padding: 0 4px;color: #7b7b7b;"></a>
			</nav>
		</header>
		<!--简历-->
		<section id="resume" class="container" ng-cloak>
			<!--简历信息-->
			<article class="resume-inner">
				<!--用户头像-->
				<aside class="avatar" id="crop-avatar">
					<img class="absolute" src="/aoshi/Public/images/resume-bg.png">
					<img id="avatar-img" class="center hear" src="/aoshi/Public/images/avatar.png">
					<img id="avatar-bg" class="center" src="/aoshi/Public/images/avatar-bg.png">
					<input id="avatar-upload" class="center" type="file">
					   <div  id="crop-avatar" class="center" >
            
                        <!-- Current avatar -->
                      
                        <div class="avatar-view" title="点击换头像">
                
                            <?php if(is_array($jobseekers_info)): foreach($jobseekers_info as $key=>$item): ?><img src="<?php echo ($item["photo"]); ?>"  id="avatar-img" style="border-radius:50%" class="rate"/><?php endforeach; endif; ?>
                            
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
                                        </div><!-- /.modal -->     
                         </div>
				</aside>
				<!--基本信息-->
				<section id="user-info" ng-controller="resumeBasic">
					<button class="add" ng-click="add()" ng-hide="basic[0]">+ 添加基本资料</button>
					<div class="list text-center" ng-show="basic[0]">
						<a class="edit" ng-click="edit(basic[0])">编辑</a>
						<span class="name" ng-bind="basic[0].nickname" ng-if="basic[0].nickname"></span>
						<span class="intro" ng-bind="basic[0].peculiarity"></span>
						<span class="base">
                            <em class="sex"><i class="icon"></i><em  ng-bind="basic[0].sex"></em></em>
                            <em class="birth" ng-bind="basic[0].birth"></em>
                            <em class="xl" ng-bind="basic[0].top_edu"></em>
                            <em class="gzjy" ng-bind="basic[0].work_years"></em>
                            <em class="city"><i class="icon city"></i><em ng-bind="basic[0].current_city"></em></em>
                         </span>
						 <span class="base">
                            <em class="p"><i class="icon phone"></i><em ng-bind="basic[0].phone"></em></em>
                            <em class="e"><i class="icon email"></i><em ng-bind="basic[0].e_mail"></em></em>
                         </span>
						</foreach>
					</div>
					<form id="user-info-form" ng-show="form" name="myForm" style="display:block" novalidate>
						<fieldset>
							<label>姓名</label>
							<input class="input-text" ng-model="form.nickname" name="nickname" maxlength="10" required>
						</fieldset>
						<div class="tip">
							<span ng-show="myForm.nickname.$dirty  && myForm.nickname.$invalid">
                                <span class="text-danger" ng-show="myForm.nickname.$error.required  ">* 此处不能为空。</span>
							</span>
						</div>
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
							<div class="tip">
								<span ng-show="myForm.phone.$dirty && myForm.phone.$invalid">
                                	<span class="text-danger" ng-show="myForm.phone.$error.required  ">* 此处不能为空。</span>
									<span class="text-danger glyphicon  glyphicon-remove" ng-show="myForm.phone.$error.pattern ">请输入以1、3、5、8开头的有效手机号且11位数！</sapn>
							   </span>
							</div>
						</fieldset>
						<fieldset>
							<label>联系邮箱</label>
							<input type="email" class="input-text" name="e_mail" ng-model="form.e_mail" required>
							<div class="tip">
								<span ng-show="myForm.e_mail.$dirty  && myForm.e_mail.$invalid">
                                	<span class="text-danger "  ng-show="myForm.e_mail.$error.required ">* 此处不能为空。</span>
									<span class="text-danger glyphicon glyphicon-remove" ng-show="myForm.e_mail.$error.email ">非法的邮箱地址。</span>
								</span>
							</div>
						</fieldset>
						<fieldset>
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="((myForm.phone.$dirty || myForm.phone.$pristine) && myForm.phone.$invalid) || ((myForm.e_mail.$dirty || myForm.e_mail.$pristine)&& myForm.e_mail.$invalid)||((myForm.nickname.$dirty || myForm.nickname.$pristine) && myForm.nickname.$invalid)">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</section>
				<!--工作经历-->
				<section id="job-exp" ng-controller="resumeJobexp">
					<h5 class="resume-title"><span>工作经历</span><a class="edit" href="javascript:;"  ng-click="add()">添加</a></h5>
					<button class="add" ng-click="add()" ng-hide="experience.length">+ 添加工作经历</button>
					<ul class="list" ng-hide="list">
						<li ng-repeat="item in experience">
							<a class="edit" href="javascript:;" ng-click="edit(item)">修改</a>
							<a class="del" href="javascript:;" ng-click="remove(item)">删除</a>
							<div class="name " ng-bind="item.re_company_name"></div>
							<div>
								<span class="job " ng-bind="item.job_title"></span>
								<span class="fr " ng-bind="item.working_time"></span>
							</div>
							<p class="cont " ng-bind="item.job_description "></p>
						</li>
					</ul>
					<form id="job-exp-form" name="jobexp" ng-show="form" style="display:block">
						<fieldset>
							<label>公司</label>
							<input type="text" id="job-exp-c_n" name="c_n" class="input-text" ng-model="form.re_company_name" ng-maxlength="30" required>
							<div class="tip">
								<span ng-show="(jobexp.c_n.$dirty ) && jobexp.c_n.$invalid">
                                   <span class="text-danger "  ng-show="jobexp.c_n.$error.required ">* 此处不能为空。</span>
								<span class="text-danger glyphicon  glyphicon-remove" ng-show="jobexp.c_n.$error.maxlength ">最多只能输入30个字！</sapn>
                                </span>
							</div>
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
				</section>
				<!--教育经历-->
				<section id="edu-exp" ng-controller="resumeEduexp">
					<h5 class="resume-title"><span>教育经历</span><a class="edit" href="javascript:;"  ng-click="add()">添加</a></h5>
					<button class="add" ng-click="add()" ng-hide="education.length">+ 教育经历</button>
					<ul class="list" ng-hide="list">
						<li ng-repeat="item in education">
							<a class="edit" href="javascript:;" ng-click="edit(item)">修改</a>
							<a class="del" href="javascript:;" ng-click="remove(item)">删除</a>
							<div class="name" ng-bind="item.school_name"></div>
							<div>
								<span class="xl" ng-bind="item.degree"></span> -
								<span class="major" ng-bind="item.major"></span>
								<span class="grad fr">{{item.graduated}}毕业(预计)</span>
							</div>
						</li>
					</ul>
					<form id="edu-exp-form" name="eduexp" ng-show="form" style="display:block">
						<fieldset>
							<label>学校名称</label>
							<input class="input-text" id="edu-exp-s_n" name="s_n" ng-model="form.school_name" ng-maxlength="10" required>
							<div class="tip">
								<span ng-show="eduexp.s_n.$dirty  && eduexp.s_n.$invalid">
                                   <span class="text-danger" ng-show="eduexp.s_n.$error.required">* 此处不能为空。</span>
								<span class="text-danger glyphicon glyphicon-remove" ng-show="eduexp.s_n.$error.maxlength ">最多只能输入10个字！</sapn>
                                </span>
							</div>
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
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="(eduexp.s_n.$dirty || eduexp.s_n.$pristine)  && eduexp.s_n.$invalid ">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>

				</section>

				<!--自我描述-->
				<section id="self-des" ng-controller="resumeDes">
					<h5 class="resume-title"><span>自我描述</span></h5>
					<button class="add" ng-click="add()" ng-hide="describe.length">+ 添加自我描述</button>
					<div class="edit_box_box" ng-repeat="item in describe" ng-hide="list">
						<span class="edit_box">
                        	<a class="edit" href="javascript:;" ng-click="edit(item)">修改</a>
                        </span>
						<textarea class="list ng-binding" rows="5" ng-bind="item.describe" style="width: 100%;background-color: transparent;border: 0px;resize: none;" readonly>
                        </textarea>
					</div>
					<form id="self-des-form" ng-show="form" name="selfdes" style="display:block">
						<fieldset>
							<textarea id="self-des-describe" rows="5" name="describe" vlaue="11" maxlength="250" wrap="hard" placeholder="250字以内" ng-model="form.describe" maxlength="250" minlength="10" required></textarea>
						</fieldset>
						<div class="tip">
							<span ng-show="selfdes.describe.$dirty && selfdes.describe.$invalid">
                                <span class="text-danger" ng-show="selfdes.describe.$error.required">* 请输入自我描述。</span>
							    <span class="text-danger glyphicon glyphicon-remove" ng-if="selfdes.describe.$error.minlength && selfdes.describe.$touched">最少输入10个字！</sapn>
                            </span>
						</div>
						<fieldset>
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="(selfdes.describe.$dirty || selfdes.describe.$pristine )&& selfdes.describe.$invalid ">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</section>
				<!--求职意向-->
				<section id="job-career" ng-controller="resumeCareer">
					<h5 class="resume-title"> <span>求职意向</span></h5>
					<button class="add" ng-click="add(prefered[0])" ng-hide="prefered.length">+ 添加求职意向</button>
					<dl class="list clear" ng-repeat="item in prefered" ng-hide="list">
						<span class="edit_box "><a class="edit" href="javascript:;" ng-click="edit(item)">修改</a></span>
						<dd class="name"><i></i><span ng-bind="item.expected_position"></span></dd>
						<dd class="type"><i></i><span ng-bind="item.job_type"></span></dd>
						<dd class="city"><i></i><span ng-bind="item.expected_location"></span></dd>
						<dd class="wages"><i></i><span ng-bind="item.expected_monthly_income"></span></dd>
					</dl>
					<form id="job-career-form" name="jobcareer" ng-show="form" style="display:block">
						<fieldset>
							<label>期望职位</label>
							<input class="input-text" id="job-career-career" name="career" ng-model="form.expected_position" maxlength="10" required>
							<div class="tip">
								<span ng-show="jobcareer.career.$dirty && jobcareer.career.$invalid">
                                   <span class="text-danger" ng-show="jobcareer.career.$error.required ">* 此处不能为空。</span>
								</span>
							</div>
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
							<input class="btn submit" type="submit" value="保存" ng-click="submit()" ng-disabled="(jobcareer.career.$dirty|| jobcareer.career.$pristine ) && jobcareer.career.$invalid ">
							<button class="btn cancel" ng-click="cancel()">取消</button>
						</fieldset>
					</form>
				</section>
				<!--求职状态-->
				<section class="text-center" ng-controller="resumeState">
					<select id="job-state" ng-model="basic[0].current_status" ng-change="change()" ng-click="click()" ng-disabled="!basic[0]">
						<option>目前正在找工作</option>
						<option>观望有好机会会考虑</option>
						<option>我目前不想换工作</option>
					</select>
				</section>
			</article>
			<!--简历导航-->
			<aside class="resume-nav">
				<nav id="nav-list">
					<div class="integrity">
						<div class="top">
							<span>简历完整度：<em id="finishing_rate" ng-bind="photo_rate+one_rate+two_rate+three_rate+four_rate+five_rate-integrity+'%'"></em></span>

							<a class="fr" href="<?php echo U('Preview/index');?>" target="_blank">预览简历</a>
						</div>
					</div>
					<ul>
						<li class="selected">
							<a href="#user-info"><i class="base_i"></i>基本信息</a>
						</li>
						<li>
							<a href="#job-exp"><i class="job_i"></i>工作经历</a>
						</li>
						<li>
							<a href="#edu-exp"><i class="edu_i"></i>教育经历</a>
						</li>
						<li>
							<a href="#self-des"><i class="self_i"></i>自我描述</a>
						</li>
						<li>
							<a href="#job-career"><i class="career_i"></i>求职意向</a>
						</li>
					</ul>
				</nav>
			</aside>
		</section>

		<script type="text/javascript" src="/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/aoshi/Public/js/angular-1.0.1.min.js"></script>
		<script type="text/javascript" src="/aoshi/Public/js/jobseekers/resume.js"></script>
		<script type="text/javascript" src="/aoshi/Public/css/bootstrap-3.3.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/aoshi/Public/js/jobseekers/cropper.min.js"></script>
		<script type="text/javascript" src="/aoshi/Public/js/jobseekers/main.js"></script>
	</body>

</html>