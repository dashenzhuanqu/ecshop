<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Attribute extends Model{
//    public function find($id){
//        return Db::table('attribute')->join('goods_type','attribute.t_id=goods_type.t_id')->find($id);
//    }
    public function upd($request,$attr_id){
        return Db::table('attribute')->where("attr_id=$attr_id")->update($request);
    }
}

?>