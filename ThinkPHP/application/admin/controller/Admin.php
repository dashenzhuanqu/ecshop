<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Category;
class admin extends Controller
{
    //首页
    public function index()
    {
        // 查询商品类型
        $category=new Category();
        $category_data=Db::name('classify')->select();
         $xhan=Db::name('classify')->where('parent_id=0')->select();
         $xhan1=$category->createTreeBySon($xhan);
        $cate_list=$category->createTreeBySon($category_data);
        $goods_data=Db::name('good g')
            ->join('classify c','g.cat_id=c.cat_id')
            ->select();
        $this->assign('goods_data',$goods_data);
        $this->assign('cat_data',$cate_list);
         $this->assign('xhan',$xhan1);
        return $this->fetch();
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
    public function category(){
        return view('category');
    }
    public function user_logout()
    {
        session(null);//退出清空session
        return $this->success('退出成功',url('admin/user'));//跳转到登录页面
    }
}