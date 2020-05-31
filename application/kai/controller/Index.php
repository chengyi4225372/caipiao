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
             $login  = input('post.login','','trim');
             $ma     = Db::name('ma')->order('id  desc')->find();
            if($login == $ma['key']){
                return json(['code'=>200,'msg'=>'success']);
            }

            if($login != $ma['key']){
                return json(['code'=>400,'msg'=>'error']);
            }
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
            $data['now'] = input('post.now','','trim');
            $data['next'] = input('post.now','','trim');
            $data['one'] = input('post.one','','trim');
            $data['two'] = input('post.two','','trim');
            $data['three'] = input('post.three','','trim');
            $data['four'] = input('post.four','','trim');
            $data['five'] = input('post.five','','trim');
            $data['six'] = input('post.six','','trim');
            $data['seven'] = input('post.seven','','trim');
            $data['create_time'] = time();

            $ret = Db::name('ball')->insertGetId($data);

            if($ret !==false){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }

        }

        return false;
    }

}