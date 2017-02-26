<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>简历预览</title>
		<link rel="stylesheet" href="/aoshi/Public/css/jobseekers/resume.css">
	</head>

	<body>
		<section id="preview">
			<img src="/aoshi/Public/images/resume-bg.png">
			<img class="portrait" src="<?php echo ($photo[0]["photo"]); ?>">
			<?php if($basic[0]): ?><article class="basic info">
					<div><?php echo ($basic[0]["nickname"]); ?></div>
					<div><?php echo ($basic[0]["peculiarity"]); ?></div>
					<div><span><?php echo ($basic[0]["sex"]); ?></span><span><?php echo ($basic[0]["birth"]); ?></span><span><?php echo ($basic[0]["top_edu"]); ?></span><span><?php echo ($basic[0]["work_years"]); ?></span><span><?php echo ($basic[0]["current_city"]); ?></span></div>
					<div><span><?php echo ($basic[0]["phone"]); ?></span><span><?php echo ($basic[0]["e_mail"]); ?></span></div>
				</article><?php endif; ?>
			<?php if($experience[0]): ?><article class="jobexp">
					<div class="title"> <span>工作经历</span></div>
					<?php if(is_array($experience)): foreach($experience as $key=>$item): ?><p><em><?php echo ($item["re_company_name"]); ?></em><em><?php echo ($item["working_time"]); ?>年</em><br><em><?php echo ($item["job_title"]); ?></em><br><em><?php echo ($item["job_description"]); ?></em></p><?php endforeach; endif; ?>
				</article><?php endif; ?>
			<?php if($education[0]): ?><article class="eduexp">
					<div class="title"> <span>教育经历</span></div>
					<?php if(is_array($education)): foreach($education as $key=>$item): ?><p><em><?php echo ($item["school_name"]); ?></em><em><?php echo ($item["graduated"]); ?>年毕业</em><br><em><?php echo ($item["degree"]); ?>-<?php echo ($item["major"]); ?></em></p><?php endforeach; endif; ?>
				</article><?php endif; ?>
			<?php if($prefered[0]): ?><article class="career">
					<div class="title"> <span>求职意向</span></div>
					<div><em><?php echo ($prefered[0]["expected_position"]); ?></em><em><?php echo ($prefered[0]["job_type"]); ?></em><em><?php echo ($prefered[0]["expected_location"]); ?></em><em><?php echo ($prefered[0]["expected_monthly_income"]); ?></em></div>
				</article><?php endif; ?>
			<div class="status">- <?php echo ($basic[0]["current_status"]); ?> -</div>
		</section>
	</body>

</html>