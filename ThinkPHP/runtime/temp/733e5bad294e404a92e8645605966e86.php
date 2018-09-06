<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\index\index_main.html";i:1536240119;}*/ ?>
﻿<!-- $Id: start.htm 17216 2011-01-19 06:03:12Z liubo $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../static/js/transport.js"></script><script type="text/javascript" src="../../../static/js/common.js"></script>
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
var expand_all = "展开";
var collapse_all = "闭合";
var shop_name_not_null = "商店名称不能为空";
var good_name_not_null = "商品名称不能为空";
var good_category_not_null = "商品分类不能为空";
var good_number_not_number = "商品数量不是数值";
var good_price_not_number = "商品价格不是数值";
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"></span>
  <div style="clear:both"></div>
</h1><!-- directory install start -->
<ul id="cloud_list" style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
 
</ul>
<script type="Text/Javascript" language="JavaScript">
<!--
  // Ajax.call('cloud.php?is_ajax=1&act=cloud_remind','', cloud_api, 'GET', 'JSON');
    // function cloud_api(result)
    // {
    //   //alert(result.content);
    //   if(result.content=='0')
    //   {
    //     document.getElementById("cloud_list").style.display ='none';
    //   }
    //   else
    //    {
    //      document.getElementById("cloud_list").innerHTML =result.content;
    //   }
    // } 
   // function cloud_close(id)
   //  {
   //    Ajax.call('cloud.php?is_ajax=1&act=close_remind&remind_id='+id,'', cloud_api, 'GET', 'JSON');
   //  }
  //-->
 </script> 
<ul id="lilist" style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
    </ul>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
 <!-- <script type="text/javascript" src="static/js/notice.js"></script>-->
</ul>
<!-- directory install end -->
<!-- banner area-->
<div class="ban-area" style="margin-bottom: 10px">
  <div class="inn">
    <iframe class="first" width="450" height="300" src="http://pmp.shopex.cn/index.php?app=ad&ctl=display&act=index&nobar=1&nobtn=1&code=babda8d9d1c2863bd2b6091fce411881&entid=131110483129&username=&r=1461304885" frameborder="0" scrolling="no"></iframe>
    <iframe width="450" height="300" src="http://pmp.shopex.cn/index.php?app=ad&ctl=display&act=index&nobar=1&nobtn=1&code=01564ca0eb12162bcb6801ac67c97f07&entid=131110483129&username=&r=1461304885" frameborder="0" scrolling="no"></iframe>
  </div>
</div>
<!-- banner area-->

<!-- start personal message -->
<!-- end personal message -->
<!-- start order statistics -->
<div class="panel">
  <h2 class="group-title">订单统计信息</h2>
  <table cellspacing='1' cellpadding='3'>
    <tr>
      <th width="12%"><a href="order.php?act=list&composite_status=101">待发货订单:</a></th>
      <td width="21%"><strong style="color: red">0</strong></td>
      <th width="12%"><a href="order.php?act=list&composite_status=0">未确认订单:</a></th>
      <td width="21%"><strong>0</strong></td>
      <th width="12%"><a href="order.php?act=list&composite_status=100">待支付订单:</a></th>
      <td width="21%"><strong>0</strong></td>
    </tr>
    <tr>
      <th><a href="order.php?act=list&composite_status=102">已成交订单数:</a></td>
      <td><strong>0</strong></th>
      <th><a href="goods_booking.php?act=list_all">新缺货登记:</a></td>
      <td><strong>0</strong></th>
      <th><a href="user_account.php?act=list&process_type=1&is_paid=0">退款申请:</a></th>
      <td><strong>0</strong></td>
    </tr>
    <tr>
      <th><a href="order.php?act=list&composite_status=6">部分发货订单:</a></th>
      <td><strong>0</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<!-- end order statistics -->
