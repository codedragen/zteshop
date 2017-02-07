<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/10/25
 * Time: 9:23
 */

namespace Admin\Controller;


class FlinkController extends PublicController
{
  public function index(){
      $friend=M('fri_link');
      $data=$friend->select();
      $this->assign('data',$data);
      $this->display();
   }

   public function add(){
       if ($_POST['sub']&&$_POST['link_name']&&$_POST['link_url']){
           $friend=M('fri_link');
           $data=$_POST;
           if ($friend->create($data)){
               if ($friend->add()){
                   $this->redirect('Flink/index');

               }else{
                   $this->error('友情链接添加失败');
               }
           }else{
               $this->error('友情链接添加失败');
           }

       }
       $this->display();
   }

   public function del(){
       if ($_POST['sub']){
           $ids=implode(',',I('ids'));
       }else{
           $ids=I('id');
       }

       $friend=M('fri_link');
       $map['id']=array('in',$ids);
       $affectRow=$friend->where($map)->delete();
       if ($affectRow){
           $this->redirect('Flink/index');
       }else{
           $this->error('友情链接删除失败');
       }
   }

   public function mod(){
       $friend=M('fri_link');
       if ($_POST['sub']){

           if ($friend->create()){
               if ($friend->save()){
                   $this->redirect('Flink/index');
               }else{
                   echo $_POST['link_name'];
                   //$this->error('友情链接修改失败');
               }
           }else{
               $this->error('友情链接提交失败');
           }
       }
       $data = $friend->find(I('id'));
       $this->assign('data',$data);
       $this->display();
   }
}