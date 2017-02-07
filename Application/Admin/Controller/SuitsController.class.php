<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/11/12
 * Time: 22:01
 */

namespace Admin\Controller;


use Think\Controller;

class SuitsController extends PublicController
{
    public function add(){
        $suits=M('goods');
        $data4=$suits->field('id,goodsname,vest,firstpic')->where("vest='P2' or vest='E1'")->select();
        $data2=$suits->field('id,goodsname,vest,firstpic')->where("vest='P3' or vest='P1'")->select();
        $data3=$suits->field('id,goodsname,vest,firstpic')->where("vest='E2'")->select();
        $data1=$suits->field('id,goodsname,vest,rance')->where()->select();
        $this->assign('data4',$data4);
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->assign('data1',$data1);
        $this->display();
    }
    public function doadd(){
        $suits=I();
        $goods=M('goods');
        $sid=I('goodsid');
        $data=M('suits');
        $sa=I('suit2');
        $sb=I('suit4');

        $p1=$goods->where("id={$sa}")->find();
        $p2=$goods->where("id={$sb}")->find();


        $h=$data->select();
        $suit2['gid']=$suits['goodsid'];
        $suit2['suit1']=$sa;
        $suit2['suit2']=$sb;
        $suit2['pic1']=$p1['firstpic'];
        $suit2['pic2']=$p2['firstpic'];

        $dd = $data->where("gid={$sid}")->find();
        //dump($dd);
        //exit;
        if($dd==null ){
            if($sa>0 || $sb>0)
            {
                if($data->add($suit2))
                {
                    $this->success('成功');

                    $this->redirect('Suits/suitslist');
                }else{
                    $this->error('失败重选');
                }

            }else{
                $this->error('请选择套餐配件');
            }
        }else{
            $this->error('此手机已设置套餐');
            exit;
        }



        $this->display();
    }

    public function suitslist(){
      $goods=  M('goods');
        $s=M('suits');
        $suits=$goods->tabel('tb_goods a,tb_suits b')->where('a.id=b.gid')->select();
        $this->assign('data',$suits);
        $this->display();

    }
    public function suitdel()
    {
        $id = I('id');
        $sale = M('suits');
        $map['id'] = array('in',$id);
        $affectedNum = $sale -> where($map)-> delete();
        if($affectedNum)
        {
            $this -> redirect('Suits/suitslist');
        }else
        {
            $this -> error('删除失败');
        }

    }

}