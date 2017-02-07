<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign('server',$_SERVER);
        $this->display();
    }
}