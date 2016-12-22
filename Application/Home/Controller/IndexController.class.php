<?php

namespace Home\Controller;
use Think\Controller;



class IndexController extends Controller {

 
    public function index(){
        

        $this->display();
    }

    public function findjob()
    {
        // 查询职位列表信息
        // 赋值到模版变量
        $this->display();
    }

    public function jobdetail()
    {
          $this->display();
    }

}