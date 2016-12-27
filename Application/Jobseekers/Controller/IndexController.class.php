<?php
namespace Jobseekers\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('这个是求职者后台','utf-8');
    }
}