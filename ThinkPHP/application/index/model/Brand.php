<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Brand extends Model{
    public function selects(){
        return Db::table('brand')->select();
    }
    public function find($id){
        return Db::table('brand')->find($id);
    }
    public function inserts($request){
        return Db::table('brand')->insert($request);
    }
    public function upd($request,$b_id){
        return Db::table('brand')->where("b_id=$b_id")->update($request);
    }
    public function del($id){
        return Db::table('brand')->delete($id);
    }
}

?>