<?php
<<<<<<< HEAD
=======
/**
 * Created by PhpStorm.
 * User: 琞
 * Date: 2018/9/15
 * Time: 11:23
 */

>>>>>>> 162eb45d3545835706421a1fa4def50ad00a1a9b
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
<<<<<<< HEAD
=======


>>>>>>> 162eb45d3545835706421a1fa4def50ad00a1a9b
}