<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>我的简历</title>
	<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/resume.css">
	<script src="/aoshi/Public/js/angular-1.0.1.min.js"></script>
	<style>
		#resume form#job-exp-form,#resume form#edu-exp-form{display: block;}
	</style>
</head>

<body>
<!--头部-->
<header id="header">
	<nav class="container">
		<a class="logo" href=""><img src="/aoshi/Public/images/u-logo.png"></a>
		<a class="nav-link selected" href="#">首页</a>
		<a class="nav-link" href="#">求职</a>
		<a class="nav-link fr" href="#">退出</a>
	</nav>
</header>
<!--简历-->
<section id="resume" class="container" ng-app="myResume"  >
	<!--简历信息-->
	<article class="resume-inner">
		<!--用户头像-->
		<aside class="avatar">
			<img id="avatar-img" class="center" src="/aoshi/Public/images/u-avatar.png">
			<img id="avatar-bg" class="center" src="/aoshi/Public/images/u-avatar-bg.png" style="display: none;">
			<img class="absolute" src="/aoshi/Public/images/u-resume-dg.png">
			<input id="avatar-upload" class="center" type="file">
		</aside>
		<!--基本信息-->
		<section id="user-info">
			<?php if($resumes_basic): if(is_array($resumes_basic)): foreach($resumes_basic as $key=>$item): ?><div class="list text-center">
						<a class="edit" href="javascript:;">修改</a>
						<span class="name"><?php echo ($item["name"]); ?></span>
						<span class="intro"><?php echo ($item["intro"]); ?></span>
						<span class="base">
									<em class="sex"><i class="icon"></i><?php echo ($item["sex"]); ?></em>
									<em class="birth"><?php echo ($item["birth"]); ?></em>
									<em class="xl"><?php echo ($item["xl"]); ?></em>
									<em class="gzjy"><?php echo ($item["gzjy"]); ?></em>
									<em class="city"><?php echo ($item["city"]); ?></em>
								</span>
						<span class="base">
									<em class="p"><i class="icon phone"></i><?php echo ($item["phone"]); ?></em>
									<em class="e"><i class="icon email"></i><?php echo ($item["email"]); ?></em>
								</span>
					</div><?php endforeach; endif; ?>
				<?php else: ?>
				<button class="add">+ 添加基本资料</button><?php endif; ?>
			<form id="user-info-form">
				<fieldset>
					<label>姓名</label>
					<input class="input-text">
				</fieldset>
				<fieldset>
					<label>介绍</label>
					<input class="input-text">
				</fieldset>
				<fieldset>
					<label>性别</label>
					<select class="input-text">
						<option>男</option>
						<option>女</option>
					</select>
				</fieldset>
				<fieldset>
					<label>出生年份</label>
					<select class="input-text">
						<option>00后</option>
						<option>90后</option>
						<option>80后</option>
						<option>其他</option>
					</select>
				</fieldset>
				<fieldset>
					<label>最高年限</label>
					<select class="input-text">
						<option>大专</option>
						<option>本科</option>
						<option>硕士</option>
						<option>博士</option>
						<option>其他</option>
					</select>
				</fieldset>
				<fieldset>
					<label>工作年限</label>
					<select class="input-text">
						<option>应届毕业生</option>
						<option>1-3年</option>
						<option>3-5年</option>
						<option>5-10年</option>
						<option>10年以上</option>
					</select>
				</fieldset>
				<fieldset>
					<label>所在城市</label>
					<select class="input-text">
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
					<input class="input-text">
				</fieldset>
				<fieldset>
					<label>联系邮箱</label>
					<input class="input-text">
				</fieldset>
				<fieldset>
					<input class="btn submit" type="submit" value="保存">
					<button class="btn cancel">取消</button>
				</fieldset>
			</form>
		</section>
		<!--工作经历-->
		<section ng-controller="jobexp">
			<h5 class="resume-title"><span>工作经历</span><a class="edit" href="javascript:;" ng-click="show_form(true)">添加 {{ zfc }}</a></h5>
			<ul class="list">
				<li ng-repeat="item in exp_list">
					<a class="del" href="javascript:;" ng-click="delete_info(item)">删除</a>
					<a class="edit"   ng-click="show_form(item)">修改</a>
					<div class="name">{{ item.name }}</div>
					<div>
						<span class="job">{{ item.job }}</span>
						<span class="fr">{{ item.time }}</span>
					</div>
					<p class="cont">{{ item.cont }}</p>
				</li>

				<button class="add" ng-click="show_form(true)">+ 添加工作经历</button>

			</ul>
			<form id="job-exp-form"  ng-show="form_info">
				<fieldset>
					<label>公司</label>
					<input class="input-text" ng-model="form_info.name">
				</fieldset>
				<fieldset>
					<label>职位</label>
					<input class="input-text" ng-model="form_info.job">
				</fieldset>
				<fieldset>
					<label>任职时间</label>
					<input class="input-text" ng-model="form_info.time">
				</fieldset>
				<fieldset>
					<label class="align-top">工作内容</label>
					<textarea class="input-text" maxlength="300" rows="5"  ng-model="form_info.cont"></textarea>
				</fieldset>
				<fieldset>
					<input class="btn submit" ng-click="save_form()" value="保存">
					<button class="btn cancel" ng-click="hide_form()">取消</button>
				</fieldset>
			</form>
		</section>
		<!--教育经历-->
		<section ng-controller="eduexp">
			<h5 class="resume-title"><span>教育经历</span><a class="edit" href="javascript:;" ng-click="show_form(true)">添加</a></h5>
			<ul class="list" >

				<li ng-repeat="item in edu_list">
					<a class="del" href="javascript:;" ng-click="delete_info(item)">删除</a>
					<a class="edit"   ng-click="show_form(item)">修改</a>
					<div class="name">{{item.name}}</div>
					<div>
						<span class="xl">{{item.xl}}</span> -
						<span class="major">{{item.major}}</span>
						<span class="grad fr">{{item.grad}}</span>
					</div>
				</li>

				<button class="add" ng-click="show_form(true)">+ 添加教育经历</button>

			</ul>
			<form id="edu-exp-form" ng-show="form_info">
				<fieldset>
					<label>学校名称</label>
					<input class="input-text" ng-model="form_info.name">
				</fieldset>
				<fieldset>
					<label>所学专业</label>
					<input class="input-text" ng-model="form_info.major">
				</fieldset>
				<fieldset>
					<label>学历</label>
					<select class="input-text" ng-model="form_info.xl">
						<option>大专</option>
						<option>本科</option>
						<option>硕士</option>
						<option>博士</option>
						<option>其他</option>
					</select>
				</fieldset>
				<fieldset>
					<label>毕业时间</label>
					<select class="input-text"  ng-model="form_info.grad">
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
					<input class="btn submit"  ng-click="save_form()" value="保存">
					<button class="btn cancel" ng-click="hide_form()">取消</button>
				</fieldset>
			</form>
		</section>
		<!--自我描述-->
		<section id="self-des">
			<h5 class="resume-title"><span>自我描述</span><a class="edit" href="javascript:;">修改</a></h5>
			<?php if($resumes_basic[0][des]): ?><p class="list"><?php echo ($resumes_basic[0][des]); ?></p>
				<?php else: ?>
				<button class="add">+ 添加自我描述</button><?php endif; ?>
			<form id="self-des-form">
				<fieldset>
					<textarea maxlength="300" rows="5"></textarea>
				</fieldset>
				<fieldset>
					<input class="btn submit" type="submit" value="保存">
					<button class="btn cancel">取消</button>
				</fieldset>
			</form>
			</foreach>
		</section>
		<!--求职意向-->
		<section id="job-career">
			<h5 class="resume-title"><span>求职意向</span><a class="edit" href="javascript:;">修改</a></h5>
			<?php if($resumes_career): if(is_array($resumes_career)): foreach($resumes_career as $key=>$item): ?><dl class="list clear">
						<dd class="name"><i></i><?php echo ($item["name"]); ?></dd>
						<dd class="type"><i></i><?php echo ($item["type"]); ?></dd>
						<dd class="city"><i></i><?php echo ($item["city"]); ?></dd>
						<dd class="wages"><i></i><?php echo ($item["wages"]); ?></dd>
					</dl><?php endforeach; endif; ?>
				<?php else: ?>
				<button class="add">+ 添加求职意向</button><?php endif; ?>
			<form id="job-career-form">
				<fieldset>
					<label>期望职位</label>
					<input class="input-text">
				</fieldset>
				<fieldset>
					<label>职位类型</label>
					<select class="input-text">
						<option>无限</option>
						<option>全职</option>
						<option>兼职</option>
						<option>实习</option>
					</select>
				</fieldset>
				<fieldset>
					<label>期望城市</label>
					<select class="input-text">
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
					<select class="input-text">
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
					<input class="btn submit" type="submit" value="保存">
					<button class="btn cancel">取消</button>
				</fieldset>
			</form>
		</section>
		<!--求职状态-->
		<section class="text-center">
			<select id="job-state">
				<?php if($resumes_basic[0][state]): ?><option><?php echo ($resumes_basic[0][state]); ?></option>
					<option>我是应届毕业生</option>
					<option>我暂时不想找工作</option>
					<option>我目前已离职，可快速到岗</option>
					<option>我目前正在职，正考虑换个新环境</option><?php endif; ?>
			</select>
		</section>
	</article>
	<!--简历导航-->
	<aside class="resume-nav">
		<nav id="nav-list">
			<div class="integrity">
				<div class="top">
					<span>简历完整度：<em>50%</em></span>
					<a class="fr" href="Jobseekers/preview">预览简历</a>
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
<script type="text/javascript">
    var SITE_URL = "/aoshi/index.php/Jobseekers/Index";
