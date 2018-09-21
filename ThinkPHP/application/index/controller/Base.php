<?php
<<<<<<< HEAD
=======
/**
 * Created by PhpStorm.
 * User: 琞
 * Date: 2018/9/15
 * Time: 11:23
 */

>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
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


>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
}