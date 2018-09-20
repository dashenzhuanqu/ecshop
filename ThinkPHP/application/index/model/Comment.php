<?php
namespace app\index\model;
use think\Db;
use think\Model;
class Comment extends Model
{
    public function cha($id){
        return Db::query("
        select comment_id,`user`.user_name,comment_content,comment_time,`comment`.is_show,good.goods_name,goods_type.goods_type_name,reply.reply_message,`user`.email,areply.areply_message
            from `comment`
            join `user` on `comment`.user_id=`user`.user_id
            join good on good.g_id=`comment`.g_id
            join goods_type on goods_type.t_id=`comment`.t_id
            join reply on reply.reply_id=`comment`.reply_id
            join areply on areply.areply_id=`comment`.areply_id where comment_id='$id';
        ");
    }

    public function cha1(){
        return Db::query("
        select comment_id,`user`.user_name,comment_content,comment_time,`comment`.is_show,good.goods_name,goods_type.goods_type_name,reply.reply_message,`user`.email,areply.areply_message
            from `comment`
            join `user` on `comment`.user_id=`user`.user_id
            join good on good.g_id=`comment`.g_id
            join goods_type on goods_type.t_id=`comment`.t_id
            join reply on reply.reply_id=`comment`.reply_id
            join areply on areply.areply_id=`comment`.areply_id 
        ");
    }
}