<div class="clearfix" style="min-width: 1090px">
  <div class="panel analysis">
    <!-- start goods statistics -->
    <table class="zebra-table">
      <caption class="group-title">实体商品统计信息</caption>
      <tbody>
        <tr>
          <th>商品总数:</th>
          <td>1</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&stock_warning=1">库存警告商品数:</a></th>
          <td><strong style="color: red">1</strong></td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_new">新品推荐数:</a></th>
          <td>1</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_best">精品推荐数:</a></th>
          <td>0</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_hot">热销商品数:</a></th>
          <td>0</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_promote">促销商品数:</a></th>
          <td>0</td>
        </tr>
      </tbody>
    </table>
    <!-- Virtual Card -->
    <table class="zebra-table">
      <caption class="group-title">虚拟卡商品统计</caption>
      <tbody>
        <tr>
          <th>商品总数:</th>
          <td>1</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;stock_warning=1&amp;extension_code=virtual_card">库存警告商品数:</a></th>
          <td><strong style="color: red">1</strong></td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_new&amp;extension_code=virtual_card">新品推荐数:</a></th>
          <td>0</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_best&amp;extension_code=virtual_card">精品推荐数:</a></th>
          <td>0</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_hot&amp;extension_code=virtual_card">热销商品数:</a></th>
          <td>0</td>
        </tr>
        <tr>
          <th><a href="goods.php?act=list&amp;intro_type=is_promote&amp;extension_code=virtual_card">促销商品数:</a></th>
          <td>0</td>
        </tr>
      </tbody>
    </table>
    <!-- end -->
  </div>
  <!-- start access statistics -->
  <ul class="access-list" style="margin: 10px 0 0">
    <li>
      <div class="item">
        <img src="../../../static/picture/users.png" alt="">
        <p>今日访问:</p>
        <b>2</b>
      </div>
    </li>
    <li>
      <div class="item">
        <img src="../../../static/picture/onlines.png" alt="">
        <p>在线人数:</p>
        <b>3</b>
      </div>
    </li>
    <li>
      <div class="item">
        <img src="../../../static/picture/message.png" alt="">
        <p><a href="user_msg.php?act=list_all">最新留言:</a></p>
        <b>0</b>
      </div>
    </li>
    <li>
      <div class="item">
        <img src="../../../static/picture/comments.png" alt="">
        <p><a href="comment_manage.php?act=list">未审核评论:</a></p>
        <b>1</b>
      </div>
    </li>
  </ul>
</div>
<!-- end access statistics -->
<!-- start system information -->
<div class="panel">
<table cellspacing='1' cellpadding='3'>
  <caption class="group-title">系统信息</caption>
  <tr>
    <th width="12%">服务器操作系统:</th>
    <td width="21%">WINNT (127.0.0.1)</td>
    <th width="12%">Web 服务器:</th>
    <td width="21%">Apache/2.4.23 (Win32) OpenSSL/1.0.2j PHP/5.4.45</td>
    <th width="12%">PHP 版本:</th>
    <td width="21%">5.4.45</td>
  </tr>
  <tr>
    <th>MySQL 版本:</th>
    <td>5.5.53</td>
    <th>安全模式:</th>
    <td>否</td>
    <th>安全模式GID:</th>
    <td>否</td>
  </tr>
  <tr>
    <th>Socket 支持:</th>
    <td>是</td>
    <th>时区设置:</th>
    <td>PRC</td>
    <th>GD 版本:</th>
    <td>GD2 ( JPEG GIF PNG)</td>
  </tr>
  <tr>
    <th>Zlib 支持:</th>
    <td>是</td>
    <th>IP 库版本:</th>
    <td>20071024</td>
    <th>文件上传的最大大小:</th>
    <td>500M</td>
  </tr>
  <tr>
    <th>ECShop 版本:</th>
    <td>v4.0.0 RELEASE 20180830</td>
    <th>安装日期:</th>
    <td>2018-08-31</td>
    <th>编码:</th>
    <td>UTF-8</td>
  </tr>
</table>
</div>


<script type="text/javascript" src="../../../static/js/utils.js"></script><script type="Text/Javascript" language="JavaScript">
<!--
onload = function()
{
  /* 检查订单 */
  startCheckOrder();
}
  // Ajax.call('index.php?is_ajax=1&act=main_api','', start_api, 'GET', 'TEXT','FLASE');
  //Ajax.call('cloud.php?is_ajax=1&act=cloud_remind','', cloud_api, 'GET', 'JSON');
   // function start_api(result)
   //  {
   //    apilist = document.getElementById("lilist").innerHTML;
   //    document.getElementById("lilist").innerHTML =result+apilist;
   //    if(document.getElementById("Marquee") != null)
   //    {
   //      var Mar = document.getElementById("Marquee");
   //      lis = Mar.getElementsByTagName('div');
   //      //alert(lis.length); //显示li元素的个数
   //      if(lis.length>1)
   //      {
   //        api_styel();
   //      }      
   //    }
   //  }
 
      function api_styel()
      {
        if(document.getElementById("Marquee") != null)
        {
            var Mar = document.getElementById("Marquee");
            if (Browser.isIE)
            {
              Mar.style.height = "52px";
            }
            else
            {
              Mar.style.height = "36px";
            }
            
            var child_div=Mar.getElementsByTagName("div");

        var picH = 16;//移动高度
        var scrollstep=2;//移动步幅,越大越快
        var scrolltime=30;//移动频度(毫秒)越大越慢
        var stoptime=4000;//间断时间(毫秒)
        var tmpH = 0;
        
        function start()
        {
          if(tmpH < picH)
          {
            tmpH += scrollstep;
            if(tmpH > picH )tmpH = picH ;
            Mar.scrollTop = tmpH;
            setTimeout(start,scrolltime);
          }
          else
          {
            tmpH = 0;
            Mar.appendChild(child_div[0]);
            Mar.scrollTop = 0;
            setTimeout(start,stoptime);
          }
        }
        setTimeout(start,stoptime);
        }
      }
//-->
</script>

<div id="footer">
共执行 30 个查询，用时 0.237995 秒，Gzip 已禁用，内存占用 2.351 MB<br />
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