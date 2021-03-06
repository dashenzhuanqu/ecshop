<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\system\system_zc.html";i:1536979972;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 支付方式 </title>
<base href="/static/System/">
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script>
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
//<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var lang_removeconfirm = "您确定要卸载该支付方式吗？";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2Fwww.zjh.com%2FECShop%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;支付方式 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/listtable.js"></script><!-- start payment list -->
<div class="list-div" id="listDiv">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th>支付方式名称</th>
    <th width="40%">支付方式描述</th>
    <th>插件版本</th>
    <th>插件作者</th>
    <th>费用</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
      <tr>
    <td class="first-cell" valign="top">
              <span onclick="listTable.edit(this, 'edit_name', 'yunqi'); return false;"><font color="#FF0000">天工收银</font></span>
          </td>
    <td><font color="#FF0000">天工收银是上海商派2015年正式推出的专业集成支付平台，致力于为各类用户提供融合、便捷、安全的场景支付服务。</font></td>
    <td valign="top">1.0</td>
    <td valign="top"><a href="https://charging.teegon.com/">YUNQI TEAM</a></td>
    <td valign="top" align="right">
                        <span onclick="listTable.edit(this, 'edit_pay_fee', 'yunqi'); return false;">0</span>
                  </td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, 'edit_order', 'yunqi'); return false;">0</span>  </td>
    <td align="center" valign="top">
                      <a href="javascript:confirm_redirect(lang_removeconfirm, 'payment.php?act=uninstall&code=yunqi')">卸载</a>
          <a href="payment.php?act=edit&code=yunqi">编辑</a>
          <a href="https://charging.teegon.com/passport/login" target="_blank">查看账户</a>        
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              财付通          </td>
    <td>财付通（www.tenpay.com） - 腾讯旗下在线支付平台，通过国家权威安全认证，支持各大银行网上支付，免支付手续费。<br /><a href="http://union.tenpay.com/mch/mch_register_b2c.shtml?sp_suggestuser=1202822001" target="_blank">立即免费申请：单笔费率1%</a><br /><a href="http://union.tenpay.com/set_meal_charge/?referrer=1442037873" target="_blank">立即购买包量套餐：折算后单笔费率0.6-1%</a></td>
    <td valign="top">2.0.0</td>
    <td valign="top"><a href="http://www.tenpay.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                          <a href="payment.php?act=install&code=tenpay">安装即时到账 </a><br />
                             <a href="payment.php?act=install&code=tenpayc2c">安装中介担保</a>
              
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              支付宝          </td>
    <td>支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，零预付，免年费，单笔阶梯费率，无流量限制。<br/><a href="https://b.alipay.com/order/productDetail.htm?productId=2015110218012942" target="_blank">立即在线申请</a></td>
    <td valign="top">1.0.2</td>
    <td valign="top"><a href="http://www.alipay.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=alipay">安装</a>
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              余额支付          </td>
    <td>使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。</td>
    <td valign="top">1.0.0</td>
    <td valign="top"><a href="http://www.ecshop.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=balance">安装</a>
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              银行汇款/转帐          </td>
    <td>银行名称<br />
收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。<br />
注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。</td>
    <td valign="top">1.0.0</td>
    <td valign="top"><a href="http://www.ecshop.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=bank">安装</a>
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              货到付款          </td>
    <td>开通城市：×××<br />
货到付款区域：×××</td>
    <td valign="top">1.0.0</td>
    <td valign="top"><a href="http://www.ecshop.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
      配送决定          </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=cod">安装</a>
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              邮局汇款          </td>
    <td>收款人信息：姓名 ××× ；地址 ××× ；邮编 ××× 。<br />
注意事项： 请在汇款单背面的附言中注明您的订单号，只填写后6位即可。</td>
    <td valign="top">1.0.0</td>
    <td valign="top"><a href="http://www.ecshop.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=post">安装</a>
           
          </td>
  </tr>          <tr>
    <td class="first-cell" valign="top">
              天工(银联快捷)          </td>
    <td>天工支付 是国内先进的网上支付平台。<br/>收款接口：在线即可开通，<br/><a href="https://charging.teegon.com/passport/signup" target="_blank"><font color="red">立即在线申请</font></a></td>
    <td valign="top">1.0</td>
    <td valign="top"><a href="https://charging.teegon.com/">TEEGON TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=tiangongcp">安装</a>
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              天工(银联)          </td>
    <td>天工支付 是国内先进的网上支付平台。<br/>收款接口：在线即可开通，<br/><a href="https://charging.teegon.com/passport/signup" target="_blank"><font color="red">立即在线申请</font></a></td>
    <td valign="top">1.0</td>
    <td valign="top"><a href="https://charging.teegon.com/">TEEGON TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=tiangongcpb2c">安装</a>
           
          </td>
  </tr>      <tr>
    <td class="first-cell" valign="top">
              银联在线支付          </td>
    <td>银联在线支付是中国银联推出的网上支付平台，支持多家发卡银行，涵盖借记卡和信用卡等，包含认证支付、快捷支付和网银支付多种方式，其中认证和快捷支付无需开通网银，仅需一张银行卡，即可享受安全、快捷的网上支付服务！</td>
    <td valign="top">1.0.0</td>
    <td valign="top"><a href="http://www.ecshop.com">ECSHOP TEAM</a></td>
    <td valign="top" align="right">
                        0                  </td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" valign="top">
                             <a href="payment.php?act=install&code=upop">安装</a>
           
          </td>
  </tr>  </table>
</div>
<!-- end payment list -->
<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

//-->
function check_yunqi(){
  Ajax.call('payment.php?is_ajax=1&act=check_yunqi','', set_yunqi, 'GET', 'JSON');
}
function set_yunqi(result){
  if(result.status==true){
    window.location.href="payment.php?act=install&code=yunqi";
  }else{
	get_certificate();
  }
}
</script>
<div id="footer">
共执行 3 个查询，用时 0.157631 秒，Gzip 已禁用，内存占用 1.528 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
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
<embed src="images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
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
//<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("js/global.js","js");
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