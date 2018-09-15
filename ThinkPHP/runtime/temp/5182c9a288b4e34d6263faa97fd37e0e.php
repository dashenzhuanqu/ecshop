<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\quanxi\suppliers.html";i:1536908598;}*/ ?>
﻿<!-- $Id: agency_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 供货商列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general_2.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main_2.css" rel="stylesheet" type="text/css" />

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
      <a class="btn btn-right" href="./suppliers_add.html">添加供货商</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;供货商列表 </span>
  <div style="clear:both"></div>
</h1>
<!-- <script type="text/javascript" src="static/js/utils_2.js"></script>
<script type="text/javascript" src="static/js/listtable_2.js"></script> -->
<form method="post" action="" name="listForm" onsubmit="return confirm(batch_drop_confirm);">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th> <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
          <a href="javascript:listTable.sort('suppliers_id'); ">编号</a><img src="../../../static/picture/noauthorize.png"> </th>
      <th><a href="javascript:listTable.sort('suppliers_name'); ">供货商名称</a></th>
      <th>供货商描述</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
        <?php foreach ($list as $key => $v) { ?>
          <tr>
      <td><input type="checkbox" name="checkboxes[]" value="<?=$v['suppliers_id'];?>" />
        <?=$v['suppliers_id'];?></td>
      <td class="first-cell">
        <span onclick="javascript:listTable.edit(this, 'edit_suppliers_name', <?=$v['suppliers_id'];?>)"><?=$v['suppliers_name']?>      </span></td>
      <td><?=$v['suppliers_desc']?></td>
     <td align="center">
        <?php if(in_array(($v['is_check']), explode(',',"1"))): ?>
        <img src="../../../static/picture/yes.svg" class="is_check" id="<?php echo $v['suppliers_id']; ?>" value="<?php echo $v['is_check']; ?>" width="20"/>
        <?php else: ?>
        <img src="../../../static/picture/no.svg" class="is_check" id="<?php echo $v['suppliers_id']; ?>" value="<?php echo $v['is_check']; ?>" width="20"/>
      <?php endif; ?>
      <td align="center">
        <a href="suppliers_edit.html?id=<?=$v['suppliers_id'];?>" title="编辑">编辑</a> |
        <a href="javascript:void(0);" onclick="listTable.remove(<?=$v['suppliers_id'];?>, '您确认要删除这条记录吗?')" title="移除">移除</a>      </td>
    </tr>
        <?php } ?>
        <!-- <tr>
      <td><input type="checkbox" name="checkboxes[]" value="2" />
        2</td>
      <td class="first-cell">
        <span onclick="javascript:listTable.edit(this, 'edit_suppliers_name', 2)">上海供货商      </span></td>
      <td>上海供货商</td>
			<td align="center"><img src="static/picture/yes_1.svg" width="20" onclick="listTable.toggle(this, 'is_check', 2)" style="cursor:pointer;"/></td>
      <td align="center">
        <a href="suppliers.php?act=edit&id=2" title="编辑">编辑</a> |
        <a href="javascript:void(0);" onclick="listTable.remove(2, '您确认要删除这条记录吗?')" title="移除">移除</a>      </td>
    </tr> -->
      </table>
<!-- <table id="page-table" cellspacing="0">
  <tr>
    <td>
      <input name="remove" type="submit" id="btnSubmit" value="删除" class="button" disabled="true" />
      <input name="act" type="hidden" value="batch" />
    </td>
  </tr>
</table> -->
  <?php echo $list->render(); ?>
</div>
</form>
<div id="footer">
共执行 4 个查询，用时 0.013437 秒，Gzip 已禁用，内存占用 1.113 MB<br />
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


<script src="../../../static/js/jquery-2.1.4.min.js"></script>
<script>
  $(document).on("click",".is_check",function()
  {
    var is_check = $(this).attr("value");
    var suppliers_id = $(this).attr("id");
    var _this = $(this);
      $.ajax({
        url:"<?php echo url('quanxi/ajaxChangeStatus'); ?>",
        type:'get',
        data:{is_check:is_check,suppliers_id:suppliers_id},
        // dataType:'json',
        contentType:'false',
        success:function(e)
        {
          if (e.status==1) 
          {
            alert(e.msg);
            return false;
          } else {
            if (is_check == 1) 
            {
                _this.prop("src","../../../static/picture/no.svg");
                _this.attr("value","0");
            } else {
                _this.prop("src","../../../static/picture/yes.svg");
                _this.attr("value","1");
            }
          }
        }

      })
  })

</script>

<!--
<embed src="static/flash/online_2.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>


// <script language="JavaScript">
// document.onmousemove=function(e)
// {
//   var obj = Utils.srcElement(e);
//   if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
//   {
//     obj.title = '点击修改内容';
//     obj.style.cssText = 'background-color: #eee;';
//     obj.onmouseout = function(e)
//     {
//       this.style.cssText = '';
//     }
//   }
//   else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
//   {
//     obj.title = '点击对列表排序';
//   }
// }
// <!--


// var MyTodolist;
// function showTodoList(adminid)
// {
//   if(!MyTodolist)
//   {
//     var global = $import("../js/global.js","js");
//     global.onload = global.onreadystatechange= function()
//     {
//       if(this.readyState && this.readyState=="loading")return;
//       var md5 = $import("js/md5.js","js");
//       md5.onload = md5.onreadystatechange= function()
//       {
//         if(this.readyState && this.readyState=="loading")return;
//         var todolist = $import("js/todolist.js","js");
//         todolist.onload = todolist.onreadystatechange = function()
//         {
//           if(this.readyState && this.readyState=="loading")return;
//           MyTodolist = new Todolist();
//           MyTodolist.show();
//         }
//       }
//     }
//   }
//   else
//   {
//     if(MyTodolist.visibility)
//     {
//       MyTodolist.hide();
//     }
//     else
//     {
//       MyTodolist.show();
//     }
//   }
// }

// if (Browser.isIE)
// {
//   onscroll = function()
//   {
//     //document.getElementById('calculator').style.top = document.body.scrollTop;
//     document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
//   }
// }

// if (document.getElementById("listDiv"))
// {
//   document.getElementById("listDiv").onmouseover = function(e)
//   {
//     obj = Utils.srcElement(e);

//     if (obj)
//     {
//       if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
//       else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
//       else return;

//       for (i = 0; i < row.cells.length; i++)
//       {
//         if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
//       }
//     }

//   }

//   document.getElementById("listDiv").onmouseout = function(e)
//   {
//     obj = Utils.srcElement(e);

//     if (obj)
//     {
//       if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
//       else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
//       else return;

//       for (i = 0; i < row.cells.length; i++)
//       {
//           if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
//       }
//     }
//   }

//   document.getElementById("listDiv").onclick = function(e)
//   {
//     var obj = Utils.srcElement(e);

//     if (obj.tagName == "INPUT" && obj.type == "checkbox")
//     {
//       if (!document.forms['listForm'])
//       {
//         return;
//       }
//       var nodes = document.forms['listForm'].elements;
//       var checked = false;

//       for (i = 0; i < nodes.length; i++)
//       {
//         if (nodes[i].checked)
//         {
//            checked = true;
//            break;
//          }
//       }

//       if(document.getElementById("btnSubmit"))
//       {
//         document.getElementById("btnSubmit").disabled = !checked;
//       }
//       for (i = 1; i <= 10; i++)
//       {
//         if (document.getElementById("btnSubmit" + i))
//         {
//           document.getElementById("btnSubmit" + i).disabled = !checked;
//         }
//       }
//     }
//   }

// }

// //-->
// </script>
</body>
</html>