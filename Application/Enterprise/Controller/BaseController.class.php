<?php
/**
 * Created by PhpStorm.
 * User: iphone
 * Date: 2017/1/13
 * Time: 23:11
 */
namespace Enterprise\Controller;
use Think\Controller;

class BaseController extends Controller{
    public function _initialize(){
        $userInfo=session('auth');
        if (!$userInfo) {
            $this->error('请先登录！',U('Login/login'));
        }
        // 通过session的id来搜索enterprise_info表，获取用户信息
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $this->assign("enterprise_info",$enterprise_info);
    }
}