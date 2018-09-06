<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Brand extends Model{
    public function show(){
        return Db::table('brand')->select();
    }
    public function inserts($request){
        return Db::table('brand')->insert($request);
    }
}

?>