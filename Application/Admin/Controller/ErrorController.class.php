<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/10/25
 * Time: 9:20
 */

namespace Admin\Controller;
use Think\Controller;

class ErrorController extends  Controller
{
    public  function error404(){
        $this->display();
    }
}