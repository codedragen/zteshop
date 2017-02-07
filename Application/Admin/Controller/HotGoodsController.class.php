<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/11/7
 * Time: 16:56
 */

namespace Admin\Controller;


class HotGoodsController extends PublicController
{
   public function index(){
       $user=M('hotgoods');
       $data=$user->table('tb_goods,tb_hotgoods')->where('tb_hotgoods.gid=tb_goods.id')->select();
       $this->assign('data',$data);
       $this->display();
   }

   public function mod(){
       if ($_GET['id']){
           $user=M('hotgoods');
           $data['hot']=3;
           $data['id']=$_GET['id'];
           if ($user->create($data)){
              $affectRow= $user->save();
               if ($affectRow){
                   $this->redirect('Hotgoods/index');
               }

           }
       }
   }

    public function indexmod()
    {
        if($_GET['id'])
        { $user = M('hotgoods');
            $data['hot'] = 4;
            $data['id'] = $_GET['id'];
            if($user->create($data))
            {
                $affectedNum = $user->save();
                if($affectedNum){
                    $this->redirect('Hotgoods/index');
                }
            }
        }
    }

}