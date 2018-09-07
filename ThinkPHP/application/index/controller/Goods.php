<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\db\Query;
use think\Db;
use app\index\model\Good;
use app\index\model\Brand;
class Goods extends Controller
{
    //商品列表
    public function goods(){
        $goods = new Good;
        $arr = $goods->show();
        return $this->fetch('goods_list',['arr' => $arr]);
    }
    //商品添加
    public function goods_add(){
        return view('goods_add');
    }
    //编辑商品信息
    public function goods_a(){
        return view('goods');
    }
    //复制商品信息
    public function coty(){
        return view('coty');
    }
    //添加商品分类
    public function category_add(){
        return view('category_add');
    }
    //分类展示
    public function category_list(){
        return view('category_list');
    }
    //转移商品
    public function category_move(){
        return view('category_move');
    }
    //编辑商品分类
    public function category_edit(){
        return view('category_edit');
    }
    //用户评论
    public function comment_manage_list(){
        return view('comment_manage_list');
    }
    //商品品牌列表
    public function brand_list(){
//        $brand = new Brand;
//        $arr = $brand->selects();
//        return $this->fetch('brand_list',['arr' => $arr]);
        $request =Request::instance();
        $search = $request->post('search');
        $where = "1 = 1";
        if ($search) {
            $where .= " and brand_name like '%$search%'";
        }
//        var_dump($search);die;
        $model=new Brand;
        $data=$model->where($where)->paginate(3);
//        var_dump($data);die;
        return $this->fetch('brand_list',['data'=>$data]);
    }
    //添加商品品牌
    public function brand_add(){
        return view('brand_add');
    }
    //添加商品品牌
    public function brand_adds(){
        $request = Request::instance()->post();
        $request['brand_img']=$this->brand_upload();
        $db=new Brand();
//        print_r($request);die;
        $res=$db->inserts($request);
        if($res) {
            echo "<script>alert('上传成功');location.href='goods/brand_list'</script>";
        }else{
            echo "<script>alert('上传失败');location.href='goods/brand_add'</script>";
        }
    }
    //商品品牌上传
    public function brand_upload(){
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
    //编辑商品品牌
    public function brand_edit(){
        $id=$_GET['id'];
        $goods = new Brand;
        $arr = $goods->find($id);
        return $this->fetch('brand_edit',['arr' => $arr]);
    }
    //编辑商品品牌
    public function brand_upd(){
        $b_id=$_POST['b_id'];
//        var_dump($b_id);die;
        $request = Request::instance()->post();
        $request['brand_img']=$this->brand_upload();
        $db=new Brand();
        $res=$db->upd($request,$b_id);
        if($res) {
            echo "<script>alert('修改成功');location.href='brand_list'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='brand_upd'</script>";
        }
    }
    //商品品牌删除
    public function brand_del(){
        $id=$_GET['id'];
        $db=new Brand();
        $res=$db->del($id);
        if($res){
            echo "<script>alert('删除成功');location.href='brand_list'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='brand_list'</script>";
        }
    }
    //商品类型列表
    public function goods_type_manage(){
        return view('goods_type_manage');
    }
    //新建商品类型
    public function goods_type_add(){
        return view('goods_type_add');
    }
    //商品属性展示
    public function attribute_list(){
        return view('attribute_list');
    }
    //回复评论
    public function comment_manage_reply(){
        return view('comment_manage_reply');
    }
    //编辑属性
    public function attribute_edit(){
        return view('attribute_edit');
    }
    //商品回收站
    public function goods_trash(){
    return view('goods_trash');
    }
}