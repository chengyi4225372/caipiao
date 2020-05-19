<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/19
 * Time: 22:33
 */
namespace  app\v1\controller;

use think\Controller;
use think\Db;
use app\v1\controller\Base;

class Ma extends Base {

    public function index(){

        return $this->fetch();
    }
    

}