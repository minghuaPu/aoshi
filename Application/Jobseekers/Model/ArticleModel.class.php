<?php
	namespace Jobseekers\Model;
	
	use Think\Model;
	
	class ArticleModel extends	Model{
		
		protected	$_validate=array(
		
			array('article_title','require','文章标题不能为空！'),
		);
		//自动完成
		protected $_auto=array(
				array('add_time','time',1,'function')
		);
	}

?>