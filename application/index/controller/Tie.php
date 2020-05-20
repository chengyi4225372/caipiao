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
    public function index(){
        return $this->fetch();
    }

    public function xjpqlc(){
        return $this->fetch();
    }

    public function gao(){
        return $this->fetch();
    }

    public function two(){
        return $this->fetch();
    }

    public function tuku(){
        return $this->fetch();
    }
}
