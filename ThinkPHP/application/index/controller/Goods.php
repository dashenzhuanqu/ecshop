<?php
namespace app\index\controller;
use app\index\model\Attribute;
use think\Controller;
use think\Request;
use think\db\Query;
use think\Db;
use app\index\model\Good;
use app\index\model\Brand;
use app\index\model\Comment;
use app\index\model\Areply;
use app\index\model\Classify;
use app\index\model\Goods_type;
use app\index\model\Goods_trash;
class Goods extends Controller
{
    //商品列表
    public function goods(){
        $request = Request::instance();
        $search = $request->get('search');
        $info_type = $request->get('info_type');
        $cat_id = $request->get('cat_id');
        $b_id = $request->get('b_id');
        $is_put = $request->get('is_put');
        $where = [];
        if (!empty($info_type))
        if (($info_type == 'is_best')) {
            $where['is_best'] = 1;
        } else if ($info_type == 'is_new') {
            $where['is_new'] = 1;
        } else if ($info_type == 'is_hot') {
            $where['is_hot'] = 1;
        }
        if(!empty($cat_id)){
            $where['cat_id']=$cat_id;
        }
        if(!empty($b_id)){
            $where['b_id']=$b_id;
        }
        if(!empty($is_put)){
            $where['is_put']=$is_put;
        }
        if ($search) {
            $where['goods_name']= ["like","%$search%"];
        }
        $model=new Good();
<<<<<<< HEAD
        $data=$model->where($where)->where('is_show',1)->where('is_delete',1)->paginate(['query'=>Request::instance()->param()]);
=======
>>>>>>> f1ddab25b5b29e067f0eb7694ade5f2acf9b861b
        $data=$model->where($where)->where('is_delete',1)->paginate(['query'=>Request::instance()->param()]
        );
        $cate=new Classify();
        $res=$cate->getPathList("cat_id");
        $arr=Db::table('brand')->select();
//        var_dump($data);die;
        return $this->fetch('goods_list',['data'=>$data,'arr'=>$arr,'res'=>$res]);
    }
    //批量删除
    public function goods_pishan(){
        $g_id = input('get.g_id');
        $res = Db::table('good')->where("g_id in($g_id)")->update(["is_show" => '0']);
        if($res){
            $arr['msg'] = 1;
            $arr['data'] = "$g_id";
            // $arr['msg'] = '成功';
        }else{
            $arr['msg'] = 0;
            $arr['data'] = '"$g_id"';
            // $arr['msg'] = '失败';
        }

        echo json_encode($arr);
    }