</script>
<script src="/aoshi/Public/js/jobseekers/jquery.min.js"></script>
<script src="/aoshi/Public/js/admin/resume.js"></script>
<script type="text/javascript" src="/aoshi/Public/css/bootstrap-3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/aoshi/Public/js/jobseekers/cropper.min.js"></script>
<script type="text/javascript" src="/aoshi/Public/js/jobseekers/main.js"></script>
</body>

</html>
        <!--<script type="text/javascript">-->
			<!--var SITE_URL = "/aoshi/index.php/Jobseekers/Index";-->
		<!--</script>   -->
		<!--<script type="text/javascript" src="/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js"></script>-->
   		<!--<script type="text/javascript" src="/aoshi/Public/js/angular-1.0.1.min.js"></script>-->
        <!--<script type="text/javascript" src="/aoshi/Public/js/jobseekers/resume.js"></script>-->
        <!--<script type="text/javascript" src="/aoshi/Public/css/bootstrap-3.3.0/js/bootstrap.min.js"></script>-->
   		<!--<script type="text/javascript" src="/aoshi/Public/js/jobseekers/cropper.min.js"></script>-->
  		<!--<script type="text/javascript" src="/aoshi/Public/js/jobseekers/main.js"></script>-->

	<!--</body>-->

<!--</html>-->