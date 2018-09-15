<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Good extends Model{
    public function show(){
        return Db::table('good')->select();
    }
    public function inserts($arr){
        return Db::table('good')->insert($arr);
    }
    public function upd($request,$g_id){
        return Db::table('good')->where("g_id=$g_id")->update($request);
    }
}
?>