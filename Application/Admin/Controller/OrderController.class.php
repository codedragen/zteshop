<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/11/9
 * Time: 10:37
 */

namespace Admin\Controller;


use Think\Controller;

class OrderController extends Controller
{
   public function  index(){
       $user=M('detail');
       if ($_GET['username']){
           $map['username']=array('LIKE',"%{$_GET['username']}%");
       }
       if ($_GET['mode']){
        $map['mode']=array('LIKE',"%{$_GET['mode']}%");
       }
       $page=new \Think\Page($user->where($map)->count(),6);
       $data= $user->where($map)->table('tb_goods,tb_user_detail,tb_detail')->where('tb_detail.userdetailid=tb_user_detail.id and tb_detail.ordergid in(tb_goods.id)')->limit($page->firstRow,$page->listRows)->select();
         $this->assign('data',$data);
       $this->assign('pageinfo',$page->show());
       $this->display();
   }

   public function mod(){
       $user=M('detail');
       if (I('id')){
          $data= $user->where('id='.$_GET['id'])->find();
           if ($data['mode']==2){
               $this->error('此订单已发货');
           }else{
               $data['mode']=2;
               $data['id']=$_GET['id'];
               if ($user->create($data)){
                   if ($user->save()){
                       $this->redirect('Order/index');
                   }
               }
           }
       }
   }
}