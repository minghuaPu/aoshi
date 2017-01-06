<?php
namespace Enterprise\Model;

use Think\Model;


class EnterpriseModel extends Model
{
    //自动验证
    protected $_validate=array(
        array('user_name','require','用户名不能为空！'),
        array('user_name','','用户名已存在！','3','unique'),
        array('company_name','','公司已验证！','3','unique'),
        array('user_pwd','require','密码不能为空！'),
        array('user_pwd','6,18','密码不能少于6位，且不能多于18位',3,'length'),
    );

    //自动完成
    protected $_auto=array(

        array('user_pwd','md5',1,'function'),
        array('add_time','time',1,'function')
    );

}
