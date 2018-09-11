<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Moneytype extends Model{
    public function jia($request){
        return Db::table("moneytype")->insert($request);
    }

    public function cha(){
        return Db::table("moneytype")->select();
    }

    public function shan($type_id){
        return Db::execute("delete from moneytype where type_id='$type_id'");
    }
}