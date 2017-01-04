<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class NewsController extends Controller{
    public function index(){
      $news=M('news');

      $type['data']=$news->where('status=1 and cata_id="数据报告"')->order('add_time desc')->find();
      $type['article']=$news->where('status=1 and cata_id="干货文章"')->order('add_time desc')->find();
      $type['company']=$news->where('status=1 and cata_id="公司动态"')->order('add_time desc')->find();
      $this->assign('type',$type);
      $info=$news->where('status=1')->order('add_time desc')->limit(4)->select();
     /*print_r($info);*/
      $this->assign('info',$info);//模板赋值
      $this->display();
    }
    public function news_detail(){
        $id=I('id');
        $info=D('news')->where("id =$id")->find();
        $data['add_time']= array('lt',$info['add_time']);
        $data['status'] = array('eq','1' );
        //print_r($data);
        $next_info=D('news')->field('id,news_title,author,add_time,cata_id')->where($data)->order('add_time desc')->find();
        //print_r($next_info);
        if (!$next_info) {
          $next_info['status']=0;
          $next_info['news_title']='没有更多的新闻了';
          $next_info['add_time']=time();
        }
        $this->assign('next',$next_info);
        //print_r($info);
        $this->assign('info',$info);
        $this->display(); 
    }

     /*
    ajax请求数据
     */
    public function more(){
       
        $news=M("news");
        $cata_id=I("cata");
        $init=I('init');
        $page=I('page');
        if ($init==1) {
          $total=$news->where("status=1 and cata_id='$cata_id'")->count();
        }if ($init==2) {
            if(empty($cata_id)) {
                $total=$news->where("status=1")->count();//没按过more时
            }else{
                  $total=$news->where("status=1 and cata_id='$cata_id'")->count();
            }    
        }

        $pagesize=4;
        $start=($page-1)*$pagesize;
        $end=$page*$pagesize;
        if(!empty($cata_id)) {
              $where['cata_id']=array('eq',$cata_id);  
        }
        $where['status']=array('eq','1');
         
        $info=$news->where($where)->order('add_time desc')->limit($start,$pagesize)->select();
        /*echo $news->getLastSql;*/

       foreach ($info as $key => $value) {
        $cont=strip_tags(str_replace('&nbsp;','',htmlspecialchars_decode($info[$key]['news_content'])));
        $info[$key]['news_content']=$cont;
       }
        if ($total<$end) {
          $info['end']=1;
        }
        if (!$info) {
          $this->ajaxReturn(array('zhi'=>$news->getLastSql()),'json');
        }else{
           $this->ajaxReturn(array('status'=>1,'more'=>$info,'json'));
        }
       
    }


}


?>