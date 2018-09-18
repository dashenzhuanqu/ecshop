<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:98:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\category_add.html";i:1536824693;}*/ ?>
﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="../../../static/js/transport.js"></script><script type="text/javascript" src="../../../static/js/common.js"></script>-->
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
      <a class="btn btn-right" href="/index/goods/category_list">商品分类</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加分类 </span>
  <div style="clear:both"></div>
</h1><!-- start add new category form -->
<div class="main-div">
  <form action="<?php echo url('goods/category_add'); ?>" method="post" id="theForm" enctype="multipart/form-data">
    <table>
      <tr>
          <td class="label">分类名称:</td>
          <td><input type="text" name="cat_name" maxlength="20" value="" size="27"> <font color="red">*</font></td>
      </tr>
      <tr>
          <td class="label">上级分类:</td>
          <td>
              <input type="hidden" name="path" value="" id="path" />
              <select name="parent_id" id="select">
                  <option value="0">顶级分类</option>
                  <?php foreach($cate as $v): ?>
                  <option value="<?php echo $v['cat_id']; ?>" path="<?php echo $v['path']; ?>"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;├",substr_count($v['new'],"-")-1) ?><?php echo $v['cat_name']; ?></option>
                  <?php endforeach; ?>
              </select>
          </td>
      </tr>

      <tr>
          <td class="label">是否显示:</td>
          <td><input type="radio" name="is_show" value="1" checked="true"> 是<input type="radio" name="is_show" value="0"> 否  </td>
      </tr>
      <tr>
          <td class="label">是否显示在导航栏:</td>
          <td><input type="radio" name="is_nav" value="1"> 是  <input type="radio" name="is_nav" value="0" checked="true"> 否    </td>
      </tr>
      <tr>
          <td class="label">分类描述:</td>
          <td>
              <textarea name="cat_desc" rows="6" cols="48"></textarea>
          </td>
      </tr>
      </tbody></table>
      <div class="button-div">
        <input type="submit" class="btn" value=" 确定 " />
        <input type="reset" class="btn btn-def" value=" 重置 " />
      </div>
      </table>
    <!--<input type="hidden" name="act" value="insert" />-->
    <!--<input type="hidden" name="old_cat_name" value="" />-->
    <!--<input type="hidden" name="cat_id" value="" />-->
  </form>
</div>
<!--<script type="text/javascript" src="../../../static/js/utils.js"></script><script type="text/javascript" src="../../../static/js/validator.js"></script>-->
<!--<script language="JavaScript">-->
<!--&lt;!&ndash;-->
<!--//document.forms['theForm'].elements['cat_name'].focus();-->
<!--/**-->
 <!--* 检查表单输入的数据-->
 <!--*/-->
<!--function validate()-->
<!--{-->
  <!--validator = new Validator("theForm");-->
  <!--validator.required("cat_name",      catname_empty);-->
  <!--if (parseInt(document.forms['theForm'].elements['grade'].value) >10 || parseInt(document.forms['theForm'].elements['grade'].value) < 0)-->
  <!--{-->
    <!--validator.addErrorMsg('价格分级数量只能是0-10之内的整数');-->
  <!--}-->
  <!--return validator.passed();-->
<!--}-->
<!--onload = function()-->
<!--{-->
  <!--// 开始检查订单-->
  <!--startCheckOrder();-->
<!--}-->

<!--/**-->
 <!--* 新增一个筛选属性-->
 <!--*/-->
<!--function addFilterAttr(obj)-->
<!--{-->
  <!--var src = obj.parentNode.parentNode;-->
  <!--var tbl = document.getElementById('tbody-attr');-->

  <!--var validator  = new Validator('theForm');-->
  <!--var filterAttr = document.getElementsByName("filter_attr[]");-->

  <!--if (filterAttr[filterAttr.length-1].selectedIndex == 0)-->
  <!--{-->
    <!--validator.addErrorMsg(filter_attr_not_selected);-->
  <!--}-->
  <!---->
  <!--for (i = 0; i < filterAttr.length; i++)-->
  <!--{-->
    <!--for (j = i + 1; j <filterAttr.length; j++)-->
    <!--{-->
      <!--if (filterAttr.item(i).value == filterAttr.item(j).value)-->
      <!--{-->
        <!--validator.addErrorMsg(filter_attr_not_repeated);-->
      <!--} -->
    <!--} -->
  <!--}-->

  <!--if (!validator.passed())-->
  <!--{-->
    <!--return false;-->
  <!--}-->

  <!--var row  = tbl.insertRow(tbl.rows.length);-->
  <!--var cell = row.insertCell(-1);-->
  <!--cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addFilterAttr)(.*)(\[)(\+)/i, "$1removeFilterAttr$3$4-");-->
  <!--filterAttr[filterAttr.length-1].selectedIndex = 0;-->
<!--}-->

<!--/**-->
 <!--* 删除一个筛选属性-->
 <!--*/-->
<!--function removeFilterAttr(obj)-->
<!--{-->
  <!--var row = rowindex(obj.parentNode.parentNode);-->
  <!--var tbl = document.getElementById('tbody-attr');-->

  <!--tbl.deleteRow(row);-->
<!--}-->
<!--//&ndash;&gt;-->
<!--</script>-->

