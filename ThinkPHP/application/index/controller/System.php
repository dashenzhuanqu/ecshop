<?php 
namespace app\Index\controller;
use think\Controller;
use think\Db;
class System extends Controller{
	//商店设置
	public function system_list(){
		return $this->fetch();
	}
	//会员注册项设置
	public function system_hy(){
		return $this->fetch();
	}
	//会员注册项添加设置
	public function system_hy_do(){
		return $this->fetch();
	}
	//支付方式
	public function system_zc(){
		return $this->fetch();
	}
	//配送方式
	public function system_ps(){
		return $this->fetch();
	}
	//地区列表
	public function system_dq(){
        $res = Db::table('region')->where('region_type',0)->select();
        return view('system_dq',['res' =>$res]);
	}
	//地区列表数据再添加
	public function system_dq_do(){
	    $res = Db::table('region')->where('region_type',1)->select();
        return view('system_dq_add',['res' =>$res]);
	}
	//友情链接
	public function system_yq(){
		return $this->fetch();
	}
	//友情链接修改
	public function system_yq_upd(){
		return $this->fetch();
	}


}//结尾



