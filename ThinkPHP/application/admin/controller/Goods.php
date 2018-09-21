<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Goods extends Module
{
    public function user_show()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_show');
    }
    //资金管理
    public function user_account_log()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_account_log');
    }
    //收货地址
    public function user_address_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_address_list');
    }
    //我的推荐
    public function user_affiliate()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_affiliate');
    }
    //我的红包
    public function user_bonus()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_bonus');
    }
    //缺货登记
    public function user_booking_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_booking_list');
    }
    //我的收藏
    public function user_collection_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_collection_list');
    }
    //我的评论
    public function user_comment_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_comment_list');
    }
    //欢迎页
    public function user_list()
    {
        $username = Session::get('username');
        if(empty($username)){
            $this->redirect('admin/user');
        }
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_list');
    }
    //我的留言
    public function user_message_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_message_list');
    }
    //我的订单
    public function user_order_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_order_list');
    }
    //用户信息
    public function user_profile()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_profile');
    }
    //我的标签
    public function user_tag_list()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_tag_list');
    }
    //跟踪包裹
    public function user_track_packages()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_track_packages');
    }
    //退出
    public function user_logout()
    {
        session(null);//退出清空session
        $data=Db::name('classify')->where('is_nav',1)->orderRaw('rand()')->select();
        $this->assign('data',$data);
        return view('goods/user_show');//跳转到登录页面
    }
}