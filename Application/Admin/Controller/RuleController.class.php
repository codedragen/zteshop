<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/11/11
 * Time: 8:35
 */

namespace Admin\Controller;


use Think\Controller;

class RuleController extends PublicController
{
    public function index(){
        $user=M('auth_rule');
        if ($_GET['title']){
            $map['title']=['LIKE',"%{$_GET['title']}%"];
            $count=$user->where($map)->count();
            $page=new \Think\Page($count,5);
            $data=$user->where($map)->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('data',$page->show());
            $this->assign('rules',$data);
            $this->display();

        }
    }

    public function add(){
       $rule= M('auth_rule');
        if ($rule->create()){
            if ($rule->add()){
                $this->redirect('Rule/add');
            }else{
                $this->error('添加规则失败');
            }

        }
        $this->display();
    }

    public function mod(){
        $rule=M('auth_rule');
        if ($_POST['sub']){
            if ($rule->create()){
                if ($rule->save()){
                    $this->redirect('Rule/index');
                }else{
                    $this->error('修改规则失败');
                }
            }else{
                $this->error('修改规则失败');
            }
        }

        $data=$rule->find(I('id'));
        $this->assign('rules',$data);
        $this->display();
    }
    public function del(){
        if($_POST['sub']){
            $ids = implode(',',I('ids'));
        }else{
            $ids = I('id');
        }
        $rule = M('auth_rule');
        $map['id'] = array('in',$ids);
        $affected = $rule->where($map)->delete();
        if($affected){
            $this->redirect('Rule/index');
        }else{
            $this->error('删除规则失败');

        }
    }
}