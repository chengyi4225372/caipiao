<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/19
 * Time: 0:44
 */
namespace app\index\controller;

use app\index\controller\Base;
use think\Controller;
use think\Db;
use think\Session;

class Tie extends Base
{
    //帖子首页
    public function index()
    {
        if($this->request->isGet()){

            return $this->fetch();
        }
        return false;
    }
    
}
