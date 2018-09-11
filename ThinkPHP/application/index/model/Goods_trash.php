<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Goods_trash extends Model{
    public function del($id){
        return Db::table('goods_trash')->delete($id);
    }
}