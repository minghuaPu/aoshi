<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>我的简历</title>
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/resume.css">
        <link rel="stylesheet" href="/aoshi/Public/css/jobseekers/cropper.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/aoshi/Public/css/jobseekers/main.css" rel="stylesheet"/>
	
	</head>

	<body>
		<section id="resume" class="container preview">
			<!--简历信息-->
			<article class="resume-inner">
				<!--用户头像-->
				<aside class="avatar" id="crop-avatar">
                  	             
                    <img class="absolute" src="/aoshi/Public/images/resume-bg.png"> 
                    <img id="avatar-img " class="center hear" src="/aoshi/Public/images/avatar.png">
                   	<div class="avatar-view center">
                    	<?php if(is_array($jobseekers_info)): foreach($jobseekers_info as $key=>$item): ?><img src="<?php echo ($item["photo"]); ?>"  id="avatar-img myhear" class="myhear" style="border-radius:50%;background-image:none"/ ><?php endforeach; endif; ?>
                     </div>
					<img id="avatar-bg" class="center" src="/aoshi/Public/images/avatar-bg.png" style="display: none;">
					
					
           <!----------------------------------------------------img(begin)------------------------------------------->            
					
                       
 		 <!---------------------------------------------------------img(end)------------------------------------------>

                    </aside>
				<!--基本信息-->
				<section id="user-info">
					<?php if(is_array($basic_info)): foreach($basic_info as $key=>$item): ?><span class="name"><?php echo ($item["nickname"]); ?></span>
                            <span class="intro"><?php echo ($item["peculiarity"]); ?></span>
                            <span class="base">
                                <em class="sex"><i class="icon"></i><?php echo ($item["sex"]); ?></em>
                                <em class="birth"><?php echo ($item["birth"]); ?></em>
                                <em class="xl"><?php echo ($item["top_edu"]); ?></em>
                                <em class="gzjy"><?php echo ($item["work_years"]); ?></em>
                                <em class="city"><i class="icon city"></i><?php echo ($item["current_city"]); ?></em>
                            </span>
                            <span class="base">
                                <em class="p"><i class="icon phone"></i><?php echo ($item["phone"]); ?></em>
                                <em class="e"><i class="icon email"></i><?php echo ($item["e_mail"]); ?></em>
                            </span><?php endforeach; endif; ?> 
				</section>
				<!--工作经历-->
				 <?php if($experience_info): ?><section id="job-exp">
						<h5 class="resume-title"><span>工作经历</span></h5>
						<ul class="list job-exp-box">
							<?php if(is_array($experience_info)): foreach($experience_info as $key=>$item): ?><li>
									<div class="name"><?php echo ($item["re_company_name"]); ?></div>
									<div>
										<span class="job"><?php echo ($item["job_title"]); ?></span>
										<span class="fr"><?php echo ($item["working_time"]); ?></span>
									</div>
									<p class="cont"><?php echo ($item["job_description"]); ?></p>
								</li><?php endforeach; endif; ?>
						</ul>
					</section>
                    <?php else: endif; ?>
				<!--教育经历-->
				 <?php if($education_info): ?><section id="edu-exp">
						<h5 class="resume-title"><span>教育经历</span></h5>
						<ul class="list">
							<?php if(is_array($education_info)): foreach($education_info as $key=>$item): ?><li>
									<div class="name"><?php echo ($item["school_name"]); ?></div>
									<div>
										<span class="xl"><?php echo ($item["degree"]); ?></span> -
										<span class="major"><?php echo ($item["major"]); ?></span>
										<span class="grad fr"><?php echo ($item["graduated"]); ?>毕业(预计)</span>
									</div>
								</li><?php endforeach; endif; ?>
						</ul>
					</section>
                    <?php else: endif; ?>				
				<!--自我描述-->
				 <?php if($describe_info): ?><section id="self-des">
						<h5 class="resume-title"><span>自我描述</span></h5>
						<?php if(is_array($describe_info)): foreach($describe_info as $key=>$item): ?><textarea class="list " rows="5"  style="width: 100%;color:#333;background-color: transparent;border: 0px;resize: none;" readonly><?php echo ($item["describe"]); ?> </textarea><?php endforeach; endif; ?>
					</section>
                    <?php else: endif; ?>				
				<!--求职意向-->
				 <?php if($prefered_info): ?><section id="job-career">
						<h5 class="resume-title"><span>求职意向</span></h5>
						<?php if(is_array($prefered_info)): foreach($prefered_info as $key=>$item): ?><dl class="list clear">
								<dd class="name"><i></i><?php echo ($item["expected_position"]); ?></dd>
                           		<dd class="type"><i></i><?php echo ($item["job_type"]); ?></dd>
                         	    <dd class="city"><i></i><?php echo ($item["expected_location"]); ?></dd>
                           	    <dd class="wages"><i></i><?php echo ($item["expected_monthly_income"]); ?></dd>       
							</dl><?php endforeach; endif; ?>
					</section>
                    <?php else: endif; ?>					
				<!--求职状态-->
				 <?php if($basic_info.current_status): ?><section class="text-center preview-state">
                    	<?php if(is_array($basic_info)): foreach($basic_info as $key=>$item): ?><span id="job-state" class="preview-resume"><?php echo ($item["current_status"]); ?></span><?php endforeach; endif; ?>
					</section>
                    <?php else: endif; ?>					
			</article>
		</section>
        
        <script type="text/javascript" src="/aoshi/Public/js/jobseekers/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/aoshi/Public/css/bootstrap-3.3.0/js/bootstrap.min.js"></script>
   		<script type="text/javascript" src="/aoshi/Public/js/jobseekers/cropper.min.js"></script>
  		<script type="text/javascript" src="/aoshi/Public/js/jobseekers/main.js"></script>
        <script type="text/javascript" src="/aoshi/Public/js/jobseekers/resume_pre.js"></script>
	</body>

</html>