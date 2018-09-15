<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Classify extends Model{
    public function addData($data){
        return Db::table('classify')->insert($data);
    }
    public function shows(){
        return Db::table('classify')->select();
    }
    public function find($id){
        return Db::table('classify')->find($id);
    }
    public function upd($request,$cat_id){
        return Db::table('classify')->where("cat_id=$cat_id")->update($request);
    }
    public function del($cat_id){
        return Db::table('classify')->delete($cat_id);
    }
    public function getPathList($id,$path='path'){
        $result=Db::query("SELECT *,CONCAT($path,'-',$id) as new FROM classify ORDER BY new");
        return $result;
    }
}
?>