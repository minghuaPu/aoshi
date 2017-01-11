<?php
namespace Enterprise\Controller;
use Think\Controller;

class SeekerController extends Controller{
    public function resume(){

        // 通过session的id来搜索enterprise_info表，获取用户信息
        $enterprise_info=M('enterprise_info');
        $enterprise_info=$enterprise_info->where(array("id" => session('eid')))->find();
        $this->assign("enterprise_info",$enterprise_info);

        $userInfo=session('auth');
        if ($userInfo) {
            $this->display();
        }else{
            $this->error('请先登录！',U('Login/login'));
        }




    }
}