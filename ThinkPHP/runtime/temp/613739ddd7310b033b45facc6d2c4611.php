<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\category_list.html";i:1536825225;}*/ ?>
﻿<!-- $Id: category_list.htm 17019 2010-01-29 10:10:34Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../../../static/js/jquery-2.1.4.min.js"></script>
<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>

<script>
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var catname_empty = "分类名称不能为空!";
var unit_empyt = "数量单位不能为空!";
var is_leafcat = "您选定的分类是一个末级分类。\r\n新分类的上级分类不能是一个末级分类";
var not_leafcat = "您选定的分类不是一个末级分类。\r\n商品的分类转移只能在末级分类之间才可以操作。";
var filter_attr_not_repeated = "筛选属性不可重复";
var filter_attr_not_selected = "请选择筛选属性";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2F127.0.0.1%2FECShop_V4.0.0_UTF8_release0830%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
	    }
	}

	/*关闭按钮*/
	function btnCancel(item){
	  var par  = item.offsetParent;
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  par.style.display = 'none';
	  if(mask){mask.style.display = 'none';}
	  frame.src = '';
	}
</script>
</head>
<body>
<!--云起激活系统面板-->
<div class="panel-hint panel-icloud" id="panelCloud">
  <div class="panel-cross"><span onclick="btnCancel(this)">Ｘ</span></div>
  <div class="panel-title">
    <span class="tit">您需要激活系统</span>
    <p>用云起账号激活您的系统，享受物流查询，天工收银，手机短信等更多应用和服务</p>
  </div>
  <div class="panel-left">
    <span>没有云起账号吗？</span>
    <p>点击下列按钮一步完成注册激活！</p>
    <a href="https://account.shopex.cn/reg?refer=yunqi_ecshop" target="_blank" class="btn btn-yellow">免费注册云起账号</a>
  </div>
  <div class="panel-right">
    <h5 class="logo">云起</h5>
    <p>正在激活中</p>
    <iframe src="" frameborder="0" id="CFrame"></iframe>
    <div class="cloud-passw">
      <a target="_blank" href="https://account.shopex.cn/forget?">忘记密码？</a>
    </div>
  </div>
</div>
<!--云起激活系统面板-->
<!--遮罩-->
<div class="mask-black" id="CMask"></div>
<!--遮罩-->
<h1>
      <a class="btn btn-right" href="/index/goods/category_add">添加分类</a>
  
    <span class="action-span1"><a href="index/index/index_main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品分类 </span>
  <div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<!-- start ad position list -->
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>分类名称</th>
    <th>商品描述</th>
    <th>导航栏</th>
    <th>是否显示</th>
    <th>价格分级</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
  <?php foreach($arr as $k=>$v): ?>
    <tr align="center" class="0" id="0_1">
    <td align="left" class="first-cell" >
            <img src="../../../static/picture/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:0em" />
            <span><a href="<?php echo url('goods/goods'); ?>?id=<?php echo $v['cat_id']; ?>"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;├",substr_count($v['new'],"-")-1) ?>
              <?php echo $v['cat_name']; ?></a></span>
        </td>
    <td width="10%"><?php echo $v['cat_desc']; ?></td>
    <td width="10%">
      <?php if(in_array(($v['is_nav']), explode(',',"1"))): ?>
      <img src="../../../static/picture/yes.svg"  class="is_nav" id="<?php echo $v['cat_id']; ?>" value="<?php echo $v['is_nav']; ?>" width="20"/>
      <?php else: ?>
      <img src="../../../static/picture/no.svg"  class="is_nav" id="<?php echo $v['cat_id']; ?>" value="<?php echo $v['is_nav']; ?>"  width="20"/>
      <?php endif; ?></td>
    <td width="10%">
      <?php if(in_array(($v['is_show']), explode(',',"1"))): ?>
      <img src="../../../static/picture/yes.svg"  class="is_show" id="<?php echo $v['cat_id']; ?>" value="<?php echo $v['is_show']; ?>"  width="20"/>
      <?php else: ?>
      <img src="../../../static/picture/no.svg"  class="is_show" id="<?php echo $v['cat_id']; ?>" value="<?php echo $v['is_show']; ?>"  width="20"/>
      <?php endif; ?></td>
    <td><span><?php echo $v['parent_id']; ?></span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 1)"><?php echo $v['sort']; ?></span></td>
    <td width="24%" align="center">
      <a href="<?php echo url('goods/category_move'); ?>?id=<?php echo $v['cat_id']; ?>">转移商品</a> |
      <a href="<?php echo url('goods/category_edit'); ?>?id=<?php echo $v['cat_id']; ?>">编辑</a> |
      <a href="<?php echo url('goods/category_del'); ?>?id=<?php echo $v['cat_id']; ?>" title="移除">移除</a>
    </td>
  </tr>
  <?php endforeach; ?>
  </table>
</div>
</form>

<div id="footer">
共执行 2 个查询，用时 0.010499 秒，Gzip 已禁用，内存占用 1.386 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="static/picture/msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>

</body>
</html>
<script>
    $(document).on('click','.is_show',function(){
        var status = $(this).attr('value');
        var cat_id = $(this).attr('id');
        var obj = $(this);
        $.ajax({
            url:"<?php echo url('goods/category_lists'); ?>",
            data:{status:status,cat_id:cat_id},
            dataType:"json",
            success:function(res){
                if(res.status==1){
                    alert(res.msg);
                    return false;
                }else{
                    if(status==1){
                        obj.prop("src","../../../static/picture/no.svg");
                        obj.attr("value",0)
                    }else{
                        obj.prop("src","../../../static/picture/yes.svg");
                        obj.attr("value",1)
                    }
                }
            }
        })
    });
    $(document).on('click','.is_nav',function(){
        var status = $(this).attr('value');
        var cat_id = $(this).attr('id');
        var obj = $(this);
        $.ajax({
            url:"<?php echo url('goods/category_shows'); ?>",
            data:{status:status,cat_id:cat_id},
            dataType:"json",
            success:function(res){
                if(res.status==1){
                    alert(res.msg);
                    return false;
                }else{
                    if(status==1){
                        obj.prop("src","../../../static/picture/no.svg");
                        obj.attr("value",0)
                    }else{
                        obj.prop("src","../../../static/picture/yes.svg");
                        obj.attr("value",1)
                    }
                }
            }
        })
    });
</script>