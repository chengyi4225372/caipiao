<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/30
 * Time: 12:04
 * 开奖后台
 */
namespace app\kai\controller;

use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller
{
    //首页
    public function index()
    {
        return $this->fetch();
    }


    /**
     * 登录开奖后台
     */
    public  function checkjiang(){
        if($this->request->isPost()){

        }
        return false;
    }


    /**
     * 开奖页面
     */
    public function jiang(){
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

        }

        return false;
    }

}