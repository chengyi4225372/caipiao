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
   protected $table = 'ma';

    public function index(){
        if($this->request->isGet()){
            $info = Db::name($this->table)->order('id desc')->find();
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){
            $mid = input('post.mid');
            $key = input('post.key','','trim');

            if(empty($mid)|| !isset($mid)){
                $ret = Db::name($this->table)->insert(['key'=>$key]);
            }else{
                $ret = Db::name($this->table)->where(['id'=>$mid])->update(['key'=>$key]);
            }

            if($ret !== false){
                return json(['code'=>200,'msg'=>'提交成功']);
            }else{
                return json(['code'=>400,'msg'=>'提交失败']);
            }

        }

        return false;
    }
    

}