<?php
namespace Admin\Controller;
class UserController extends PublicController {

    public function index(){
	   $user = M('user');
	   if($_GET['username']){
			$map['username'] = array('LIKE',"%{$_GET['username']}%");
	   }
	   unset($map['p']);
	   $page = new \Think\Page($user->where($map)->count(),8);
       $this -> assign('data',$user->where($map)->limit($page ->firstRow,$page->listRows)->select());
	   $this -> assign('pageinfo',$page->show());	
	   $this -> display();
    }
	
    public function add(){
		if($_POST['sub']){ 
			if(I('password') == I('repassword')){
			   $_POST['username'] = $_POST['username'];	 
			   $_POST['password'] = md5($_POST['password']);
			   $_POST['rtime'] = time();
			   $_POST['rip'] = get_client_ip();
			}else{
			   $this -> error('两次密码不一致');	
			} 
			$data = $_POST; 
			$user = M('user');
			if($user -> create($data)){
				if($user->add()){
					$this -> redirect('User/index');
				}
			}else{
			   $this -> error('数据添加失败');	
			}	 
		}	
	    $this -> display();		
	}
	
    public function mod(){
		$user = M('user');
		if($_POST['sub']){
			if(I('password')){
				if(I('password') == I('repassword')){
					$_POST['password'] = md5($_POST['password']);
				}else{
					$this -> error('两次密码不一致');
				}	
			}else{
				unset($_POST['password']);
			}
			$data = $_POST;
			if($user -> create($data)){
				if($user -> save()){
					$this -> redirect('User/index');
				}else{
					$this -> error('信息修改失败');	
				}	
			}else{
				$this -> error('信息修改失败');	
			}	 
		}	
		$data = $user -> find(I('id'));
		$this -> assign('user',$data);	 
		$this->display();		
	}	
	
    public function del(){
		if($_POST['sub']){
			$data = I('ids');
			$id = implode(',',$data);			
		}else{
			$id = I('id');  	 
		}
		$user = M('user');
		$map['id'] = array('in',$id);
		$affectedNum = $user -> where($map)-> delete();
		if($affectedNum){
			$this -> redirect('User/index');
		}else{	
			$this -> error('删除失败');	
		}
	}
}	
