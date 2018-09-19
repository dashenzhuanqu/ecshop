<?php
/**
 * Created by PhpStorm.
 * User: xing
 * Date: 2018/9/16 0016
 * Time: 21:04
 */
namespace app\index\model;
use think\Model;
use think\Db;
class Areply extends Model{
    public function jia($reply_message){
        return Db::execute("insert into areply set areply_message='$reply_message'");
    }

    public function cha(){
        return Db::query("select * from areply");
    }
}