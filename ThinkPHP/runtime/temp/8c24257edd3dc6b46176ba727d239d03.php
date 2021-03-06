<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\goods_list.html";i:1537272463;}*/ ?>
﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" style="background-color: blue">
  <link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../../../static/js/jquery-2.1.4.min.js"></script>
<!--<script type="text/javascript" src="../../../static/js/transport.js"></script>-->
  <!--<script type="text/javascript" src="../../../static/js/common.js"></script>-->
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
var goods_name_not_null = "商品名称不能为空。";
var goods_cat_not_null = "商品分类必须选择。";
var category_cat_not_null = "分类名称不能为空";
var brand_cat_not_null = "品牌名称不能为空";
var goods_cat_not_leaf = "您选择的商品分类不是底级分类，请选择底级分类。";
var shop_price_not_null = "本店售价不能为空。";
var shop_price_not_number = "本店售价不是数值。";
var select_please = "请选择...";
var button_add = "添加";
var button_del = "删除";
var spec_value_not_null = "规格不能为空";
var spec_price_not_number = "加价不是数字";
var market_price_not_number = "市场价格不是数字";
var goods_number_not_int = "商品库存不是整数";
var warn_number_not_int = "库存警告不是整数";
var promote_not_lt = "促销开始日期不能大于结束日期";
var promote_start_not_null = "促销开始时间不能为空";
var promote_end_not_null = "促销结束时间不能为空";
var drop_img_confirm = "您确实要删除该图片吗？";
var batch_no_on_sale = "您确实要将选定的商品下架吗？";
var batch_trash_confirm = "您确实要把选中的商品放入回收站吗？";
var go_category_page = "本页数据将丢失，确认要去商品分类页添加分类吗？";
var go_brand_page = "本页数据将丢失，确认要去商品品牌页添加品牌吗？";
var volume_num_not_null = "请输入优惠数量";
var volume_num_not_number = "优惠数量不是数字";
var volume_price_not_null = "请输入优惠价格";
var volume_price_not_number = "优惠价格不是数字";
var cancel_color = "无样式";
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
      <a href="/index/goods/goods_add" class="btn btn-right btn-add-goods">添加新商品</a>
  <a class="btn btn-right" href="http://yunqi.shopex.cn/products/huodiantong" target="_blank">快速录入商品</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品列表 </span>
  <div style="clear:both"></div>
</h1>
<!--<script type="text/javascript" src="../../../static/js/utils.js"></script>-->
<!--<script type="text/javascript" src="../../../static/js/listtable.js"></script>-->
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="<?php echo url('goods/goods'); ?>" method="get">
        <!-- 分类 -->
    商品分类
    <select name="cat_id">
      <option value="0">所有分类</option>
      <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <option value="<?php echo $v['cat_id']; ?>" ><?php echo str_repeat("&nbsp;&nbsp;&nbsp;├",substr_count($v['new'],"-")-1) ?><?php echo $v['cat_name']; ?></option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <!-- 品牌 -->
    品牌
    <select name="b_id">
      <option value="0">所有品牌</option>
      <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <option value="<?php echo $v['b_id']; ?>"><?php echo $v['brand_name']; ?></option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <!-- 推荐 -->
    推荐类别
    <select name="info_type">
      <option value="0">全部</option>
      <option value="is_best">精品</option>
      <option value="is_new">新品</option>
      <option value="is_hot">热销</option>
      <!--<option value="is_promote">特价</option>-->
      <!--<option value="all_type">全部推荐</option>-->
    </select>
        <!-- 上架 -->
    上架状态
    <select name="is_put">
      <option value="">全部</option>
      <option value="1">上架</option>
      <option value="2">下架</option>
    </select>
    &nbsp;&nbsp; 关键字 <input type="text" name="search" size="25" />
    <button type="submit" class="btn"> 搜索 </button>
  </form>
</div>


