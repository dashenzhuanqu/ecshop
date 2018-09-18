<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Ad extends Model{
    public function jia($request){
        return Db::table("Ad")->insert($request);
    }

    public function shan($ad_id){
        return Db::execute("delete from ad where ad_id='$ad_id'");
    }

    public function cha($ad_id){
        return Db::query("select * from ad where ad_id='$ad_id'");
    }

    public function ajaxChange($ad_id,$ad_name){
        return Db::execute("update ad set ad_name='$ad_name' where ad_id='$ad_id'");
    }
}