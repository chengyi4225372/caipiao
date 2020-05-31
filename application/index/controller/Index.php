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
            $banner = Db::name('banner')->where(['status'=>1])->select();
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
        return $this->fetch();
    }

    /**
     * 中间
     */
    public function plugs(){
        return $this->fetch();
    }
    
    /**
     * 帖子详情页
     */
    public  function infos(){
        return $this->fetch();
    }


}
