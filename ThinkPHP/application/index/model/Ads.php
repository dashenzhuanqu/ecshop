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

>>>>>>> 3652eca2600fe77443b1039126fb1b862771e0f3
    public function ajaxChange($ads_id,$ads_name){
        return Db::execute("update ads set ads_name='$ads_name' where ads_id='$ads_id'");
    }
}