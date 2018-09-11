<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Ads extends Model{
    public function jia($request){
        return Db::table('Ads')->insert($request);
    }

    public function cha(){
        return Db::table('Ads')->select();
    }

    public function shan($ads_id){
        return Db::execute("delete from ads where ads_id='$ads_id'");
    }
}