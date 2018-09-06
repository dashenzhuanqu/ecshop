<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:105:"D:\phpStudy\PHPTutorial\WWW\da1\ecshop\ThinkPHP\public/../application/index\view\privilege\privilege.html";i:1536196103;}*/ ?>
<!-- $Id: privilege_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>ECSHOP 管理中心 - 管理员列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<base href="__PUBLIC__/static/" />
<link href="__PUBLIC__/static/css/general.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/static/js/transport.js"></script><script type="text/javascript" src="__PUBLIC__/static/js/common.js"></script>
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
var user_name_empty = "管理员用户名不能为空!";
var password_invaild = "密码必须同时包含字母及数字且长度不能小于6!";
var email_empty = "Email地址不能为空!";
var email_error = "Email地址格式不正确!";
var password_error = "两次输入的密码不一致!";
var captcha_empty = "您没有输入验证码!";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2Flocalhost%2Fdayi%2Fecshop%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
<!-- <div class="panel-hint panel-icloud" id="panelCloud">
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
    <iframe src="privilege.html" id="CFrame" frameborder="0"></iframe>
    <div class="cloud-passw">
      <a target="_blank" href="https://account.shopex.cn/forget?">忘记密码？</a>
    </div>
  </div>
</div> -->
<!--云起激活系统面板-->
<!--遮罩-->
<div class="mask-black" id="CMask"></div>
<!--遮罩-->
<h1>
      <a class="btn btn-right" href="<?php echo url('privilege/addprivilege'); ?>">添加管理员</a>
  
    <span class="action-span1"><a href="<?php echo url('ads/main'); ?>">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;&gt;&nbsp;&nbsp;管理员列表 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="privilege_data/utils.js"></script><script type="text/javascript" src="privilege_data/listtable.js"></script>
<div class="list-div" id="listDiv">

<table id="list-table" cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th>用户名</th>
    <th>Email地址</th>
    <th>加入时间</th>
    <th>最后登录时间</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);">88180801933648</td>
    <td style="background-color: rgb(255, 255, 255);" align="left">88180801933648</td>
    <td style="background-color: rgb(255, 255, 255);" align="center">2018-09-03 21:21:36</td>
    <td style="background-color: rgb(255, 255, 255);" align="center">N/A</td>
    <td style="background-color: rgb(255, 255, 255);" align="center">
      <a href="http://localhost/dayi/ecshop/ecshop/admin/privilege.php?act=allot&amp;id=2&amp;user=88180801933648" title="分派权限">分派权限</a>&nbsp;
      <a href="http://localhost/dayi/ecshop/ecshop/admin/admin_logs.php?act=list&amp;id=2" title="查看日志">查看日志</a>&nbsp;
      <a href="http://localhost/dayi/ecshop/ecshop/admin/privilege.php?act=edit&amp;id=2" title="编辑">编辑</a>&nbsp;
      <a href="javascript:;" onclick="listTable.remove(2, '您确认要删除这条记录吗?')" title="移除">移除</a></td>
  </tr>
    <tr>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);">admin</td>
    <td style="background-color: rgb(255, 255, 255);" align="left">2972409305@qq.com</td>
    <td style="background-color: rgb(255, 255, 255);" align="center">2018-09-03 21:21:27</td>
    <td style="background-color: rgb(255, 255, 255);" align="center">2018-09-04 19:58:32</td>
    <td style="background-color: rgb(255, 255, 255);" align="center">
      <a href="http://localhost/dayi/ecshop/ecshop/admin/privilege.php?act=allot&amp;id=1&amp;user=admin" title="分派权限">分派权限</a>&nbsp;
      <a href="http://localhost/dayi/ecshop/ecshop/admin/admin_logs.php?act=list&amp;id=1" title="查看日志">查看日志</a>&nbsp;
      <a href="http://localhost/dayi/ecshop/ecshop/admin/privilege.php?act=edit&amp;id=1" title="编辑">编辑</a>&nbsp;
      <a href="javascript:;" onclick="listTable.remove(1, '您确认要删除这条记录吗?')" title="移除">移除</a></td>
  </tr>
  </tbody></table>

</div>
<script type="text/javascript" language="JavaScript">
  
  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }
  
</script>
<div id="footer">
共执行 3 个查询，用时 0.010860 秒，Gzip 已禁用，内存占用 1.404 MB<br>
版权所有 © 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#cfdef4">
  <tbody><tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" width="100%" valign="center"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" width="19" valign="center" align="right"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()">×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p style="word-break:break-all" align="center"><a href="http://localhost/dayi/ecshop/ecshop/admin/order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </tbody></table>
</div>

<!--
<embed src="images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="privilege_data/online.swf" name="msgBeep" id="msgBeep" quality="high" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash" width="0" height="0">
  
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

</body></html>