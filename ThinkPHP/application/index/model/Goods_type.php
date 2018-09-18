<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Goods_type extends Model{
    public function selected(){
        return Db::table('goods_type')->select();
    }
    public function find($id){
        return Db::table('goods_type')->find($id);
    }
    public function del($id){
        return Db::table('goods_type')->delete($id);
    }
    public function inserts($request){
        return Db::table('goods_type')->insert($request);
    }
    public function upd($request,$t_id){
        return Db::table('goods_type')->where("t_id=$t_id")->update($request);
    }

}
?>