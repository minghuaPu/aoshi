<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/aoshi/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="/aoshi/Public/js/jquery.1.11.1.min.js"></script>
</head>
<body>



<div class="container">
	<h1>新闻列表</h1>
	<div class="row">
		<a href="<?php echo U('News/add');?>" class="btn btn-success">添加</a>
		<a href="javascript:;" id="all_delete" class="btn btn-danger">批量删除</a>
	</div>
	<div class="row">
		<table class="table table-bordered ">
			<tr>
				<th><input type="checkbox" id="all_check"> 全选</th>
				<th>id</th>
				<th>标题</th>
				<th>时间</th>
				<th>作者</th>
				<th>类型</th>
				<th>状态</th>
				<th colspan='3'>操作</th>
			</tr>
			
			<?php if(is_array($info)): foreach($info as $key=>$item): ?><tr>
				<td><input   class="signl_box" type="checkbox" value="<?php echo ($item["id"]); ?>"></td>
				<td>
					<?php echo ($item["id"]); ?>
				</td>
				<td>
					<?php echo ($item["news_title"]); ?>
				</td>
				<td>
					<?php echo (date("Y-m-d H:i:s",$item["add_time"])); ?>
				</td>
				<td>
					<?php echo ($item["author"]); ?>
				</td>
				<td>
					<?php echo ($item["cata_id"]); ?>
				</td>
				<td>
					<?php if($item["status"] == 1): ?>发布<?php endif; ?>
					<?php if($item["status"] == 0): ?>不发布<?php endif; ?>
				</td>
				<td>
					<a href="<?php echo U('News/view',array('id'=>$item['id']));?>">查看</a> 
				</td>
				<td>
					<a href="<?php echo U('News/change',array('id'=>$item['id']));?>">修改</a> 
				</td>
				<td>
					<a onclick='confim_do("<?php echo U('News/delete',array('id'=>$item['id']));?>")' class='text-danger'>删除</a> 
				</td>

			</tr><?php endforeach; endif; ?>
		</table>
	</div>
</div>

<script type='text/javascript' src='/aoshi/Public/js/admin/news_list.js' charset="utf-8"></script>
<script type="text/javascript">
	
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
			//ajax请求php进行删除
			$.post('<?php echo U("News/all_delete");?>',{'ids':id_string},function  (rt_object) {
				
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
</script>


<div class='container'><a class=" btn btn-danger" style=" float: right;" href="<?php echo U('Login/logout');?>">退出</a></div>
</body>
</html>