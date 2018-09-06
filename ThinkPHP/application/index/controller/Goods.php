<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\Good;
use app\index\model\Brand;
class Goods extends Controller
{
    public function goods(){
        $goods = new Good;
        $arr = $goods->show();
        return $this->fetch('goods_list',['arr' => $arr]);
    }
    public function goods_add(){
        return view('goods_add');
    }
    public function category_list(){
        return view('category_list');
    }
    public function category_add(){
        return view('category_add');
    }
    public function comment_manage_list(){
        return view('comment_manage_list');
    }
    public function brand_list(){
        $goods = new Brand;
        $arr = $goods->select();
        return $this->fetch('brand_list',['arr' => $arr]);
    }
    public function brand_add(){
        return view('brand_add');
    }
    public function goods_type_manage(){
        return view('goods_type_manage');
    }
    public function goods_type_add(){
        return view('goods_type_add');
    }
    public function goods_trash(){
    return view('goods_trash');
    }
    public function goods_a(){
        return view('goods');
    }
    public function coty(){
        return view('coty');
    }
}