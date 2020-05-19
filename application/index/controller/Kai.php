<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/19
 * Time: 21:19
 * 开奖
 */
namespace  app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\v1\controller\Base;
class Kai extends Base {


    public function index(){
        return $this->fetch();
    }
}