<?php
namespace Admin\Widget;
use Think\Controller;

class UserInfoWidget extends Controller{
	public function getUserInfo(){
		if($_SESSION['master']){
			$this->assign('userinfo',$_SESSION['master']);
			$this->display("Public:UserInfo");
		}else{
			$_SESSION['master']='';
			$this->assign('userinfo',$_SESSION['master']);
			$this->display("Public:UserInfo");
		}
	}
}
?>