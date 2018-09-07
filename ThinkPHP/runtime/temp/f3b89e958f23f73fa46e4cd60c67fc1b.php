<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\attribute_list.html";i:1536311981;}*/ ?>
﻿<!-- $Id: attribute_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <base href="/">
<title>ECSHOP 管理中心 - 商品属性 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/transport.js"></script><script type="text/javascript" src="static/js/common.js"></script>
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
var name_not_null = "请您输入属性名称。";
var values_not_null = "请您输入该属性的可选值。";
var cat_id_not_null = "请您选择该属性所属的商品类型。";
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
      <a class="btn btn-right" href="attribute.php?act=add&goods_type=1">添加属性</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品属性 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/listtable.js"></script>
<div class="form-div">
  <form action="" name="searchForm">
    <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
    按商品类型显示：<select name="goods_type" onchange="searchAttr(this.value)"><option value="0">所有商品类型</caption><option value='1' selected="true">书</option><option value='2'>音乐</option><option value='3'>电影</option><option value='4'>手机</option><option value='5'>笔记本电脑</option><option value='6'>数码相机</option><option value='7'>数码摄像机</option><option value='8'>化妆品</option><option value='9'>精品手机</option></select>
  </form>
</div>

<form method="post" action="attribute.php?act=batch" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th>
        <input onclick='listTable.selectAll(this, "checkboxes[]")' type="checkbox">
        <a href="javascript:listTable.sort('attr_id'); ">编号</a>      </th>
      <th><a href="javascript:listTable.sort('attr_name'); ">属性名称</a></th>
      <th><a href="javascript:listTable.sort('cat_id'); ">商品类型</a></th>
      <th><a href="javascript:listTable.sort('attr_input_type');">属性值的录入方式</a></th>
      <th>可选值列表</th>
      <th><a href="javascript:listTable.sort('sort_order'); ">排序</a><img src="static/picture/sort_desc.png"/></th>
      <th>操作</th>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="1" name="checkboxes[]" type="checkbox">1</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 1)">作者</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 1)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="<?php echo url('goods/attribute_edit'); ?>">编辑</a>
        <a href="javascript:;" onclick="removeRow(1)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="2" name="checkboxes[]" type="checkbox">2</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 2)">出版社</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 2)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=2" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(2)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="3" name="checkboxes[]" type="checkbox">3</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 3)">图书书号/ISBN</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 3)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=3" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(3)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="4" name="checkboxes[]" type="checkbox">4</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 4)">出版日期</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 4)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=4" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(4)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="5" name="checkboxes[]" type="checkbox">5</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 5)">开本</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 5)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=5" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(5)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="6" name="checkboxes[]" type="checkbox">6</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 6)">图书页数</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 6)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=6" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(6)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="7" name="checkboxes[]" type="checkbox">7</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 7)">图书装订</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>从列表中选择</span></td>
      <td valign="top"><span>平装
, 黑白</span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 7)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=7" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(7)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="8" name="checkboxes[]" type="checkbox">8</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 8)">图书规格</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 8)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=8" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(8)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="9" name="checkboxes[]" type="checkbox">9</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 9)">版次</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 9)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=9" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(9)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="10" name="checkboxes[]" type="checkbox">10</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 10)">印张</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 10)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=10" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(10)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="11" name="checkboxes[]" type="checkbox">11</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 11)">字数</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 11)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=11" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(11)" title="移除">移除</a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top"><span><input value="12" name="checkboxes[]" type="checkbox">12</span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 12)">所属分类</span></td>
      <td nowrap="true" valign="top"><span>书</span></td>
      <td nowrap="true" valign="top"><span>手工录入</span></td>
      <td valign="top"><span></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 12)">0</span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=12" title="编辑">编辑</a>
        <a href="javascript:;" onclick="removeRow(12)" title="移除">移除</a>
      </td>
    </tr>
      </table>

  <table cellpadding="4" cellspacing="0">
    <tr>
      <td><input type="submit" id="btnSubmit" value="删除" class="button" disabled="true" /></td>
      <td align="right"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">12</span>
  条记录
  <span id="page-link">
    <a href="javascript:listTable.gotoPageFirst()">第一页</a>
    <a href="javascript:listTable.gotoPagePrev()">上一页</a>
    <a href="javascript:listTable.gotoPageNext()">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value='1'>1</option>    </select>
  </span>
</div>
</td>
    </tr>
  </table>
</div>

</form>
<script language="JavaScript">
<!--
  listTable.recordCount = 12;
  listTable.pageCount = 1;

    listTable.filter.goods_type = '1';
    listTable.filter.sort_by = 'sort_order';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '12';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
  
  
  onload = function()
  {
      // 开始检查订单
      startCheckOrder();
  }

  /**
   * 查询商品属性
   */
  function searchAttr(goodsType)
  {
    listTable.filter.goods_type = goodsType;
    listTable.filter.page = 1;
    listTable.loadList();
  }

  function removeRow(attr_id)
  {
    Ajax.call('attribute.php?act=get_attr_num&attr_id=' + attr_id, '', removeRowResponse, 'GET', 'JSON');
  }

  function removeRowResponse(result)
  {
    if (result.message.length > 0)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      listTable.remove(result.content.attr_id, result.content.drop_confirm);
    }
  }

  
//-->
</script>
<div id="footer">
共执行 5 个查询，用时 0.014500 秒，Gzip 已禁用，内存占用 1.344 MB<br />
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
  <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
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
<!--


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

//-->
</script>
</body>
</html>