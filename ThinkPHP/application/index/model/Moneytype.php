<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Moneytype extends Model{
    public function jia($request){
        return Db::table("moneytype")->insert($request);
    }

    public function cha($type_id){
        return Db::query("select * from moneytype where type_id='$type_id'");
    }

    public function shan($type_id){
        return Db::execute("delete from moneytype where type_id='$type_id'");
    }

    public function upd($request,$type_id){
        return Db::table('moneytype')->where("type_id=$type_id")->update($request);
    }

    public function ajaxChange($type_id,$type_type){
        return Db::execute("update moneytype set type_type='$type_type' where type_id='$type_id'");
    }
}