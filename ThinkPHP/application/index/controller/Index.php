<?php
namespace app\index\controller;
//use think\Controller;
//use think\Request;
class Index {
    public function index(){
//       $name=Request::instance()->session('data');
//       if(!$name){
//           echo "alert('请先登录');location.href='index/login/login'";
//       }else{
           return view('index');
//       }
    }
    public function main(){
        return view('index_main');
    }
    public function menu(){
        return view('index_menu');
    }
    public function top(){
        return view('index_top');
    }
    public function success(){
        return view('success');
    }
}
?>