<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Ads extends Model{
    public function jia($request){
        return Db::table('Ads')->insert($request);
    }
<<<<<<< HEAD
    public function shan($ads_id){
        return Db::execute("delete from ads where ads_id='$ads_id'");
    }
    public function cha($ads_id){
        return Db::query("select * from ads where ads_id='$ads_id'");
    }
=======


    public function shan($ads_id){
        return Db::execute("delete from ads where ads_id='$ads_id'");
    }

    public function cha($ads_id){
        return Db::query("select * from ads where ads_id='$ads_id'");
    }

>>>>>>> 162eb45d3545835706421a1fa4def50ad00a1a9b
    public function ajaxChange($ads_id,$ads_name){
        return Db::execute("update ads set ads_name='$ads_name' where ads_id='$ads_id'");
    }
}