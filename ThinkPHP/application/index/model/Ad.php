<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Ad extends Model{
    public function jia($request){
        return Db::table("Ad")->insert($request);
    }

    public function cha(){
//        return Db::table("moneytype")->select();
        return Db::table("Ad")->select();
    }

    public function shan($ad_id){
        return Db::execute("delete from ad where ad_id='$ad_id'");
    }
}