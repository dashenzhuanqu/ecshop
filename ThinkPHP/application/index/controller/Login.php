<?php
/**
 * Created by PhpStorm.
 * User: 琞
 * Date: 2018/9/7
 * Time: 9:28
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;

/**
 * Class Login
 * @package app\index\controller
 */
class Login extends Controller
{
   

    /**
     * @return \think\response\View
     */
    public function login()
    {
        return view('login');
    }

    /**
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function login_do()
    {
        $request = Request::instance();
        $post = $request->post();
        $pwd = md5($post['pwd']);
        $data = Db::table('login')->where('username',$post['username'])->select();
        //var_dump($post);die;
        if ($data){
            if ($data[0]['pwd'] != $pwd){
                return ['code'=>102,'message'=>'密码不正确'];
            }else{
                Session::set('data',$data[0]);
                return ['code'=>100,'message'=>'OK'];
            }
        }else{
            return ['code'=>101,'message'=>'帐号不正确'];
        }
    }

    //退出登录
    public function logout()
	{ 
	   session(null);
	   $this->success('登出成功！',url('/admin/login/index'));
	}
	
	   // 验证码检测
       public function check($code='')
       {
           if (!captcha_check($code)) {
               $this->error('验证码错误');
           } else {
               return true;
           }
       }
   


}