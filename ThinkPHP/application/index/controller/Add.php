<?php
namespace app\index\controller;
use app\index\model\Ad;
use think\Controller;
use think\Request;
use think\Db;
class Add extends Controller{
    /**
     * 广告列表
    **/
    public function Add(){

        $list = Db::name('Ad')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('data', $list);
        // 渲染模板输出
        return $this->fetch('add');
    }

    /**
     * 加载广告添加模块
     **/
    public function add_add(){
        return $this ->fetch('add_add');
    }
//
    /**
     * 广告表单添加
     * */
    public function Ad_insert(){
        $request = Request::instance()->post();
        $request['ad_img']=$this->upload();
        $db=new Ad();
        $data=$db->jia($request);
        if($data){
            return $this ->fetch('success');
        }else{
            echo "网络异常";
        }
    }
    /**
     * 文件上传
    **/
    public function upload(){
        $file = request()->file('ad_img');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            return $info->getSaveName();
    }else{
            return $file->getError();
        }
    }
    /**
     * 删除
    **/
    public function add_delete(){
        $ad_id = input('get.ad_id');
        $data = model('ad')->shan($ad_id);
        if($data){
            $list = Db::name('Ad')->paginate(5);
            $this->assign('data', $list);
            return $this->fetch('success');
        }
    }

    public function add_select(){
        $ad_id = input('get.ad_id');
//        print_r($ad_id);
        $data = model('ad')->cha($ad_id);
//        print_r($data);
        if($data){
            $this->assign('data',$data);
            return $this->fetch('update');
        }
    }

    public function Ad_update(){
//        echo "123";
        $ad_id = input('post.ad_id');
//        print_r($ad_id);
        $request = Request::instance()->post();
        $db = new Ad();
        $data = $db->save($request,$ad_id);
        if($data){
            return $this->fetch('success');
        }else{
            echo "网络异常";
        }
    }

    public function gai(){
        $ad_id=input("post.ad_id");
//        return $ad_id;die;
        $ad_name=input("post.ad_name");

        $data=model('ad')->ajaxChange($ad_id,$ad_name);
        return $data;
    }
}