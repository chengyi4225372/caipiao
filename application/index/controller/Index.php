<?php
namespace app\index\controller;

use app\index\controller\Base;
use think\Controller;
use think\Db;
use think\Session;

class Index extends Base
{
    //首页
    public function index()
    {
        if($this->request->isGet()){
            $banner = Db::name('guang')->where(['status'=>1])->select();
            $newss  = Db::name('news')->where(['status'=>1,'`options`'=>1])->select();
            $news2  = Db::name('news')->where(['status'=>1,'`options`'=>2])->select();
            $news3  = Db::name('news')->where(['status'=>1,'`options`'=>3])->select();
            $news4  = Db::name('news')->where(['status'=>1,'`options`'=>4])->select();
            $this->assign('banner',$banner);
            $this->assign('newss',$newss);
            $this->assign('news2',$news2);
            $this->assign('news3',$news3);
            $this->assign('news4',$news4);
            return $this->fetch();
        }
        return false;
    }

    /**
     * 开奖记录
     */
    public function history(){
        $list = Db::name('ball')->where(['status'=>1])->order('now desc')->select();
        $list?$list:'';
        $this->assign('list',$list);
        return $this->fetch();
    }

    /**
     * 中间
     */
    public function plugs(){
        $news = Db::name('ball')->where(['status'=>1])->order('now desc')->find();
        $next = Db::name('ball')->where(['status'=>1,'id'=>$news['id']])->find();
        $this->assign('news',$news);
        $this->assign('next',$next);
        return $this->fetch();
    }
    
    /**
     * 帖子详情页
     */
    public  function infos(){

        if($this->request->isGet()){
            $mid = input('get.mid','','int');

            if(empty($mid)){
                return false;
            }

            $info = Db::name('news')->where(['id'=>$mid,'status'=>1])->find();
            $this->assign('info',$info);
            return $this->fetch();
        }
        return false;
    }

    //2010
    public function ten(){

        return $this->fetch();
    }

    //2011
    public function one(){

        return $this->fetch();
    }

    //2012
    public function two(){

        return $this->fetch();
    }

    //2013
    public function three(){

        return $this->fetch();
    }

    //2014
    public function four(){

        return $this->fetch();
    }


    //2015
    public function five(){

        return $this->fetch();
    }

    //2016
    public function six(){

        return $this->fetch();
    }

    //2017
    public function seven(){

        return $this->fetch();
    }

    //2018
    public function eight(){

        return $this->fetch();
    }

   //2019
    public function night(){
        return $this->fetch();
    }

}
