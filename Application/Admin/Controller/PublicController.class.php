<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/10/25
 * Time: 9:24
 */

namespace Admin\Controller;


use Think\Controller;

class PublicController extends Controller{

    public function _initialize(){
        if ($_SESSION['master']['id']==1){
            return true;
        }
        if (!$_SESSION['isLogin']){
            $this->error('请先登录',U('Login/index'));

        }
        $userId=$_SESSION['master']['id'];
        $rule=CONTROLLER_NAME.'/'.ACTION_NAME;
        $auth=new \Think\Auth();
        if (!$auth->check($rule,$userId)){
            $this->redirect('Error/error404');
        }
    }
}