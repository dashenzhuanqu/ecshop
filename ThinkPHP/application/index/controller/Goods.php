<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\Good;
use app\index\model\Brand;
use app\index\model\Classify;
use app\index\model\Goods_type;
use app\index\model\Goods_trash;
class Goods extends Controller
{
    public function goods(){
        $request =Request::instance();
        $search = $request->post('search');
        $where = "1 = 1";
        if ($search) {
            $where .= " and goods_name like '%$search%'";
        }
//        var_dump($search);die;
        $model=new Good();
        $data=$model->where($where)->paginate(3);
//        var_dump($data);die;
        return $this->fetch('goods_list',['arr'=>$data]);
    }
    //商品列表即点即改
    public function goods_show(){
        $g_id = input('get.g_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("good")->where("g_id",$g_id)->update(["is_put"=>'0']);
        }else{
            $res = Db("good")->where("g_id",$g_id)->update(["is_put"=>'1']);
        }
        if($res){
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
    public function goods_shows(){
        $g_id = input('get.g_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("good")->where("g_id",$g_id)->update(["is_best"=>'0']);
        }else{
            $res = Db("good")->where("g_id",$g_id)->update(["is_best"=>'1']);
        }
        if($res){
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
    public function goods_lists(){
        $g_id=input('get.g_id');
        $status=input('get.status');
        if($status==1){
            $res=Db("good")->where('g_id',$g_id)->update(["is_hot"=>'0']);
        }else{
            $res=Db("good")->where('g_id',$g_id)->update(["is_hot"=>'1']);
        }
        if($res){
            $arr['status']=0;
            $arr['data']='';
            $arr['msg']='成功';
        }else{
            $arr['status']=1;
            $arr['data']='';
            $arr['msg']='失败';
        }
        echo json_encode($arr);
    }
    public function goods_list(){
        $g_id = input('get.g_id');
        $status = input('get.status');
        if($status==1){
            $res=Db("good")->where("g_id",$g_id)->update(["is_new"=>'0']);
        }else{
            $res=Db("good")->where("g_id",$g_id)->update(["is_new"=>'1']);
        }
        if($res){
            $arr['status']=0;
            $arr['data']='';
            $arr['msg']='成功';
        }else{
            $arr['status']=1;
            $arr['data']='';
            $arr['msg']="失败";
        }
        echo json_encode($arr);
    }
    public function goods_add(){
        return view('goods_add');
    }
    public function category_list(){
        $classify = new Classify();
        $arr =$classify->shows();
//        var_dump($arr);die;
        return $this->fetch('category_list',['arr' => $arr]);
    }
    //分类即点即改
    public function category_shows(){
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("classify")->where("cat_id",$cat_id)->update(["parent_id"=>'0']);
        }else{
            $res = Db("classify")->where("cat_id",$cat_id)->update(["parent_id"=>'1']);
        }
        if($res){
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
    public function category_lists(){
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_show"=>'0']);
        }else{
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_show"=>'1']);
        }
        if($res){
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
    public function category_add(){
        return view('category_add');
    }
<<<<<<< HEAD
    //商品分类删除
    public function category_del(){
        $cat_id=$_GET['id'];
//        var_dump($cat_id);die;
        $db=new Classify();
        $res=$db->del($cat_id);
        if($res){
            echo "<script>alert('删除成功');location.href='category_list'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='category_list'</script>";
        }
    }
    //用户评论
=======
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
    public function comment_manage_list(){
        return view('comment_manage_list');
    }
    public function brand_list(){
<<<<<<< HEAD
//        $brand = new Brand;
//        $arr = $brand->selects();
//        return $this->fetch('brand_list',['arr' => $arr]);
        $request =Request::instance();
        $search = $request->post('search');
        $where = "1 = 1";
        if ($search) {
            $where .= " and brand_name like '%$search%'";
        }
        $model=new Brand;
        $data=$model->where($where)->paginate(3);
        return $this->fetch('brand_list',['data'=>$data]);
    }
    //商品品牌及点击该
    public function brand_change_show(){
        $brand_id = input('get.brand_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("brand")->where("b_id",$brand_id)->update(["is_show"=>'0']);
        }else{
            $res = Db("brand")->where("b_id",$brand_id)->update(["is_show"=>'1']);
        }
        if($res){
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

    //添加商品品牌
=======
        $goods = new Brand;
        $arr = $goods->select();
        return $this->fetch('brand_list',['arr' => $arr]);
    }
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
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
            echo "<script>alert('上传成功');location.href='brand_list'</script>";
        }else{
            echo "<script>alert('上传失败');location.href='brand_add'</script>";
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
        $list = Db::name('goods_type')->paginate(3);
        // 把分页数据赋值给模板变量list
        $this->assign('arr', $list);
        // 渲染模板输出
        return $this->fetch();
//        $goods_type = new Goods_type();
//        $arr =$goods_type->selected();
//        return $this->fetch('goods_type_manage',['arr' => $arr]);
    }
    //商品类型即点即改
    public function goods_type_show(){
        $t_id = input('get.t_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("goods_type")->where("t_id",$t_id)->update(["is_new"=>'0']);
        }else{
            $res = Db("goods_type")->where("t_id",$t_id)->update(["is_new"=>'1']);
        }
        if($res){
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
    public function goods_type_add(){
        return view('goods_type_add');
    }
<<<<<<< HEAD
    public function goods_types(){
        $request = Request::instance()->post();
        $db=new Goods_type();
//        print_r($request);die;
        $res=$db->inserts($request);
        if($res) {
            echo "<script>alert('添加成功');location.href='goods_type_manage'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='goods_type_add'</script>";
        }
    }
    //删除商品类型
    public function goods_type_del(){
        $id=$_GET['id'];
        $db=new Goods_type();
        $res=$db->del($id);
        if($res){
            echo "<script>alert('删除成功');location.href='goods_type_manage'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='goods_type_manage'</script>";
        }
    }
    //修改商品类型
    public function goods_type_edit(){
        $id=$_GET['id'];
        $goods = new Goods_type();
        $arr = $goods->find($id);
        return $this->fetch('goods_type_edit',['arr' => $arr]);
    }
    //编辑商品类型
    public function goods_type_upd(){
        $t_id=$_POST['t_id'];
//        var_dump($b_id);die;
        $request = Request::instance()->post();
        $db=new Goods_type();
        $res=$db->upd($request,$t_id);
        if($res) {
            echo "<script>alert('修改成功');location.href='goods_type_manage'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='goods_type_upd'</script>";
        }
    }
    //商品属性展示
    public function attribute_list(){
        return view('attribute_list');
    }
    public function addattr(){
        return view('addattr');
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
=======
>>>>>>> caef6ce988b066b906a5933aa36a429782ee76f3
    public function goods_trash(){
        $request =Request::instance();
        $search = $request->post('search');
        $where = "1 = 1";
        if ($search) {
            $where .= " and goods_name like '%$search%'";
        }
//        var_dump($search);die;
        $model=new Goods_trash();
        $data=$model->where($where)->paginate(3);
//        var_dump($data);die;
        return $this->fetch('goods_trash',['list'=>$data]);
    }
    //
    public function goods_trash_del(){
        $id=$_GET['id'];
        $db=new Goods_trash();
        $res=$db->del($id);
        if($res){
            echo "<script>alert('删除成功');location.href='goods_trash'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='goods_trash'</script>";
        }
    }
    //商品回收站即点即改
    public function trash_do(){
        $g_id = input('get.g_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("good")->where("g_id",$g_id)->update(["is_delete"=>'0']);
        }else{
            $res = 0;
        }
        if($res){
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
    public function goods_a(){
        return view('goods');
    }
    public function coty(){
        return view('coty');
    }

}