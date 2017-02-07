<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/10/24
 * Time: 12:36
 */

namespace Admin\Controller;


use Think\Controller;

class CommentController extends Controller {

    public function  index(){
        $com=M('comment');
        $goods=M('goods');
        $count=$com->count();
        $Page=new \Think\Page($count,4);
        $this->assign('page',$Page->show());
        $data=$com->table('tb_user a','tb_goods c','tb_comment b')->where('b.gid=c.id and b.uid=a.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$data);
        $this->display();
    }

    public function add(){
        $com=M('comment');
        $goods=M('goods');
        $lun=$_POST;
        $data['uid']=$lun['uid'];
        $data['gid']=$lun['goodsid'];
        $data['comment_level']=$lun['level'];
        $time=time();
        $data['ptime']=date('Y-m-d',$time);
        $data['com_contain']=$lun['con'];
        if ($com->create($data)){
            if ($com->add()){
                $this->redirect('Comment/index');
            }
        }
        $this->display();

    }

    public function del(){
        if($_POST['sub']){
           $data=I('ids');
           $id= implode(',',$data);

        }else {
            $id=I('id');
        }
       $com= M('comment');
        $map['id']=array('in',$id);
        $affectRow=$com->where($map)->delete();
        if ($affectRow){
            $this->redirect('Coment/index');

        }else{
            $this->error('删除失败');
        }

    }

}