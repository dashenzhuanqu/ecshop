<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:105:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\comment_manage_list.html";i:1537276299;}*/ ?>
﻿<!-- $Id: comment_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 用户评论 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../static/js/transport.js"></script>
  <script type="text/javascript" src="../../../static/js/common.js"></script>
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
var no_content = "回复的评论内容不能为空!";
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;用户评论 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="../../../static/js/utils.js"></script><script type="text/javascript" src="../../../static/js/listtable.js"></script><div class="form-div">
  <form action="javascript:searchComment()" name="searchForm">
    <img src="../../../static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
    输入评论内容 <input type="text" name="keyword" /> <input type="submit" class="btn" value=" 搜索 " />
  </form>
</div>

<form method="POST" action="comment_manage.php?act=batch_drop" name="listForm" onsubmit="return confirm_bath()">

<!-- start comment list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
    <tr>
      <th>
        <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
        <a href="javascript:listTable.sort('comment_id'); ">编号</a> </th>
      <th><a href="javascript:listTable.sort('user_name'); ">用户名</a></th>
      <th><a href="javascript:listTable.sort('comment_type'); ">类型</a></th>
      <th><a href="javascript:listTable.sort('id_value'); ">评论对象</a></th>
      <th><a href="javascript:listTable.sort('ip_address'); ">IP地址</a></th>
      <th><a href="javascript:listTable.sort('add_time'); ">评论时间</a><img src="../../../static/picture/sort_desc.png"/></th>
      <th>状态</th>
      <th>操作</th>
    </tr>
  <?php foreach($data as $k => $v){ ?>
      <tr>
        <td><input value="1" name="checkboxes[]" type="checkbox"><?= $v['comment_id']?></td>

        <td><?= $v['user_name']?></td>
        <td><?= $v['goods_type_name']?></td>
        <td><?= $v['goods_name']?></td>
        <td><a href="">127.0.0.1</a></td>
        <td><?= $v['comment_time']?></td>
        <td align="center">
          <?php if($v['is_show'] == 1){ ?>
          <?php echo"显示";}elseif($v['is_show'] == 0){ ?>
          <?php echo"隐藏";}?>
        </td>
        <!--<td align="center"></td>-->
        <td align="center">
          <a href="/index/goods/comment_manage/?comment_id=<?= $v['comment_id']?>">查看详情</a> |
          <a href="javascript:" onclick="listTable.remove(1, '您确认要删除这条记录吗?')">移除</a>
        </td>
    </tr>
  <?php }?>

      </table>

  <table cellpadding="4" cellspacing="0">
    <tr>
      <td>
      <div>
      <select name="sel_action">
        <option value="remove">删除评论</option>
        <option value="allow">允许显示</option>
        <option value="deny">禁止显示</option>
      </select>
      <input type="hidden" name="act" value="batch" />
      <input type="submit" name="drop" id="btnSubmit" value=" 确定 " class="button" disabled="true" /></div></td>
      <td align="right"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">1</span>
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
<!-- end comment list -->

</form>
<script type="text/javascript" language="JavaScript">
<!--
  listTable.recordCount = 1;
  listTable.pageCount = 1;
  cfm = new Object();
  cfm['allow'] = '你确定要允许显示所选评论吗？';
  cfm['remove'] = '你确定要删除所选评论吗？';
  cfm['deny'] = '你确定要禁止显示所选评论吗？';

    listTable.filter.keywords = '0';
    listTable.filter.sort_by = 'add_time';
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
   * 搜索评论
   */
  function searchComment()
  {
      var keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
      if (keyword.length > 0)
      {
        listTable.filter['keywords'] = keyword;
        listTable.filter.page = 1;
        listTable.loadList();
      }
      else
      {
          document.forms['searchForm'].elements['keyword'].focus();
      }
  }


  function confirm_bath()
  {
    var action = document.forms['listForm'].elements['sel_action'].value;

    return confirm(cfm[action]);
  }
//-->
</script>
<div id="footer">
共执行 5 个查询，用时 0.011501 秒，Gzip 已禁用，内存占用 1.355 MB<br />
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

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="../../../images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>
</body>
</html>