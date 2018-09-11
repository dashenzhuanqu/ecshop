<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Classify extends Model{
    public function shows(){
        return Db::table('classify')->select();
    }
    public function del($cat_id){
        return Db::table('classify')->delete($cat_id);
    }
}
?>