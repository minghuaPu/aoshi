<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<h1>内容管理一览表</h1>
	<div class="row">
		<a href="<?php echo U('Index/add');?>" class="btn btn-success">添加</a>
	</div>
	<div class="row">
		<table class="table table-bordered ">
			<tr>
				<td>ID</td>
				<td>标题</td>
				<td>时间</td>
				<td>操作</td>
			</tr>
			
			<?php if(is_array($info)): foreach($info as $key=>$item): ?><tr>
				<td>
					<?php echo ($item["id"]); ?>
				</td>
				<td>
					<?php echo ($item["article_title"]); ?>
				</td>
				<td>
					<?php echo (date("Y-m-d H:i:s",$item["add_time"])); ?>
				</td>
				<td>
					<a href="<?php echo U('Index/delete',array('id'=>$item['id']));?>">删除</a> 
					<a href="">修改</a> 
				</td>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>
</div>


</body>
</html>