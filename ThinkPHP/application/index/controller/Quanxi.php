<?php
namespace app\index\controller;
<<<<<<< HEAD
use think\Controller;
class Quanxi extends Controller{
    public function admin_logs(){
        return view('admin_logs');
    }
    public function agency(){
=======

use think\Controller;
class Quanxi extends Controller
{
    public function admin_logs()
    {
        return view('admin_logs');
    }
    public function agency()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        $data = Db('agency')->select();
        // var_dump($data);
        $this->assign('list',$data);
        return view('agency');
    }
<<<<<<< HEAD
    public function agency_edit(){
=======
    public function agency_edit()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
<<<<<<< HEAD
    public function agency_add(){
=======
    public function agency_add()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
<<<<<<< HEAD
    public function privilege(){
=======
    public function privilege()
    {
        
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        $data =Db('admin')->select();
        // var_dump($data);die;
        $this->assign('list', $data);
        return $this->fetch('privilege');
    }
<<<<<<< HEAD
    public function privilege_add(){
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
=======
    public function privilege_add()
    {
        
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
 
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
            $data = [       //接受传递的参数
                'admin_name' => input('user_name'),
                'admin_email' => input('email'),
                'admin_pwd' => md5(input('password')),
                'date_time'=> date("Y-m-d H:i:s",time()),
            ];
<<<<<<< HEAD
=======
            
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        /*  Db('表名') 数据库助手函数*/
            if(Db('admin') -> insert($data)){       //添加数据
                return $this->success('添加成功',"index/Quanxi/privilege"); //成功后跳转  lst 界面
            }else{
                return $this->error('添加管理员失败');
            }
            return;
        
        }
<<<<<<< HEAD
        return view('privilege_add');
    }
    public function privilege_edit(){
=======

        return view('privilege_add');
    }
    public function privilege_edit()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        $id = input('id');
        // echo $id;exit;
        $data =Db('admin')->where('admin_id='.$id)->select();
        $this->assign('list', $data);       
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
<<<<<<< HEAD
=======
 
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
            $data = [       //接受传递的参数
                'admin_name' => input('user_name'),
                'admin_email' => input('email'),
                'admin_pwd' => md5(input('password')),
                // 'date_time'=> date("Y-m-d H:i:s",time()),
            ];
<<<<<<< HEAD
=======
            
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        /*  Db('表名') 数据库助手函数*/
            if(Db('admin')->where('admin_id='.$id)->update($data)){     //添加数据
                return $this->success('修改管理员成功',"index/Quanxi/privilege");  //成功后跳转  lst 界面
            }else{
                return $this->error('修改管理员失败');
            }
            return;
<<<<<<< HEAD
=======
        
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        }
        return $this->fetch('privilege_edit');
    }

<<<<<<< HEAD
    public function role(){
=======
    public function role()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        $data =Db('role')->select();
        // var_dump($data);die;
        $this->assign('list', $data);
        return view('role');
    }
<<<<<<< HEAD
    public function role_add(){
=======
    public function role_add()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
    public function role_edit(){
        $id = input('id');
        // echo $id;exit;
        $data =Db('role')->where('role_id='.$id)->select();
        $this->assign('list', $data);       
        if(request()->isPost()){
//          dump(input('post.')); //打印接收到的参数
            $data = input('post.');
<<<<<<< HEAD
=======
            
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
    
<<<<<<< HEAD
    public function suppliers(){
=======
    public function suppliers()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        $data =Db('suppliers')->select();
        // var_dump($data);die;
        $this->assign('list', $data);
        return view('suppliers');
    }
<<<<<<< HEAD
    public function suppliers_add(){
=======
    public function suppliers_add()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
<<<<<<< HEAD
    public function suppliers_edit(){
=======
    public function suppliers_edit()
    {
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
<<<<<<< HEAD
=======
            
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        /*  Db('表名') 数据库助手函数*/
            if(Db('suppliers')->where('suppliers_id='.$id)->update($data)){     //添加数据
                return $this->success('修改供货商成功',"index/Quanxi/suppliers");  //成功后跳转  lst 界面
            }else{
                return $this->error('修改供货商失败');
            }
<<<<<<< HEAD
            return;
=======
            return;     
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
        }
        return view('suppliers_edit');
    }
}
