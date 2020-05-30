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
           $this->assign('banner',$banner);
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
        
    }


}
