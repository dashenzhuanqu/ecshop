<?php
namespace app\index\controller;
use app\index\model\Ads;
use think\Controller;
use think\Request;
use think\Db;
class Adds extends Controller{

    /**
     * 广告栏列表
    **/
    public function Adds(){
        $list = Db::name('Ads')->paginate(5);
        $this->assign('data', $list);
        return $this->fetch('adds');

//        $adds = new Ads();
//        $res = $adds->cha();
//        return $this->fetch('adds',['data'=>$res]);
    }
//煮豆燃豆萁，豆在釜中泣;
//本是同根生，相煎何太急;
    /**
     * 加载广告栏添加
    */
    public function Ads_add(){
        return $this->fetch('Ads_add');
    }
    /**
     * 添加广告栏数据
    */
    public function Ads_insert(){
        $request = Request::instance()->post();
        $db = new Ads();
        $data = $db->jia($request);
        if($data){
            return $this->fetch('success');
        }else{
            echo "失败";
        }
    }

    public function adds_delete(){
        $ads_id = input('get.ads_id');
        $data = model('ads')->shan($ads_id);
        if($data){
//            return $this->fetch('add');
            $list = Db::name('Ads')->paginate(5);
            $this->assign('data', $list);
            return $this->fetch('success');
        }
    }

}