<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/13 0013
 * Time: 18:11
 * 新闻控制器
 */
namespace  app\v1\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\v1\controller\Base;
class News extends Base {

    protected $table = 'news';
    
    public function index(){
        $list = Db::name($this->table)->where(['status'=>1,'options'=>1])->order('id desc')->paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add(){
        if($this->request->isPost()){
            $data['title']   = input('post.title','','trim');
            $data['content'] = input('post.content','','trim');
            $data['options'] = input('post.options','','int');
            $data['create_time'] = time();

            if(empty($data['title'] || !isset($data['content']))){
                return false;
            }

            $rets = Db::name($this->table)->insertGetId($data);

            if($rets !== false){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'添加失败']);
            }
        }

        return $this->fetch();
    }

    public function edit(){
        if($this->request->isGet()){
            $mid     = input('get.mid');
            $options = input('get.options','','int');
            if(empty($mid) || !isset($mid)){
                return false;
            }

            $infos = Db::name($this->table)->where(['id'=>$mid,'status'=>1,'options'=>$options])
                ->find();

            $this->assign('infos',$infos);
            return $this->fetch();
        }

        if($this->request->isPost()){
            $mid     = input('post.mid');
            $title   = input('post.title','','trim');
            $content = input('post.content','','trim');
            $options = input('post.options','','int');

            if(empty($mid) || !isset($mid)){
                return false;
            }

            $ret = Db::name($this->table)
                ->where(['id'=>$mid])
                ->update(['title'=>$title,'content'=>$content,'options'=>$options]);

            if($ret !== false){
                return json(['code'=>200,'msg'=>'编辑成功']);
            }else{
                return json(['code'=>400,'msg'=>'编辑失败']);
            }
        }
    }

    public function del(){
        if($this->request->isGet()){
            $mid = input('get.mid');

            if(empty($mid) || !isset($mid)){
                return false;
            }

            $ret = Db::name($this->table)->where(['id'=>$mid,'options'=>1])->update(['status'=>0]);

            if($ret !== false){
                return json(['code'=>200,'msg'=>'删除成功']);
            }else {
                return json(['code'=>400,'msg'=>'删除失败']);
            }
        }
        return false;
    }


    /**
     * 帖子区域2
     */
    public function two(){
        $list = Db::name($this->table)->where(['status'=>1,'options'=>2])->order('id desc')->paginate(15);
        $this->assign('list',$list);
        return $this->fetch();

    }

    /*
     * 帖子区域3
     */
    public function three(){
        $list = Db::name($this->table)->where(['status'=>1,'options'=>3])->order('id desc')->paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }


    /**
     * 帖子区域4
     */
    public function four(){
        $list = Db::name($this->table)->where(['status'=>1,'options'=>4])->order('id desc')->paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }
}