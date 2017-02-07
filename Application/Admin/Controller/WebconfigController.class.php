<?php
namespace Admin\Controller;
class WebconfigController extends PublicController{

	public function index(){
		$webinfo = M("webinfo");   
		$data = $webinfo -> find();
		$this -> assign("webinfo",$data);
		$this -> display();
	}
	
	public function update(){
		$webinfo = M("webinfo");
		$_POST['id'] = 1;
		if ($webinfo->create($_POST)){
			if ($webinfo -> save()){
				$data=$_POST;
				$upload = new \Think\Upload();// 实例化上传类
				$upload -> maxSize = 3145728 ;// 设置附件上传大小
				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath = 'Public/home/images/'; // 设置附件上传目录
				$upload->saveName = 'logo'; 
				$upload->saveExt = 'png'; 
				$upload->subName = 'logo';
				$info   =   $upload->upload();
				$_SESSION['isopen'] = $_POST['isopen'];
				$this -> redirect('webconfig/index');
			}else{
				$this -> error("修改配置失败!","index");
			}
		}else{
			$this -> error("修改失败！","index");
		}
	}
}
?>