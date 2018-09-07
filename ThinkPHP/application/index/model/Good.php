<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Good extends Model{
    public function show(){
        return Db::table('good')->select();
    }
}
?>