    //商品列表即点即改
    public function goods_show(){
        $g_id = input('get.g_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("good")->where("g_id",$g_id)->update(["is_put"=>'2']);
        }else{
            $res = Db("good")->where("g_id",$g_id)->update(["is_put"=>'1']);
        }
        if($res){
            $arr['status'] = 2;
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
    //商品添加
    public function goods_add(){
        $cate=new Classify();
        $res=$cate->getPathList("cat_id");
        $add=Db::table('good')->select();
        $data=Db::table('brand')->select();
//        var_dump($data);die;
        return $this->fetch('goods_add',['data'=>$data,'add'=>$add,'res'=>$res]);
    }
    public function goods_adds(){
        //通用信息
        $arr['goods_name']=input('post.goods_name');
        $arr['goods_art']=rand('10000','99999');
        $arr['cat_id']=input('post.cat_id');
        $arr['b_id']=input('post.b_id');
        $arr['goods_price']=input('post.goods_price');
        $arr['mall_price']=input('post.mall_price');
        $arr['vip_price']=input('post.vip_price');
        $arr['add_time']=input('post.add_time');
        $arr['end_time']=input('post.end_time');
        $arr['goods_img']=$this->upload();
        //其他信息
        $arr['goods_weight']=input('post.goods_weight');
        $arr['suk']=input('post.suk');
        $arr['is_best']=input('post.is_best');
        $arr['is_new']=input('post.is_new');
        $arr['is_hot']=input('post.is_hot');
        $arr['is_put']=input('post.is_put');
        $arr['is_alone_sale']=input('post.is_alone_sale');
        $arr['is_shipping']=input('post.is_shipping');
        $arr['keywords']=input('post.keywords');
        $arr['goods_brief']=input('post.goods_brief');
        $arr['seller_note']=input('post.seller_note');
//        var_dump($arr);
        $db=new Good();
        $res=$db->inserts($arr);
        if($res) {
            echo "<script>alert('上传成功');location.href='goods_list'</script>";
        }else{
            echo "<script>alert('上传失败');location.href='goods_add'</script>";
        }
    }
    //商品上传
    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('goods_img');
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
    //编辑商品信息
    public function goods_a(){
        $g_id=input('post.g_id');
        $cate=new Classify();
        $res=$cate->getPathList("cat_id");
        $data=Db::table('brand')->select();
        $arr=Db::table('good')->find($g_id);
        return $this->fetch('goods',['data'=>$data,'arr'=>$arr,'res'=>$res]);
    }
    public function goods_upd(){
        $g_id=$_POST['g_id'];
//        var_dump($b_id);die;
        $request = Request::instance()->post();
        $request['goods_img']=$this->upload();
        $db=new Good();
        $res=$db->upd($request,$g_id);
        if($res) {
            echo "<script>alert('修改成功');location.href='goods_list'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='goods'</script>";
        }
    }
    //复制商品信息
    public function coty(){
        return view('coty');
    }
    //添加商品分类
    public function category_add(){
            $cate = new Classify();
            if(request()->isPost()){
                $data['cat_name'] = input('post.cat_name');
                $data['parent_id'] = input('post.parent_id');
                $data['is_show'] = input('post.is_show');
                $data['is_nav'] = input('post.is_nav');
                $data['cat_desc'] = input('post.cat_desc');
                $data['path'] = input('post.path');
                $re = $cate->addData($data);
                if($re){
                    $this->redirect('goods/category_list');
                }else{
                    $this->error('添加失败');
                }
            }else{
                $cate = $cate->getPathList("cat_id");
//                $this->assign('cate',$cate);
                return $this->fetch('category_add',['cate'=>$cate]);
            }
        }
        public function cate_del(){
            $cat_id=input("get.id");
            //查询是否有子集
            $res=Db("classify")->where('parent_id',$cat_id)->select();
            if (!empty($res)){
                $arr=[
                    'code' => 0,
                    'msg' => '有子集,无法删除'
                ];

            }else{
                $result=Db("classify")->where('cat_id',$cat_id)->delete();
                $arr=[
                    'code' => 0,
                    'msg' => '删除成功'
                ];
            }
            echo json_encode($arr);
        }
    //分类展示
    public function category_list(){
        $classify = new Classify();
        $arr =$classify->shows();
        $cate=new Classify();
        $res=$cate->getPathList("cat_id");
//        var_dump($arr);die;
        return $this->fetch('category_list',['arr' => $arr,'arr'=>$res]);
    }
    //分类即点即改
    public function category_shows(){
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_nav"=>'0']);
        }else{
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_nav"=>'1']);
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
    //转移商品
    public function category_move(){
        $db=new Classify();
        $cate = $db->getPathList("cat_id");
//                $this->assign('cate',$cate);
        return $this->fetch('category_move',['cate'=>$cate]);
    }
    public function category_upds(){
        $cat_id=$_POST['cat_id'];
        $parent_id=input('post.parent_id');
        $cate=new Classify();
        $cate = $cate->getPathList("cat_id");
//                $this->assign('cate',$cate);
        if($cate) {
            echo "<script>alert('修改成功');location.href='category_list'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='category_move'</script>";
        }
    }
    //编辑商品分类
    public function category_edit(){
            $id=$_GET['id'];
            $goods = new Classify();
            $arr = $goods->find($id);
            return $this->fetch('category_edit',['arr' => $arr]);
    }

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
    /**
     * 商品评论列表
     */
    public function comment_manage_list(){
//        $id = input('get.comment_id');
        $comment = new Comment();
        $arr = $comment->cha1();
        return $this->fetch('comment_manage_list',['data' => $arr]);
    }

    public function comment_manage(){
        $id = input('get.comment_id');
//        print_r($id);die;
        $comment = new Comment();
        $arr = $comment->cha($id);
//        print_r($arr);die;
        return $this->fetch('comment_message',['data' => $arr]);
    }
/**
 * 回复
*/
    public function comment(){
        $reply_message = input('post.areply_message');
//        print_r($reply_message);
        $model = model('areply')->jia($reply_message);
        if($model){
            echo "成功";
        }else{
            echo "失败";
        }
    }


    //商品品牌列表
    public function brand_list(){
//        $brand = new Brand;
//        $arr = $brand->selects();
//        return $this->fetch('brand_list',['arr' => $arr]);
//        $request =request::instance();
//        $search = $request->post('search');
        $search=input("get.search");
        $where=[];
        if(!empty($search)){
            $where['brand_name']=["like","%$search%"];
        }
//        $where = "1 = 1";
//        if ($search) {
//            $where .= " and brand_name like '%$search%'";
//        }
        $data=Db::table('brand')->where($where)->paginate(['query'=>Request::instance()->param()]);
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
            echo "<script>alert('上传成功');location.href='brand_list'</script>";
        }else{
            echo "<script>alert('上传失败');location.href='brand_add'</script>";
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
    //商品品牌即点即改
    public function brand_change_name(){
        $id = input('get.id');
        $brand_name = input('get.brand_name');
        $res = Db("brand")->where("b_id",$id)->update(["brand_name"=>$brand_name]);
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

    //商品类型列表
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
    //新建商品类型
    public function goods_type_add(){
        return view('goods_type_add');
    }
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
        $arr = Db::table('attribute')->join('goods_type','attribute.t_id=goods_type.t_id')->paginate();
        $res = Db::table('goods_type')->select();
// 把分页数据赋值给模板变量list
//        $this->assign('list', $list);
//// 渲染模板输出
//        return $this->fetch();
//        $arr=Db::table('attribute')->join('goods_type','attribute.t_id=goods_type.t_id')->select();
        return view('attribute_list',['arr'=>$arr,'res'=>$res]);
    }
    public function attribute_lists(){
        $id=input("get.id");
        $arr = Db::table('attribute')->where("attribute.t_id=$id")->join('goods_type','attribute.t_id=goods_type.t_id')->paginate();
        $res = Db::table('goods_type')->select();
        return $this->fetch('attribute_list',['arr'=>$arr,'res'=>$res]);
    }
    //属性添加
    public function addattr(){
        $res=Db::table('goods_type')->select();
        return $this->fetch('addattr',['arr'=>$res]);
    }
    public function addattr_do(){
        $data=input('post.');
        $res=Db::table('attribute')->insert($data);
        if($res){
            echo "<script>alert('添加成功');location.href='attribute_list'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='addattr'</script>";
        }
    }
    //回复评论
    public function comment_manage_reply(){
        return view('comment_manage_reply');
    }
    //编辑属性
    public function attribute_edit(){
        $id=$_GET['id'];
        $res=Db::table('goods_type')->select();
        $arr=Db::table('attribute')->find($id);
        return $this->fetch('attribute_edit',['arr' => $arr,'res'=>$res]);
    }
    public function attribute_upd(){
        $attr_id=$_POST['attr_id'];
//        var_dump($attr_id);
        $request = Request::instance()->post();
        $db=new Attribute();
        $res=$db->upd($request,$attr_id);
        if($res) {
            echo "<script>alert('修改成功');location.href='attribute_list'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='attribute_upd'</script>";
        }
    }
    public function attribute_del(){
        $id=input('get.id');
        $res=Db::table("attribute")->delete($id);
        if($res){
            echo "<script>alert('删除成功');location.href='attribute_list'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='attribute_list'</script>";
        }
    }
    //商品回收站
    public function goods_trash(){
        $request =Request::instance();
        $search = $request->post('search');
        $where = "1 = 1";
        if ($search) {
            $where .= " and goods_name like '%$search%'";
        }
//        var_dump($search);die;
        $data=Db::table('good')->where($where)->where('is_delete',0)->paginate(['query'=>Request::instance()->param()]);
//        var_dump($data);die;
        return $this->fetch('goods_trash',['list'=>$data]);
    }
    //回收站移除
    public function goods_trash_del(){
        $id=$_GET['id'];
        $db=new Goods();
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
            $res = Db("good")->where("g_id",$g_id)->update(["is_delete"=>'1']);
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




}