<script>
  function searchGoods() {

    listTable.filter['cat_id'] = document.forms['searchForm'].elements['cat_id'].value;
    listTable.filter['brand_id'] = document.forms['searchForm'].elements['brand_id'].value;
    listTable.filter['intro_type'] = document.forms['searchForm'].elements['intro_type'].value;
      listTable.filter['is_on_sale'] = document.forms['searchForm'].elements['is_on_sale'].value;

    listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['page'] = 1;

    listTable.loadList();
  }
</script>
<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th class="checks"><input  class="ace" type="checkbox"></th>
    <th><a href="javascript:listTable.sort('g_id'); ">编号</a><img src="../../../static/picture/sort_desc.png"/></th>
    <th><a href="javascript:listTable.sort('goods_name'); ">商品名称</a></th>
    <th><a href="javascript:listTable.sort('goods_sn'); ">货号</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">价格</a></th>
    <th><a href="javascript:listTable.sort('is_on_sale'); ">上架</a></th>
    <th><a href="javascript:listTable.sort('is_best'); ">精品</a></th>
    <th><a href="javascript:listTable.sort('is_new'); ">新品</a></th>
    <th><a href="javascript:listTable.sort('is_hot'); ">热销</a></th>
    <th><a href="javascript:listTable.sort('sort_order'); ">推荐排序</a></th>
        <th><a href="javascript:listTable.sort('goods_number'); ">库存</a></th>
        <!--<th><a href="javascript:listTable.sort('virtual_sales'); ">虚拟销量</a></th>-->
    <th>操作</th>
  </tr>
  <?php foreach ($data as $k=>$v){?>
    <tr>
    <td><input type="checkbox" class ='box' name="box" alt="<?=$v['g_id']; ?>" /></td>
    <!--<td><input type="checkbox" name="checkboxes[]"></td>-->
    <td><?php echo $v['g_id']; ?></td>
    <td class="first-cell" name="<?php echo $v['goods_name']; ?>"><?php echo $v['goods_name']; ?></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 1)"><?php echo $v['goods_art']; ?></span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 1)"><?php echo $v['goods_price']; ?></span></td>
      <td>
        <?php if(in_array(($v['is_put']), explode(',',"1"))): ?>
        <img src="../../../static/picture/yes.svg" class="is_put" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_put']; ?>" width="20"/>
        <?php else: ?>
        <img src="../../../static/picture/no.svg" class="is_put" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_put']; ?>" width="20"/>
        <?php endif; ?>
      </td>
      <td>
        <?php if(in_array(($v['is_best']), explode(',',"1"))): ?>
        <img src="../../../static/picture/yes.svg" class="is_best" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_best']; ?>" width="20"/>
        <?php else: ?>
        <img src="../../../static/picture/no.svg" class="is_best" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_best']; ?>" width="20"/>
        <?php endif; ?>
      </td>
      <td>
        <?php if(in_array(($v['is_new']), explode(',',"1"))): ?>
        <img src="../../../static/picture/yes.svg" class="is_new" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_new']; ?>" width="20" />
        <?php else: ?>
        <img src="../../../static/picture/no.svg" class="is_new" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_new']; ?>" width="20" />
        <?php endif; ?>
      </td>
      <td>
        <?php if(in_array(($v['is_hot']), explode(',',"1"))): ?>
        <img src="../../../static/picture/yes.svg" class="is_hot" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_hot']; ?>" width="20"/>
        <?php else: ?>
        <img src="../../../static/picture/no.svg" class="is_hot" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_hot']; ?>" width="20"/>
        <?php endif; ?>
      </td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 1)"><?php echo $v['sork']; ?></span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 1)"><?php echo $v['suk']; ?></span></td>
        <!--<td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 1)">1</span></td>-->
    <td align="center">
      <a href="../goods.php?id=1" target="_blank" title="查看">查看</a>
      <a href="/index/goods/goods_a" title="编辑">编辑</a>
      <a href="/index/goods/coty" title="复制">复制</a>
      <a href="javascript:;" class="is_delete" id="<?php echo $v['g_id']; ?>" value="<?php echo $v['is_delete']; ?>" title="回收站">回收站</a>
      <img src="../../../static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
  <?php } ?>
  </table>
    <?php echo $data->render(); ?>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td style="text-align: left">
      <input type="hidden" name="act" value="batch" />
      <input type="button" class="quan" value="全选">
      <input type="button" class="quanbu" value="全不选">
      <input type="button" class="fan" value="反选">
      <input type="button" class="pishan" value="批删">
      <!--<select name="type" id="selAction" onchange="changeAction()">-->
        <!--<option value="">请选择...</option>-->
        <!--<option value="trash">回收站</option>-->
        <!--<option value="on_sale">上架</option>-->
        <!--<option value="not_on_sale">下架</option>-->
        <!--<option value="best">精品</option>-->
        <!--<option value="not_best">取消精品</option>-->
        <!--<option value="new">新品</option>-->
        <!--<option value="not_new">取消新品</option>-->
        <!--<option value="hot">热销</option>-->
        <!--<option value="not_hot">取消热销</option>-->
        <!--<option value="move_to">转移到分类</option>-->
      <!--</select>-->
      <!--<select name="target_cat" style="display:none">-->
        <!--<option value="0">请选择...</option><option value="1" >饮料</option><option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;学习</option>      </select>-->
        
            <!--<input type="hidden" name="extension_code" value="" />-->
            <!--<button class="btn" type="submit" id="btnSubmit" disabled="true"> 确定 </button>-->
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!--<div id="turn-page">-->
  <!--<span id="pageCurrent">1</span> / <span id="totalPages">1</span>-->
  <!--页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">-->
  <!--条记录，总共 <span id="totalRecords">1</span>-->
  <!--条记录-->
  <!--<span id="page-link">-->
    <!--<a href="javascript:listTable.gotoPageFirst()">第一页</a>-->
    <!--<a href="javascript:listTable.gotoPagePrev()">上一页</a>-->
    <!--<a href="javascript:listTable.gotoPageNext()">下一页</a>-->
    <!--<a href="javascript:listTable.gotoPageLast()">最末页</a>-->
    <!--<select id="gotoPage" onchange="listTable.gotoPage(this.value)">-->
      <!--<option value='1'>1</option>    </select>-->
  <!--</span>-->
