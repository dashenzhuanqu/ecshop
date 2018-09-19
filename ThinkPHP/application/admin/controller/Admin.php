<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
class admin extends Controller
{
    //首页
    public function index()
    {
        $goods = Db::table('good')->where('b_id',4)->limit(8)->select();
        $goods1 = Db::table('good')->where('b_id',5)->limit(8)->select();
        $goods2 = Db::table('good')->where('b_id',11)->limit(8)->select();
        $goods_hot = Db::table('good')->order('is_hot desc')->limit(5)->select();
        $list = Db::table('ad')->select();
        return view('index',['list'=>$list,'goods'=>$goods,'goods1'=>$goods1,'goods2'=>$goods2,'goods_hot'=>$goods_hot]);
    }
    //购物车
    public function flow()
    {
        return view('flow');
    }
    //继续购物
    public function flow_checkout()
    {
        return view('flow_checkout');
    }
    //登录
    public function user()
    {
        return view('user');
    }
    public function user_do()
    {
        $name = input('?post.username');
        $pwd = input('?post.password');

    }
    //注册
    public function user_register()
    {
        return view('user_register');
    }
    public function register_do()
    {
        $post = input('?post.');
        $data = Db::table('think_user')->insert($post);
    }

    public function goods()
    {
        $id = input('id');
        $list = Db::table('good')->join('brand','good.b_id=brand.b_id')->join('classify','good.cat_id=classify.cat_id')->where('g_id',$id)->find();
        //print_r($list);die;
        return view('goods',['list'=>$list]);
    }
}