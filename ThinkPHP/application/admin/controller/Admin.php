<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use app\admin\model\Category;
class admin extends Module
{
    //首页
    public function index()
    {
<<<<<<< HEAD
        $username = $this->header();
=======
        $goods = Db::table('good')->where('b_id',4)->limit(8)->select();
        $goods1 = Db::table('good')->where('b_id',5)->limit(8)->select();
        $goods2 = Db::table('good')->where('b_id',11)->limit(8)->select();
        $goods_hot = Db::table('good')->order('is_hot desc')->limit(5)->select();
        $list = Db::table('ad')->select();
>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
        // 查询商品类型
        $category=new Category();
        $category_data=Db::name('classify')->select();
        $cate_list=$category->createTreeBySon($category_data);
<<<<<<< HEAD
        $goods = Db::table('good')->where('b_id',4)->limit(8)->select();
        $goods1 = Db::table('good')->where('b_id',5)->limit(8)->select();
        $goods2 = Db::table('good')->where('b_id',11)->limit(8)->select();
        $goods_hot = Db::table('good')->order('is_hot desc')->limit(5)->select();
        $list = Db::table('ad')->select();
        // 查询商品类型
        $this->assign('cat_data',$cate_list);
//        $this->assign('data',$data);
        $this->assign('username',$username);
//         $this->assign('xhan',$xhan1);
        return $this->fetch('index',['list'=>$list,'goods'=>$goods,'goods1'=>$goods1,'goods2'=>$goods2,'goods_hot'=>$goods_hot,'cat_data'=>$cate_list]);
=======
        return view('index',['list'=>$list,'goods'=>$goods,'goods1'=>$goods1,'goods2'=>$goods2,'goods_hot'=>$goods_hot,'cat_data'=>$cate_list]);
>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
    }

    //购物车
    public function flow()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('flow');
    }
    //继续购物
    public function flow_checkout()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('flow_checkout');
    }
    //登录
    public function user()
    {
        $username = $this->header();
        $this->assign('$username',$username);
        return view('user');
    }
<<<<<<< HEAD
    public function login()
    {
        if (request()->isPost()) {
            $username = Request::instance()->post('username');
            $pwd = Request::instance()->post('pwd');
            $data = Db::table('registered')->where("username='$username'")->where("pwd='$pwd'")->find();
            $username = $data['username'];
            if ($data) {
                session_start();
                Session::set('username',$username);
                return $this->success('登陆成功', 'goods/user_show');
            } else {
                return $this->error('用户名密码有误');
            }
        }
=======
    public function user_do()
    {
        $name = input('?post.username');
        $pwd = input('?post.password');

>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
    }
    //注册
    public function user_register()
    {
        $username=$this->header();
        $this->assign('username',$username);
        return view('user_register');
    }
<<<<<<< HEAD
    public function user_add()
    {
        if (request()->isPost()) {
            $request = Request::instance()->post();
            if(array_key_exists('agreement',$request)){
            $arr = Db::table('registered')->where('username', $request['username'])->find();
            if (empty($arr)) {
                $username = $request['username'];
                session_start();
                Session::set('username',$username);
                $res = Db::table('registered')->insert($request);
                if ($res){
                    Session::set('username',$username);
                    $username=$this->header();
                    $this->assign('username',$username);
                    return view('goods/user_show');
                }
            } else {
                $this->error('用户已存在');
            }
        } else {
            $this->error("你没有看过或不接受协议");
        }
    }else
    {
            return $this->fetch();
    }
    }
    //购买
    public function goods()
    {
        $username=$this->header();
        $id = input('id');
        $list = Db::table('good')->join('brand','good.b_id=brand.b_id')->join('classify','good.cat_id=classify.cat_id')->where('g_id',$id)->find();
        //print_r($list);die;
        $this->assign('username',$username);
=======
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
>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
        return view('goods',['list'=>$list]);
    }
    //详情
    public function category(){
        $id = input('get.id');
        $list = Db::table('classify')->join('good','classify.cat_id=good.cat_id')->join('brand','good.b_id=brand.b_id')->where('g_id',$id)->select();
        $username=$this->header();
        $this->assign('list',$list);
        $this->assign('username',$username);
        return view('category');
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