<!--</div>-->
    <!--</td>-->
  <!--</tr>-->
</table>
</div>
</form>
<script type="text/javascript">
  listTable.recordCount = 1;
  listTable.pageCount = 1;

    listTable.filter.cat_id = '0';
    listTable.filter.intro_type = '';
    listTable.filter.is_promote = '0';
    listTable.filter.stock_warning = '0';
    listTable.filter.brand_id = '0';
    listTable.filter.keyword = '';
    listTable.filter.suppliers_id = '';
    listTable.filter.is_on_sale = '';
    listTable.filter.sort_by = 'goods_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.extension_code = '';
    listTable.filter.is_delete = '0';
    listTable.filter.real_goods = '1';
    listTable.filter.record_count = '1';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
  
  
//  onload = function()
//  {
//    startCheckOrder(); // 开始检查订单
//    document.forms['listForm'].reset();
//  }

  /**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'trash')
      {
          return confirm(batch_trash_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }

  function changeAction()
  {
      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';
			
			
      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

</script>
<div id="footer">
共执行 8 个查询，用时 0.029002 秒，Gzip 已禁用，内存占用 2.072 MB<br />
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

<!--
<embed src="static/flash/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="../../../images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background-color: #eee;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

</script>
</body>
</html>
<script>
     $(document).on('click','.is_put',function(){
        var status = $(this).attr('value');
//        alert(status)
        var g_id = $(this).attr('id');
//        alert(g_id)
        var obj = $(this);
        $.ajax({
            url:"<?php echo url('goods/goods_show'); ?>",
            data:{status:status,g_id:g_id},
            dataType:"json",
            success:function(res){
                if(res.status==1){
                    alert(res.msg);
                    return false;
                }else{
                    if(status==1){
                        obj.prop("src","../../../static/picture/no.svg");
                        obj.attr("value",2)
                    }else{
                        obj.prop("src","../../../static/picture/yes.svg");
                        obj.attr("value",1)
                    }
                }
            }
        })
    });
     $(document).on('click','.is_best',function(){
         var status = $(this).attr('value');
//        alert(status)
         var g_id = $(this).attr('id');
//        alert(g_id)
         var obj = $(this);
         $.ajax({
             url:"<?php echo url('goods/goods_shows'); ?>",
             data:{status:status,g_id:g_id},
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
  $(document).on('click','.is_new',function(){
      var g_id=$(this).attr('id');
      var status=$(this).attr('value');
      var obj=$(this);
      $.ajax({
          url:"<?php echo url('goods/goods_list'); ?>",
          data:{status:status,g_id:g_id},
          dataType:"json",
          success:function(res){
              if(res.status==1){
                    alert(res.msg);
                  return false;
              }else{
                  if(status==1){
                      obj.prop("src","../../../static/picture/no.svg");
                      obj.attr("value",0);
                  }else{
                      obj.prop("src","../../../static/picture/yes.svg");
                      obj.attr("value",1);
                  }
              }
          }
      })
  });
  $(document).on('click','.is_hot',function(){
      var g_id=$(this).attr('id');
      var status=$(this).attr('value');
      var obj=$(this);
      $.ajax({
          url:"<?php echo url('goods/goods_lists'); ?>",
          data:{g_id:g_id,status:status},
          dataType:"json",
          success:function(res){
              if(res.status==1){
                  alert(res.msg);
                  return false;
              }else{
                  if(status==1){
                      obj.prop("src","../../../static/picture/no.svg");
                      obj.attr("value",0);
                  }else{
                      obj.prop("src","../../../static/picture/yes.svg");
                      obj.attr("value",1);
                  }
              }
          }
      })
  });
     $(document).on('click','.is_delete',function(){
         var r=confirm("你确定要放入回收站吗？");
         if(!r){return};
         var g_id=$(this).attr('id');
         var status=$(this).attr('value');
         var obj=$(this);
         $.ajax({
             url:"<?php echo url('goods/trash_do'); ?>",
             data:{g_id:g_id,status:status},
             dataType:"json",
             success:function(res){
//                 if(res.status==1){
//                     alert(res.msg);
//                     return false;
//                 }else{
                     if(status==1){
                        alert('放入回收站成功');
//                        obj.parents().remove();
                         history.go(0)
                     }else{
                        alert("放入回收站失败");
                     }
                 }
//             }
         })
     })
     //全选
     $('.ace').click(function(){
         var box=document.getElementsByName('box');
         for(var i=0;i<=box.length;i++){
             // box[i].checked=true;
             if( box[i].checked==true){
                 box[i].checked=false;
             }else{
                 box[i].checked=true;
             }
         }
     });
     //全不选
     $('.quanbu').click(function(){
         var box=document.getElementsByName('box');

         for(var i=0;i<=box.length;i++){
             box[i].checked=false;

         }
     });
     //全选123
     $('.quan').click(function(){
         var box=document.getElementsByName('box');
         for(var i=0;i<=box.length;i++){
             box[i].checked=true;
         }
     });
     //反选
     $('.fan').click(function(){
         var box=document.getElementsByName('box');
         for(var i=0;i<=box.length;i++){
             if( box[i].checked==true){
                 box[i].checked=false;
             }else{
                 box[i].checked=true;
             }
         }
     });
     //批量删除
     $(document).on('click','.pishan',function(){
         var r=confirm("你确定要批量删除吗？");
         if(!r){return};
         var box=document.getElementsByName('box');
         var str='';
         var _this=$(this);
         $('.box').each(function(){
             if(this.checked==true){
                 str +=','+$(this).attr('alt');
             }
         })
         var g_id=str.substr(1);
         $.ajax({
             url:"<?php echo url('goods_pishan'); ?>",
             data:{g_id:g_id},
             dataType:"json",
             success:function(res){
                 if(res.msg==1){

                     window.location.href='<?php echo url("goods_list"); ?>';
                 }else{
                     alert('批量删除失败');
                 }
             }
         })
     });
</script>