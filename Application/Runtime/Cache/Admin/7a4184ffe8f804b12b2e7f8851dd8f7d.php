<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<h1>内容管理一览表</h1>
	<div class="row">
		<a href="<?php echo U('Article/add');?>" class="btn btn-success">添加</a>
		<a href="javascript:;" id="all_delete" class="btn btn-danger">批量删除</a>
	</div>
	<div class="row">
		<table class="table table-bordered ">
			<tr>
				<td><label ><input type="checkbox" id="all_check"> 全选</label></td>
				<td>ID</td>
				<td>标题</td>
				<td>时间</td>
				<td>操作</td>
			</tr>
			
			<?php if(is_array($info)): foreach($info as $key=>$item): ?><tr>
				<td><input   class="signl_box" type="checkbox" value="<?php echo ($item["id"]); ?>"></td>
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

					<a href="<?php echo U('Article/view',array('id'=>$item['id']));?>">查看</a> 
					<a href="<?php echo U('Article/delete',array('id'=>$item['id']));?>">删除</a> 
					<a href="<?php echo U('Article/edit',array('id'=>$item['id']));?>">修改</a> 
				</td>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>
</div>
<script type="text/javascript">
	
	// 按了顶部的全选，那么下面的复选框，要全部选中
	$(function  () {
		$("#all_check").click(function  () {

			if($(this).is(':checked') ){
				$('.signl_box').prop('checked',true);//判断复选框是不是选中
			}
			else {
				// 怎么取消复选框的选中
				$('.signl_box').prop('checked',false);
			}
			
			//要顶部的全选，取消了，下面的也全部取消
			
		})

		$("#all_delete").click(function  () {
			//把选中的复选框拿出来，获取它们的id值
			var id_string='';
			var coma='';
			$('.signl_box').each(function  () {
				if ($(this).is(":checked")) {
					 
					 id_string+=coma+$(this).val();
					 coma=',';
				}
			})

			
			//把对象转换成json
			console.log(id_string);

			//ajax请求php进行删除
			$.post('<?php echo U("Article/all_delete");?>',{'ids':id_string},function  (rt_object) {
				
				//把json转换成对象
				// var rt_object=JSON.parse(rtn);
				if (rt_object.status==1) {
					
					$('.signl_box').each(function  () {
						if ($(this).is(":checked")) {
							 $(this).parent().parent().remove();
						}
					})
					//把当前删除的行给remove掉
					// .remove
				}else{
					console.log(rt_object.msg);

				}
			},"json")
		})
	})
</script>


<div class='container'><a class=" btn btn-danger" style=" float: right;" href="<?php echo U('Login/logout');?>">退出</a></div>
</body>
</html>