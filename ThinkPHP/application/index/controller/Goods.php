<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\Good;
use app\index\model\Brand;
class Goods extends Controller
{
    public function goods(){
        $goods = new Good;
        $arr = $goods->show();
        return $this->fetch('goods_list',['arr' => $arr]);
    }
    public function goods_add(){
        return view('goods_add');
    }
    public function category_list(){
        return view('category_list');
    }
    public function category_add(){
        return view('category_add');
    }
    public function comment_manage_list(){
        return view('comment_manage_list');
    }
    public function brand_list(){
        $goods = new Brand;
        $arr = $goods->select();
        return $this->fetch('brand_list',['arr' => $arr]);
    }
    public function brand_add(){
        return view('brand_add');
    }
    public function brand_adds(){
        $request = Request::instance()->post();
        $request['brand_img']=$this->upload();
        $db=new Brand();
//        print_r($request);die;
        $res=$db->inserts($request);
        if($res) {
            echo "<script>alert('上传成功');location.href='goods/brand_list'</script>";
        }else{
            echo "<script>alert('上传失败');location.href='goods/brand_add'</script>";
        }
    }
    public function upload(){
       // 获取表单上传文件 例如上传了001.jpg
       $file = request()->file('brand_img');
       // 移动到框架应用根目录/public/uploads/ 目录下
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       if($info){
                      // 成功上传后 获取上传信息
          // 输出 jpg
//           echo $info->getExtension();
         // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
         return $info->getSaveName();
          // 输出 42a79759f284b767dfcb2a0197904287.jpg
//           echo $info->getFilename();
        }else{
                      // 上传失败获取错误信息
           return $file->getError();
        }
    }

    public function goods_type_manage(){
        return view('goods_type_manage');
    }
    public function goods_type_add(){
        return view('goods_type_add');
    }
    public function goods_trash(){
    return view('goods_trash');
    }
    public function goods_a(){
        return view('goods');
    }
    public function coty(){
        return view('coty');
    }

}