<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 2016/10/25
 * Time: 20:57
 */

namespace Admin\Controller;



use Think\Controller;
use Think\Page;

class GoodsController extends Controller {

    public function index(){
        $user=M('goods');
        if ($_GET['rance']){
            $map['rance']=array('LIKE',"%{$_GET['rance']}%");
        }
        if ($_GET['vest']){
            $map['vest']=array('LIKE',"%{$_GET['vest']}%");
        }
        if ($_GET['goodsname']){
            $map['goodsname']=array('LIKE',"%{$_GET['goodsname']}%");
        }
        if ($_GET['renqi'=='hot']){
            $map['hot']=2;
        }
        if($_GET['renqi'] == "newgoods"){
            $map['newgoods'] = 4;
        }
        if($_GET['id']){
            $map['id'] = $_GET['id'];
        }
        $page=new Page($user->where($map)->count(),8);
        $this->assign('data',$user->where($map)->limit($page->firstRow,$page->listRows)->select());
        $this->assign('pageinfo',$page->show());
        $this->display();
    }

    public function  add(){
        $user=M('goods');
        $data=$user->MAX(id);
        $this->assign('max',$user->where("id={$data}")->find());
        if ($_POST['sub']){
            if ($_POST['goodsnum']!=$_POST['did']){
               $_POST['uptime']=time();
                $info=$this->uppic();
                foreach ($info as $pic){
                    $a[]=$pic['savename'];
                }
                $data=$_POST;
                if ($_POST['vest']==0){
                   unset($_POST['vest']);

                }
                if ($_POST['rance']==0){
                    unset($_POST['rance']);
                }
                if (count($a)>1){
                    $data['firstpic']=$a[0];
                    $c=implode(',',$a);
                    $data['pic']=$c;
                }else {
                    $data['firstpic'] = $a[0];
                }
                if ($user->create($data)){
                    if ($user->add()){
                        $this -> redirect('Goods/index');
                    }else{
                        $this -> error('商品添加失败1');
                    }
                }else{
                    $this -> error('商品添加失败2');
                    exit;
                }

            }else {
                $this -> error('请输入商品编号或商品编号已存在');
                exit;
            }
        }
        $this->display();
    }

    public function  del(){
        if ($_POST['sub']){
            $data=I('ids');
            $id=implode(',',$data);
        }else{
            $id=I('id');
        }
        $user=M('goods');
        $map['id']=array('in',$id);
        $affectRow=$user->where($map)->delete();
        if ($affectRow){
            $this->redirect('Goods/index');

        }else{
            $this -> error('删除失败');
        }
    }


    public function mod(){
        $user=M('goods');
        $data=$user->MAX(id);
        $this -> assign('max',$user->where("id={$data}")->find());
        if($_POST['sub']){

            unset($_POST['sub']);
            if($_POST['vest'] == "0")
            {
                unset($_POST['vest']);
            }
            if($_POST['rance'] == "0")
            {
                unset($_POST['rance']);
            }
            if($_FILES)
            {
                $info = $this ->uppic();

                $data = $_POST;

                foreach($info as $pic)
                {
                    $a[] = $pic['savename'];
                }

                if(count($a)>=1)
                {
                    $data['firstpic'] = $a[0];
                    $c = implode(',',$a);
                    $data['pic'] = $c;
                }
            }else{

                $data = $_POST;


            }

            if($user -> create($data))
            {
                if($user->save())
                {
                    $this -> redirect('Goods/index');
                }else{

                    $this -> error('商品修改失败1');
                }
            }else{
                $this -> error('商品修改失败2');
            }

        }

        $data = $user->find(I('id'));
        $this -> assign('goods',$data);
        $this -> display();
    }

    public  function hotmod(){
        if ($_GET['id']){
            $user=M('goods');
            $info=$user->where('id='.$_GET['id'])->select();
            $num=$user->where('hot=2')->count();
            if ($num==4){
                $this->error('热销只有四个名额');
            }
            if($info['hot']==2){
                $this->error('该商品已经是热销商品了');

            }else{
                $data['hot']=2;
                $data['newgoods']=3;
                $data['id']=$_GET['id'];
                if ($user->create($data)){
                   $affectRow= $user->save();
                    if($affectRow){
                        $this->redirect('Goods/index');
                    }
                }
            }

        }
    }

    public function hotdel(){
        if ($_GET['id']){
            $user=M('goods');
            $info=$user->where('id='.$_GET['id'])->select();
            if ($info['hot']==1){
                $this->error('该商品不是热销商品');
            }else{
                $data['hot']=1;
                $data['id']=$_GET['id'];
                if ($user->create($data)){
                   $affectRow= $user->save();
                    if ($affectRow){
                        $this->redirect('Goods/index');
                    }
                }
            }

        }
    }

    public function newgoodsdel()
    {
        if($_GET['id']){
            $user = M('goods');
            $info = $user->where('id='.$_GET['id'])->select();
            if($info['newgoods'] == 3){
                $this->error('此商品已经取消新品了');
            }else{
                $data['newgoods'] = 3;
                $data['id'] = $_GET['id'];
                if($user->create($data)){
                    $affectedNum = $user->save();
                    if($affectedNum){
                        $this->redirect('Goods/index');
                    }
                }
            }
        }
    }


    public function monthsale()
    {
        $data = I('id');
        $sale = M('month_sale');
        $goods = M('goods') ;
        $month['gid']=$data;
        $dd = $sale->where("gid='{$data}'")->find();

        if($dd==''){
            if($sale->add($month))
            {
                $this->success('设置成功');
                $this->redirect('Goods/monthsalelist');
            }
        }else{
            $this->error('已设置');

        }
    }
    public function monthsalelist()
    {

        $goods = M("goods");
        $list = $goods->table('tb_goods a, tb_month_sale b')->where("a.id=b.gid")->select();
        $this->assign('data',$list);
        $this->display();

    }
    public function saledel()
    {

        $id = I('id');
        $sale = M('month_sale');
        $map['id'] = array('in',$id);
        $affectedNum = $sale -> where($map)-> delete();
        if($affectedNum)
        {
            $this -> redirect('Goods/monthsalelist');
        }else
        {
            $this -> error('删除失败');
        }



    }
    private function uppic(){
        $config = array("maxSize"=>'10000000',
            "exts" =>  array('jpeg','jpg','png','gif'),
            "rootPath"=>'./Public/upload/',
            "autoSub"=>false,
            "saveName" =>'',
            "replace"=>true,
        );

        $upload = new \Think\Upload($config);
        return $upload -> upload();

    }
}