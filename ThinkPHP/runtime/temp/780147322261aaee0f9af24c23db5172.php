<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\system\system_ps.html";i:1536979972;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 配送方式 </title>
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
var lang_removeconfirm = "您确定要卸载该配送方式吗？";
var shipping_area = "设置区域";
var upload_falid = "错误：文件类型不正确。请上传“%s”类型的文件！";
var upload_del_falid = "错误：删除失败！";
var upload_del_confirm = "提示：您确认删除打印单图片吗？";
var no_select_upload = "错误：您还没有选择打印单图片。请使用“浏览...”按钮选择！";
var no_select_lable = "操作终止！您未选择任何标签。";
var no_add_repeat_lable = "操作失败！不允许添加重复标签。";
var no_select_lable_del = "删除失败！您没有选中任何标签。";
var recovery_default_suer = "您确认恢复默认吗？恢复默认后将显示安装时的内容。";
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;配送方式 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/listtable.js"></script><!-- start payment list -->
<div class="list-div" id="listDiv">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th>配送方式名称</th>
    <th>配送方式描述</th>
    <th nowrap="true">保价费用</th>
    <th nowrap="true">货到付款？</th>
    <th nowrap="true">插件版本</th>
    <th>插件作者</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            上门取货          </td>
    <td>
            买家自己到商家指定地点取货          </td>
    <td align="right">
            0          </td>
    <td align='center'>是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=cac">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            城际快递          </td>
    <td>
            配送的运费是固定的          </td>
    <td align="right">
            0          </td>
    <td align='center'>是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=city_express">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            EMS 国内邮政特快专递          </td>
    <td>
            EMS 国内邮政特快专递描述内容          </td>
    <td align="right">
            0          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=ems">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            市内快递          </td>
    <td>
            固定运费的配送方式内容          </td>
    <td align="right">
            0          </td>
    <td align='center'>是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=flat">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            运费到付          </td>
    <td>
            所购商品到达即付运费          </td>
    <td align="right">
            0          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=fpd">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            邮政快递包裹          </td>
    <td>
            邮政快递包裹的描述内容。          </td>
    <td align="right">
            1%          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=post_express">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            邮局平邮          </td>
    <td>
            邮局平邮的描述内容。          </td>
    <td align="right">
            0          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=post_mail">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            邮政挂号印刷品          </td>
    <td>
            邮政挂号印刷品的描述内容。          </td>
    <td align="right">
            1%          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=presswork">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            顺丰速运          </td>
    <td>
            江、浙、沪地区首重15元/KG，续重2元/KG，其余城市首重20元/KG          </td>
    <td align="right">
            0          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=sf_express">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            申通快递          </td>
    <td>
            江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元          </td>
    <td align="right">
            0          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=sto_express">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            圆通速递          </td>
    <td>
            上海圆通物流（速递）有限公司经过多年的网络快速发展，在中国速递行业中一直处于领先地位。为了能更好的发展国际快件市场，加快与国际市场的接轨，强化圆通的整体实力，圆通已在东南亚、欧美、中东、北美洲、非洲等许多城市运作国际快件业务          </td>
    <td align="right">
            0          </td>
    <td align='center'>是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=yto">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            中通速递          </td>
    <td>
            中通快递的相关说明。保价费按照申报价值的2％交纳，但是，保价费不低于100元，保价金额不得高于10000元，保价金额超过10000元的，超过的部分无效          </td>
    <td align="right">
            2%          </td>
    <td align='center'>否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com" target="_blank">蓝色黯然</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="shipping.php?act=install&code=zto">安装</a>
          </td>
  </tr>
  </table>
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
</script>
<div id="footer">
共执行 14 个查询，用时 0.208683 秒，Gzip 已禁用，内存占用 1.471 MB<br />
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