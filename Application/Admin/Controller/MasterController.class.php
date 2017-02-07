<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/11/8
 * Time: 9:04
 */

namespace Admin\Controller;


class MasterController extends PublicController
{
  public function  index(){
    $user=  M('admin');
     $page= new \Think\Page($user->count(),5);
      $this->assign('data',$user->where()->limit($page->firstRow.','.$page->listRows)->select());
      $this->assign('pageinfo',$page->show());
      $this->display();

  }

  public function add(){
      if ($_POST['sub']&&$_POST['username']&&$_POST['password']&&$_POST['repwd']){
          $user=M('admin');
          if ($_POST['password']==$_POST['repwd']){
              $_POST['password']=md5($_POST['password']);
              $data=$_POST;
              if ($user->create($data)){
                 if( $user->add()){
                     $this->redirect('Master/index');
                 }else{
                     $this->error('添加失败');
                 }
              }
          }else{
              $this->error('两次密码不一致');
          }


      }
  }

  public function mod(){
      $user=M('admin');
      if ($_POST['sub']&&$_POST['password']&&$_POST['repwd']){
          $_POST['password']=md5($_POST['password']);
          if ($user->create()){
              if ($user->save()){
                  $this->redirect('Master/index');
              }else{
                  $this->error('修改失败');
              }
          }else{
              $this->error('修改失败');
          }
      }
      $data=$user->find(I('id'));
      $this->assign('data',$data);
      $this->display();

  }


    public function del(){
        if($_POST['sub']){
            $ids = implode(',',I('ids'));
        }else{
            $ids = I('id');
        }
        $user = M('admin');
        $map['id'] = array('in',$ids);
        $affected = $user->where($map)->delete();
        if($affected){
            $this->redirect('Master/index');
        }else{
            $this->error('删除失败');

        }
    }

    public function addGroup(){
        if($_POST){
            $groupAccess = M('auth_group_access');
            if($groupAccess->create()){
                if($groupAccess->add()){
                    $this->redirect('Master/index');
                }else{
                    $this->error('操作失败');
                }
            }else{
                $this->error('操作失败2');
            }
        }
        $group = M('auth_group');
        $user = $_GET;
        $groups = $group->where(array('status'=>1))->select();
        $this->assign('user',$user);
        $this->assign('groups',$groups);
        $this->display();
    }
}