<div id="footer">
共执行 4 个查询，用时 0.019495 秒，Gzip 已禁用，内存占用 1.463 MB<br />
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

<!--<script language="JavaScript">-->
<!--document.onmousemove=function(e)-->
<!--{-->
  <!--var obj = Utils.srcElement(e);-->
  <!--if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)-->
  <!--{-->
    <!--obj.title = '点击修改内容';-->
    <!--obj.style.cssText = 'background-color: #eee;';-->
    <!--obj.onmouseout = function(e)-->
    <!--{-->
      <!--this.style.cssText = '';-->
    <!--}-->
  <!--}-->
  <!--else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)-->
  <!--{-->
    <!--obj.title = '点击对列表排序';-->
  <!--}-->
<!--}-->
<!--var MyTodolist;-->
<!--function showTodoList(adminid)-->
<!--{-->
  <!--if(!MyTodolist)-->
  <!--{-->
    <!--var global = $import("../js/global.js","js");-->
    <!--global.onload = global.onreadystatechange= function()-->
    <!--{-->
      <!--if(this.readyState && this.readyState=="loading")return;-->
      <!--var md5 = $import("js/md5.js","js");-->
      <!--md5.onload = md5.onreadystatechange= function()-->
      <!--{-->
        <!--if(this.readyState && this.readyState=="loading")return;-->
        <!--var todolist = $import("js/todolist.js","js");-->
        <!--todolist.onload = todolist.onreadystatechange = function()-->
        <!--{-->
          <!--if(this.readyState && this.readyState=="loading")return;-->
          <!--MyTodolist = new Todolist();-->
          <!--MyTodolist.show();-->
        <!--}-->
      <!--}-->
    <!--}-->
  <!--}-->
  <!--else-->
  <!--{-->
    <!--if(MyTodolist.visibility)-->
    <!--{-->
      <!--MyTodolist.hide();-->
    <!--}-->
    <!--else-->
    <!--{-->
      <!--MyTodolist.show();-->
    <!--}-->
  <!--}-->
<!--}-->

<!--if (Browser.isIE)-->
<!--{-->
  <!--onscroll = function()-->
  <!--{-->
    <!--//document.getElementById('calculator').style.top = document.body.scrollTop;-->
    <!--document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";-->
  <!--}-->
<!--}-->

<!--if (document.getElementById("listDiv"))-->
<!--{-->
  <!--document.getElementById("listDiv").onmouseover = function(e)-->
  <!--{-->
    <!--obj = Utils.srcElement(e);-->

    <!--if (obj)-->
    <!--{-->
      <!--if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;-->
      <!--else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;-->
      <!--else return;-->

      <!--for (i = 0; i < row.cells.length; i++)-->
      <!--{-->
        <!--if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';-->
      <!--}-->
    <!--}-->

  <!--}-->

  <!--document.getElementById("listDiv").onmouseout = function(e)-->
  <!--{-->
    <!--obj = Utils.srcElement(e);-->

    <!--if (obj)-->
    <!--{-->
      <!--if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;-->
      <!--else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;-->
      <!--else return;-->

      <!--for (i = 0; i < row.cells.length; i++)-->
      <!--{-->
          <!--if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';-->
      <!--}-->
    <!--}-->
  <!--}-->

  <!--document.getElementById("listDiv").onclick = function(e)-->
  <!--{-->
    <!--var obj = Utils.srcElement(e);-->

    <!--if (obj.tagName == "INPUT" && obj.type == "checkbox")-->
    <!--{-->
      <!--if (!document.forms['listForm'])-->
      <!--{-->
        <!--return;-->
      <!--}-->
      <!--var nodes = document.forms['listForm'].elements;-->
      <!--var checked = false;-->

      <!--for (i = 0; i < nodes.length; i++)-->
      <!--{-->
        <!--if (nodes[i].checked)-->
        <!--{-->
           <!--checked = true;-->
           <!--break;-->
         <!--}-->
      <!--}-->

      <!--if(document.getElementById("btnSubmit"))-->
      <!--{-->
        <!--document.getElementById("btnSubmit").disabled = !checked;-->
      <!--}-->
      <!--for (i = 1; i <= 10; i++)-->
      <!--{-->
        <!--if (document.getElementById("btnSubmit" + i))-->
        <!--{-->
          <!--document.getElementById("btnSubmit" + i).disabled = !checked;-->
        <!--}-->
      <!--}-->
    <!--}-->
  <!--}-->
<!--}-->
<!--</script>-->
</body>
</html>
<script src="../../../static/js/jquery.js"></script>
<script>
    $("#theForm").submit(function(event){
        //event.preventDefault();
        //获取当前添加分类的父级主键id 作为新添加类的parent_id
        var parent_id=$("#select :selected").val();
        var path=$("#select :selected").attr("path");
        //判断被选中的是否为顶级分类   如果是,其path为0  否则为path+"-"+parent_id
        if(parent_id==0){
            $("#path").val(0);
        }else{
            $("#path").val(path+"-"+parent_id);
        }

    })
</script>