<?php
namespace app\index\controller;
use app\index\model\Moneytype;
use think\Controller;
use think\Request;
use think\Db;
class Money extends Controller{

    /**
     * 红包展示
    **/
    public function money(){
        $list = Db::name('moneytype')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('arr', $list);
        // 渲染模板输出
        return $this->fetch('money');
    }

    public function money_add(){
        return $this ->fetch('money_add');
    }

    public function money_insert(){
        $request = Request::instance()->post();
        $db=new Moneytype();
        $data=$db->jia($request);
        if($data){
            return $this ->fetch('success');
        }else{
            echo "网络异常";
        }
    }

    public function money_delete(){
        $type_id = input('get.type_id');
//        print_r($type_id);
        $data = model('moneytype')->shan($type_id);
        if($data){
            $list = Db::name('moneytype')->paginate(5);
            $this->assign('arr', $list);
            return $this->fetch('success');
        }
    }

    public function money_select(){
        $type_id = input('get.type_id');
//        print_r($type_id);
//        $data = model('moneytype')->select($type_id);
    }
}