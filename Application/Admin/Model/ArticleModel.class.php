<?php
namespace Admin\Model;

use Think\Model;


class ArticleModel extends Model
{
	//自动验证
	// $_validate 按照这个写一个一样的变量
	protected $_validate=array(
			// 自动列表名,校验的方式：require，提示信息
			array('article_title','require','文章标题不能为空！'),

		);

	//自动完成
	protected $_auto=array(
			array('add_time','time',1,'function')
	);

}


?>