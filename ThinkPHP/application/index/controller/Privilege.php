<?php
/**
 *  管理员页面
 */
namespace app\index\controller;
use think\Db;
class Privilege
{	
	#添加管理员
    public function addprivilege()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $data['addtime']= date("Y-m-d H:i:s",time());  
            $data['user_pwd'] = md5($data['user_pwd']);

            $add_data = Db::name('user')->insert($data);
            if ($add_data) {
                $res = [
                    'code'=>100,
                    'msg'=>'添加管理员成功'
                ];
            } else {
                 $res = [
                    'code'=>202,
                    'msg'=>'添加管理员失败'
                ]; 
            }
            return json_encode($res);
        }
        return view('addprivilege');
    }
    #管理员列表
    public function privilege()
    {
        return view('privilege');
    }

}