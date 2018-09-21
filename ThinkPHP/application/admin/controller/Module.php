<?php
namespace app\admin\controller;

use think\Controller;
use think\Session;
use think\Db;

class Module extends Controller
{
    public function header()
    {
        $data=Db::name('classify')->where('is_nav',1)->orderRaw('rand()')->select();
        $this->assign('data',$data);
        $username = Session::get('username');
        return $username;
    }
}