<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"G:\CodeFile\WWW\month12\perject\ecshop\ThinkPHP\public/../application/index\view\user\user_msg.html";i:1536907273;}*/ ?>
﻿<!-- $Id: msg_list.htm 15616 2009-02-18 05:16:22Z sunxiaodong $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 会员留言 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />

<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>


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
    <iframe src="" frameborder="0" id="CFrame"></iframe>
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;会员留言 </span>
  <div style="clear:both"></div>
</h1>
<!-- <script type="text/javascript" src="static/js/utils.js"></script>
<script type="text/javascript" src="../../../static/js/listtable.js"></script> -->
<div class="form-div">
  <form action="<?php echo url('user/user_msgs'); ?>" method="post" >
<!--     <img src="../../../static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" /> -->
    类型:
    <select name="type_id">
      <option value="-1">请选择...</option>
      <?php foreach($data as $v): ?>
       <option value="<?php echo $v['type_id']; ?>"><?php echo $v['type_name']; ?></option>
       <?php endforeach; ?>
    </select>
    留言标题: <input type="text" name="keyword" /> <input type="submit" class="button" value=" 搜索 " />
  </form>
</div>
<h2><span><a href="" id="time">退出</a></span></h2>
<form method="POST" action="user_msg.php?act=batch_drop" name="listForm" onsubmit="return confirm_bath()">
<!-- start article list -->
<div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('msg_id'); ">编号</a><img src="../../../static/picture/sort_desc.png">    </th>
    <th><a href="javascript:listTable.sort('user_name'); ">用户名</a></th>
    <th><a href="javascript:listTable.sort('msg_title'); ">留言标题</a></th>
    <th><a href="javascript:listTable.sort('type_id'); ">类型</a></th>
    <th><a href="javascript:listTable.sort('msg_time'); ">留言时间</a></th>
    <th><a href="javascript:listTable.sort('status'); ">状态</a></th>
    <th><a href="javascript:listTable.sort('reply'); ">是否回复</a></th>
    <th>操作</th>
  </tr>
  <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): if( count($res)==0 ) : echo "" ;else: foreach($res as $key=>$v): ?>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" /><?php echo $v['msg_id']; ?></td>
    <td align="center"><?php echo $v['user_naame']; ?></td>
    <td align="left"><?php echo $v['msg_title']; ?></td>
    <td align="center"><?php echo $v['type_id']; ?></td> 
    
    <td align="center"  nowrap="nowrap"><?php echo $v['msg_time']; ?></td>


    <td align="center">
      <?php if(in_array(($v['status']), explode(',',"1"))): ?>
            <a href="">显示</a>  
      <?php else: ?>
         <a href="">不显示</a>
      <?php endif; ?>
    </td>


    <td align="center">
      <?php if(in_array(($v['is_reply']), explode(',',"1"))): ?>
            <a href="">回复</a>  
      <?php else: ?>
         <a href="">未回复</a>
      <?php endif; ?>
    </td>

<!--       <if condition="$v['status'] eq 1 ">
         <a href="">显示</a> 
      <else /> 
       <a href="">不显示</a>
   </if>
    </td>
   <td align="center">
      <if condition="$v['is_reply'] eq 1 ">
          <a href="">回复</a>
      <else /> 
      <a href="">未回复</a>
   </if> -->


  
    <td align="center">

      <a href="user_msg.php?act=view&id=1" title="查看详情">查看详情
        <img src="static/picture/icon_view.svg" border="0" height="16" width="16" />
      </a>
      <a href="javascript:;" onclick="listTable.remove(1, '您确认要删除这条记录吗?')"  title="移除">
        <img src="static/picture/icon_drop.svg" border="0" height="16" width="16">移除
      </a>
    </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
<table id="page-table" cellspacing="0">
<tr>
  <td><div>
      <select name="sel_action">
	    <option value="">请选择...</option>
        <option value="remove">删除留言</option>
        <option value="allow">允许显示</option>
        <option value="deny">禁止显示</option>
      </select>
      <input type="hidden" name="act" value="batch" />
      <input type="submit" name="drop" id="btnSubmit" value=" 确定 " class="button" disabled="true" /></div></td>
</tr>
</table>
<?php echo $res->render(); ?>
</div>
<!-- end article list -->
</form>
<!-- <script type="text/javascript" language="JavaScript">
listTable.recordCount = 1;
listTable.pageCount = 1;
cfm = new Object();
cfm['allow'] = '你确定要允许显示所选评论吗？';
cfm['remove'] = '你确定要删除所选评论吗？';
cfm['deny'] = '你确定要禁止显示所选评论吗？';
listTable.filter.keywords = '';
listTable.filter.type_id = '-1';
listTable.filter.sort_by = 'f.msg_id';
listTable.filter.sort_order = 'DESC';
listTable.filter.record_count = '1';
listTable.filter.page_size = '15';
listTable.filter.page = '1';
listTable.filter.page_count = '1';
listTable.filter.start = '0';

onload = function()
{
    document.forms['searchForm'].elements['keyword'].focus();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 搜索标题
 */
function searchMsg()
{
    var keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    var msgType = document.forms['searchForm'].elements['type_id'].value;

    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['type_id'] = document.forms['searchForm'].elements['type_id'].value;
    listTable.filter['page'] = 1;
    listTable.loadList();
}

function confirm_bath()
{
    var action = document.forms['listForm'].elements['sel_action'].value;
    if (action == 'allow'||action == 'remove'||action == 'deny')
      {
          return confirm(cfm[action]);
      }
}
//
</script>
 -->
<div id="footer">
共执行 2 个查询，用时 0.025320 秒，Gzip 已禁用，内存占用 1.110 MB<br />
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

<script src="../../../static/jquery-2.1.4.min.js"></script>
<script>

function show(){
  var date = new Date();
  var a = date.toLocaleString();
  document.getElementById('time').innerHTML = a;
}
setInterval('show()',1000);


</script>

<!--
<embed src="static/flash/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<!-- <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
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


//
</script> -->
</body>
</html>