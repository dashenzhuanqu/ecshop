<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;
 
class Base extends Controller
{
   //检查是否登录
	public function __construct()
	{
        $Session = Session::get('data');
        //print_r($Session);die;
		 if(empty($Session)){
			 $this->error('请先登录！',url('/index/login/login'));
		 }
	}
}