<?php 

namespace app\index\controller;

use think\Controller;
use think\Request;
class Common extends Controller 
{
	protected $user_id = null;

	public function __initialize()
	{
	
	}

	public function is_Login()
	{
		return $this->user_id = 1;
	}
}