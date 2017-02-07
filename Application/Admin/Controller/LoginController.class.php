<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/10/24
 * Time: 12:10
 */

namespace Admin\Controller;
use Think\Controller;


class LoginController extends Controller  {
    public function index(){
        $this->display();
    }

    public function dologin(){
        $user=M('admin');
        $where['username']=I('username');
        $where['password']=md5(I('password'));
        $data=$user->where($where)->find();
        if ($data){
            $_SESSION['master']=$data;
            $_SESSION['isLogin']=1;
            $this->redirect('index/index');
        }else{
            $_SESSION['isLogin']=0;
            $this->error('登录失败');

        }


    }

    public function logout(){
        $_SESSION['master']=null;
        $_SESSION['isLogin']=0;
        $this->redirect('login/index');
    }
}