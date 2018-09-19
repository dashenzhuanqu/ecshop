<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Controller;
class User extends Controller
{
	//会员列表- 搜索
	public function user_list()
	{
		// $keywords = input("get.keywords");
		// return $keywords;die;
		$data = Db::name('users')->paginate(5);
		$this->assign("data",$data);
		return $this->fetch('user_list');
	}
	public function user_search()
	{
		$pay_points=input("get.pay_points");
		$rank_points=input("get.rank_points");
		$keyword = input("get.keyword");
		$where=[];
		if(!empty($pay_points)){
			$where['pay_points']=$pay_points;
		}
		if(!empty($rank_points)){
			$where['rank_points']=$rank_points;
		}
		if(!empty($keyword)){
			$where['user_name']=['like',"%$keyword%"];
		}
		$data = Db::table('users')->where($where)->paginate(['query'=>Request::instance()->param()]);
		$arr = $this->assign("data",$data);
		return $this->fetch('user_list');
	}
	public function del()
	{
		$user_id = input("get.user_id");
		// var_dump($user_id);
		$res = Db::name("users")->where("user_id=".$user_id)->delete();
		if ($res) {
			return $this->success("成功","index/user/user_list");
		 	
		} else {	
			return $this->error("错误操作","index/user/user_list");
		}	
	}
	public function user_upd()
	{
		return 111;
	}
	/*修改状态*/
	public function user_change_name(){
        $id = input('get.id');
        $status = input('get.status');
        $res = Db("users")->where("user_id",$id)->update(["status"=>$status]);
        if(empty($res)){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }
    /*会员编辑*/
    public function user_edit()
    {
    	// $user_id = input("get.user_id");
    	// var_dump($user_id);
    	return view("user_edit");
    }
	//添加会员
		public function user_add()
	{
		/** 
		 *
		*		<tr>
	    *<td class="label">会员等级:</td>
	    *<?php 
		* foreach ($rank_re as $key => $v) { ?>
		*<option value="<?php echo $v['rank_id']; ?>"><?php echo $v['rank_name']; ?></option>
		*<?php } ?>
		* 
		*<td><select name="user_rank">
		*
		*     <option value="0">非特殊等级</option>
		*    <option value="3">代销用户</option>    </select></td>
		*</tr>
		 *
		 * 
		 */
		if(request()->isPost())
		{
			$data = input("post.");
			$data_rs = Db::table("users")->insert($data);
			if($data_rs)
			{
				return $this->success("成功","index/user/user_list");
			} else {
				return $this->success("失败","index/user/user_add");
			}
		}
		return view('user_add');
	}
	//会员等级
		public function user_rank()
	{
		$res = Db::name("user_rank")->paginate(5);
		$this->assign("res",$res);
		return $this->fetch('user_rank');
	}
	public function user_change_special_rank()
	{
		$id = input("get.rank_id");
		// var_dump($id);
		$special_rank = input("get.special_rank");
		if($special_rank == 1)
		{
			$res = Db::table('user_rank')->where('rank_id', $id)->update(['special_rank' =>0]);
		} else {
			$res = Db::table('user_rank')->where('rank_id', $id)->update(['special_rank' =>1]);	
		}

		if ($res) {
			$arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
		} else {
			$arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
		}
		echo json_encode($arr);
	}
	public function ajaxChangePrice()
	{
		$id = input("get.rank_id");
		// var_dump($id);
		$show_price = input("get.show_price");
		if($show_price == 1)
		{
			$res = Db::table('user_rank')->where('rank_id', $id)->update(['show_price' =>0]);
		} else {
			$res = Db::table('user_rank')->where('rank_id', $id)->update(['show_price' =>1]);	
		}
		if ($res) {
			$arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
		} else {
			$arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
		}
		echo json_encode($arr);
	}
	//会员列表删除出
	public function delete()
	{
		$user_id = input("user_id");
		$del_res = Db("users")->where("user_id=".$user_id)->delete();
		if ($del_res) {
			$this->success("删除成功","index/User/user_list");
		}
		 $this->success("删除失败","index/User/user_list");
	}
	//会员整合
		public function integrate()
	{
		return view('integrate');
	}
	//会员留言
		public function user_msg()
	{
		// $sql=Db::field('.name,a.*')//截取表s的name列 和表a的全部
	 //    ->table(['表a'=>'a','表s'=>'s'])
	 //    ->where('a.name=s.id')//查询条件语句
	 //    ->select();
		$db = Db::name("msg_type");
		$data = $db->select();
		$this->assign("data",$data);
		$res = Db::name("user_msg")->paginate(5);
		$this->assign("res",$res);
		return $this->fetch('user_msg');
	}
	//充值和提现申请
		public function user_account()
	{
		return view('user_account');
	}
	//资金管理
		public function user_account_manage()
	{
		return view('user_account_manage');
	}
	//充值和提现申请  添加申请
	public function user_account_add()
	{
		return view("user_account_add");
	}
}