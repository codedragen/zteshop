<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/10/31
 * Time: 10:47
 */

namespace Admin\Controller;


use Think\Controller;

class GroupController extends Controller
{

    public function  index(){
        $group=M('auth_group');
        $groups= $group->select();
        $this->assign('groups',$groups);
        $this->display();
    }

    public function add(){
        if ($_POST){
            $group=M('auth_group');
            $_POST['rules']=implode(',',$_POST['rules']);
            if($group->create()){
                if ($group->add()){
                    $this->redirect('Group/index');
                }else{
                    $this->error('添加组失败');
                }
            }
        }
        $rule = M('auth_rule');
        $rules = $rule -> where(array('status'=>1)) -> select();
        $this->assign('rules',$rules);
        $this->display();
    }
    public function mod(){
        $group = M('auth_group');
        if($_POST['id']){
            $_POST['rules'] = implode(',',$_POST['rules']);
            if($group->create()){
                if($group->save()){
                    $this->redirect('Group/index');
                }else{
                    $this->error('规则修改失败');
                }
            }else{
                $this->error('规则修改失败');
            }
        }
        $data = $group->find(I('id'));
        $rule = M('auth_rule');
        $rules = $rule -> where(array('status'=>1)) -> select();
        $this->assign('rules',$rules);
        $this->assign('group',$data);
        $this->display();
    }
    public function del(){
        if($_POST['sub']){
            $ids = implode(',',I('ids'));
        }else{
            $ids = I('id');
        }
        $group = M('auth_group');
        $map['id'] = array('in',$ids);
        $affected = $group->where($map)->delete();
        if($affected){
            $this->redirect('Group/index');
        }else{
            $this->error('删除失败');
        }
    }

}