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
class Login extends Controller{
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
    public function login_do(){
        $request = Request::instance();
        $post = $request->post();
        $code = 
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
    /*public function verify()
    {
        $captcha = new Captcha();
        return $captcha->entry();   
    }
    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串，$id多个验证码标识
    function check_verify($code, $id = '')
    {
        $captcha = new Captcha();
        return $captcha->check($code, $id);
    }*/
    //退出
    public function privilege_logout(){
        session(null);//退出清空session
        return $this->success('退出成功',url('login'));//跳转到登录页面
    }
}