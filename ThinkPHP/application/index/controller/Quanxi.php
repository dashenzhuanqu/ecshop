<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
class Quanxi extends Controller
{
    public function admin_logs()
    {
        $list = Db::name("admin_log")->paginate(5);
        $this->assign('list',$list);
        return $this->fetch('admin_logs');
    } 
    //办事处列表
    
    public function agency()
    {
        //模板方面
       // $data = Db('agency')->select();
        
        // $this->assign('list',$data);
       

        $list = Db::name('agency')->paginate(5);
        $this->assign('list', $list);
        return $this->fetch('agency');
    }

    //修改办事处列表
    public function agency_edit()
    {
        $id = input('id');
        // echo $id;exit;
        $data = Db('agency')->where('agency_id='.$id)->select();
        $this->assign('list', $data);       
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
 
            $data = [       //接受传递的参数
                'agency_name' => input('agency_name'),
                'agency_desc' => input('agency_desc'),
            ];
            
        /*  Db('表名') 数据库助手函数*/
            if(Db('agency')->where('agency_id='.$id)->update($data)){       //添加数据
                return $this->success('修改办事处成功',"index/Quanxi/agency"); //成功后跳转  lst 界面
            }else{
                return $this->error('修改办事处失败');
            }
            return;
        
        }
        return view('agency_edit');
    }
    //添加办事处列表
    public function agency_add()
    {
        if(request()->isPost()){ 
            $data = [       //接受传递的参数
                'agency_name' => input('agency_name'),
                'agency_desc' => input('agency_desc'),
            ];
            
        /*  Db('表名') 数据库助手函数*/
            if(Db('agency') -> insert($data)){      //添加数据
                return $this->success('添加办事处成功',"index/Quanxi/agency"); //成功后跳转  lst 界面
            }else{
                return $this->error('添加办事处失败');
            }
            return;
        
        }
        return view('agency_add');
    }

    /*管理员列表*/
    public function privilege()
    {
        
        $data =Db('admin')->select();
        // var_dump($data);die;
        $this->assign('list', $data);
        return $this->fetch('privilege');
    }
    public function privilege_add()
    {
        
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
 
            $data = [       //接受传递的参数
                'admin_name' => input('user_name'),
                'admin_email' => input('email'),
                'admin_pwd' => md5(input('password')),
                'date_time'=> date("Y-m-d H:i:s",time()),
            ];
            
        /*  Db('表名') 数据库助手函数*/
            if(Db('admin') -> insert($data)){       //添加数据
                return $this->success('添加成功',"index/Quanxi/privilege"); //成功后跳转  lst 界面
            }else{
                return $this->error('添加管理员失败');
            }
            return;
        
        }

        return view('privilege_add');
    }
    //修改管理员列表
    public function privilege_edit()
    {
        $id = input('id');
        // echo $id;exit;
        $data =Db('admin')->where('admin_id='.$id)->select();
        $this->assign('list', $data);       
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
 
            $data = [       //接受传递的参数
                'admin_name' => input('user_name'),
                'admin_email' => input('email'),
                'admin_pwd' => md5(input('password')),
                // 'date_time'=> date("Y-m-d H:i:s",time()),
            ];
            
        /*  Db('表名') 数据库助手函数*/
            if(Db('admin')->where('admin_id='.$id)->update($data)){     //添加数据
                return $this->success('修改管理员成功',"index/Quanxi/privilege");  //成功后跳转  lst 界面
            }else{
                return $this->error('修改管理员失败');
            }
            return;
        
        }
        return $this->fetch('privilege_edit');
    }

    //角色列表
    public function role()
    {
        $data =Db('role')->select();
        // var_dump($data);die;
        $this->assign('list', $data);
        return view('role');
    }
    //添加角色
    public function role_add()
    {
        if(request()->isPost()){
            $data = [
                'role_name'=>input('role_name'),
                'role_desc'=>input('role_desc'),
                'action_code'=>input('action_code'),
            ];
            // var_dump($data);die;
            if(Db('role') -> insert($data)){        //添加数据
                return $this->success('添加角色成功',"index/Quanxi/role");    //成功后跳转  lst 界面
            }else{
                return $this->error('添加角色失败');
            }
            return;
        }
        return view('role_add');
    }
    //修改角色
    public function role_edit(){
        $id = input('id');
        // echo $id;exit;
        $data =Db('role')->where('role_id='.$id)->select();
        $this->assign('list', $data);       
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
            $data = input('post.');
            
        /*  Db('表名') 数据库助手函数*/
            if(Db('role')->where('role_id='.$id)->update($data)){       //添加数据
                return $this->success('修改角色成功',"index/Quanxi/role");    //成功后跳转  lst 界面
            }else{
                return $this->error('修改角色失败');
            }
            return;     
        }
        return view('role_edit');
    }

    /*删除*/
    public function delete()
    {
        $role_id = input("id");
        // var_dump($role_id);die;
        $data =Db('role')->where('role_id='.$role_id)->delete();
        if ($data) {
           $this->success("删除成功","index/Quanxi/role");
        } else {
         $this->success("删除失败","index/Quanxi/role");
        }
    }
    //供货商列表
    public function suppliers()
    {
        $data =Db::name('suppliers')->paginate(5);
        // var_dump($data);die;
        $this->assign('list', $data);
        return $this->fetch('suppliers');
    }
    //添加供货商
    public function suppliers_add()
    {
        if(request()->isPost()){
            $data = [
                'suppliers_name'=>input('suppliers_name'),
                'suppliers_desc'=>input('suppliers_desc'),
            ];
            // var_dump($data);die;
            if(Db('suppliers') -> insert($data)){       //添加数据
                return $this->success('添加供货商成功',"index/Quanxi/suppliers");  //成功后跳转  lst 界面
            }else{
                return $this->error('添加供货商失败');
            }
            return;
        }
        return view('suppliers_add');
    }
    //修改供货商
    public function suppliers_edit()
    {
        $id = input('id');
        // echo $id;exit;
        $data =Db('suppliers')->where('suppliers_id='.$id)->select();
        $this->assign('list', $data);       
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
            $data = [
                'suppliers_name'=>input('suppliers_name'),
                'suppliers_desc'=>input('suppliers_desc'),
            ];
            
        /*  Db('表名') 数据库助手函数*/
            if(Db('suppliers')->where('suppliers_id='.$id)->update($data)){     //添加数据
                return $this->success('修改供货商成功',"index/Quanxi/suppliers");  //成功后跳转  lst 界面
            }else{
                return $this->error('修改供货商失败');
            }
            return;     
        }
        return view('suppliers_edit');
    }


    //修改供货商状态值
    public function ajaxChangeStatus()
    {
        $suppliers_id = input("get.suppliers_id");
        $is_check = input("get.is_check");
        if ($is_check == 1) {
            $edt_res = Db::name("suppliers")->where("suppliers_id",$suppliers_id)->update(["is_check"=>0]);
        } else {
            $edt_res = Db::name("suppliers")->where("suppliers_id",$suppliers_id)->update(["is_check"=>1]);
        }
       if ($edt_res) {
           
           $arr = array(
                'status'=>0,
                'msg'=>'成功',
                'data'=>''
            );
       } else {
        $arr = array(
                'status'=>0,
                'msg'=>'成功',
                'data'=>''
            );
       }
        return json_encode($arr);
    }
}
