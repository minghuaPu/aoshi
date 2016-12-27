<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;

class IndexController extends AuthController {


    public function index(){
        
        $this->display();
      
    }
 
}