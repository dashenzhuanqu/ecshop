<?php
/**
 *  管理员页面
 */
namespace app\index\controller;

class Role
{	
	#添加管理员
    public function addrole()
    {
        return view('addrole');
    }
    #管理员列表
    public function role()
    {
        return view('role');
    }
}