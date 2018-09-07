<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\attribute_edit.html";i:1536311981;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="/">
<title>ECSHOP 管理中心 - 编辑属性 </title>
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
      <a class="btn btn-right" href="attribute.php?act=list">商品属性</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;编辑属性 </span>
  <div style="clear:both"></div>
</h1><div class="main-div">
  <form action="attribute.php"  method="post" name="theForm" onsubmit="return validate();">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">属性名称：</td>
        <td>
          <input type='text' name='attr_name' value="作者" size='30' />
          <span class="require-field">*</span>        </td>
      </tr>
      <tr>
        <td class="label">所属商品类型：</td>
        <td>
          <select name="cat_id" onchange="onChangeGoodsType(this.value)">
          <option value="0">请选择...</option>
            <option value='1' selected="true">书</option><option value='2'>音乐</option><option value='3'>电影</option><option value='4'>手机</option><option value='5'>笔记本电脑</option><option value='6'>数码相机</option><option value='7'>数码摄像机</option><option value='8'>化妆品</option><option value='9'>精品手机</option>          </select> <span class="require-field">*</span>        </td>
      </tr>
      <tr id="attrGroups" style="display:none">
        <td class="label">属性分组：</td>
        <td>
          <select name="attr_group">
                    </select>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeindex');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>能否进行检索：</td>
        <td>
          <input type="radio" name="attr_index" value="0"  checked="true"  />
          不需要检索          <input type="radio" name="attr_index" value="1"  />
          关键字检索          <input type="radio" name="attr_index" value="2"  />
          范围检索          <br /><span class="notice-span" style="display:block"  id="noticeindex">不需要该属性成为检索商品条件的情况请选择不需要检索，需要该属性进行关键字检索商品时选择关键字检索，如果该属性检索时希望是指定某个范围时，选择范围检索。</span>
        </td>
      </tr>
      <tr>
        <td class="label">相同属性值的商品是否关联？</td>
        <td>
          <input type="radio" name="is_linked" value="0"  checked="true"  /> 否          <input type="radio" name="is_linked" value="1"  /> 是        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeAttrType');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>属性是否可选</td>
        <td>
          <input type="radio" name="attr_type" value="0"  checked="true"  /> 唯一属性          <input type="radio" name="attr_type" value="1"  /> 单选属性          <input type="radio" name="attr_type" value="2"  /> 复选属性          <br /><span class="notice-span" style="display:block"  id="noticeAttrType">选择"单选/复选属性"时，可以对商品该属性设置多个值，同时还能对不同属性值指定不同的价格加价，用户购买商品时需要选定具体的属性值。选择"唯一属性"时，商品的该属性值只能设置一个值，用户只能查看该值。</span>
        </td>
      </tr>
      <tr>
        <td class="label">该属性值的录入方式：</td>
        <td>
          <input type="radio" name="attr_input_type" value="0"  checked="true"  onclick="radioClicked(0)"/>
          手工录入          <input type="radio" name="attr_input_type" value="1"  onclick="radioClicked(1)"/>
          从下面的列表中选择（一行代表一个可选值）          <input type="radio" name="attr_input_type" value="2"  onclick="radioClicked(0)"/>
          多行文本框        </td>
      </tr>
      <tr>
        <td class="label">可选值列表：</td>
        <td>
          <textarea name="attr_values" cols="30" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div class="button-div">
          <input type="submit" value=" 确定 " class="button"/>
          <input type="reset" value=" 重置 " class="button" />
        </div>
        </td>
      </tr>
      </table>
    <input type="hidden" name="act" value="update" />
    <input type="hidden" name="attr_id" value="1" />
  </form>
</div>
<script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/validator.js"></script>
<script language="JavaScript">
<!--
onload = function()
{

  radioClicked(0);
  onChangeGoodsType(1);
  // 开始检查订单
  startCheckOrder();

}

/**
 * 检查表单输入的数据
 */
function validate()
{
  var ele = document.forms['theForm'].elements;
  var msg = '';

  if (Utils.trim(ele['attr_name'].value) == '')
  {
    msg += name_not_null + '\n';
  }

  if (ele['cat_id'].value == 0)
  {
    msg += cat_id_not_null + '\n';
  }

  if (ele['attr_input_type'][1].checked && Utils.trim(ele['attr_values'].value) == '')
  {
    msg += values_not_null + '\n';
  }

  if (msg.length > 0)
  {
    alert(msg);
    return false;
  }
  else
  {
    return true;
  }
}

/**
 * 点击类型按钮时切换选项的禁用状态
 */
function radioClicked(n)
{
  document.forms['theForm'].elements["attr_values"].disabled = n > 0 ? false : true;
}

/**
 * 改变商品类型的处理函数
 */
function onChangeGoodsType(catId)
{
  Ajax.call('attribute.php?act=get_attr_groups&cat_id=' + catId, '', changeGoodsTypeResponse, 'GET', 'JSON');
}

function changeGoodsTypeResponse(res)
{
  if (res.error == 0)
  {
    var row = document.getElementById('attrGroups');
    if (res.content.length == 0) {
      row.style.display = 'none';
    } else {
      row.style.display = document.all ? 'block' : 'table-row';

      var sel = document.forms['theForm'].elements['attr_group'];

      sel.length = 0;

      for (var i = 0; i < res.content.length; i++)
      {
        var opt = document.createElement('OPTION');
        opt.value = i;
        opt.text = res.content[i];
        sel.options.add(opt);
        if (i == '0')
        {
          opt.selected=true;
        }
      }
    }
  }

  if (res.message)
  {
    alert(res.message);
  }
}

//-->
</script>

<div id="footer">
共执行 5 个查询，用时 0.012002 秒，Gzip 已禁用，内存占用 1.343 MB<br />
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