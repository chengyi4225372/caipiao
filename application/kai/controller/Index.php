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
            $mid = input('get.mid','','trim');

            $info = Db::name('ball')->where(['status'=>1,'id'=>$mid])->find();
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){
            $data['now'] = input('post.now','','trim');
            $data['next'] = input('post.next','','trim');
            $data['one'] = intval(input('post.one','','trim'));
            $data['two'] = intval(input('post.two','','trim'));
            $data['three'] = intval(input('post.three','','trim'));
            $data['four'] = intval(input('post.four','','trim'));
            $data['five'] = intval(input('post.five','','trim'));
            $data['six'] = intval(input('post.six','','trim'));
            $data['seven'] = intval(input('post.seven','','trim'));
            $data['next_time'] = input('post.next_time','','trim');
            $data['next_qi'] = input('post.next_qi','','trim');
            $data['create_time'] = time();

            $mid = input('post.mid','','trim');

            if(empty($mid) || !isset($mid) || is_null($mid)){
                $ret = Db::name('ball')->insertGetId($data);

                if($ret !==false){
                    return json(['code'=>200,'msg'=>'操作成功','addid'=>$ret]);
                }else{
                    return json(['code'=>400,'msg'=>'操作失败']);
                }
            }


            if(!empty($mid)){
                $ret = Db::name('ball')->where(['id'=>$mid,'status'=>1])->update($data);
                if($ret !==false){
                    return json(['code'=>200,'msg'=>'操作成功','addid'=>$mid]);
                }else{
                    return json(['code'=>400,'msg'=>'操作失败']);
                }
            }


        }

        return false;
    }

}