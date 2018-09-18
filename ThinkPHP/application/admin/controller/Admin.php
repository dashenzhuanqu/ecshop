<?php
namespace app\admin\controller;
use think\Controller;
class admin extends Controller
{
    //首页
    public function index()
    {
        return view('index');
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
    //注册
    public function user_register()
    {
        return view('user_register');
    }
    public function goods()
    {
        return view('goods');
    }
}