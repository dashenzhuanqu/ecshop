<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"G:\CodeFile\WWW\month12\perject\ecshop\ThinkPHP\public/../application/index\view\user\user_list.html";i:1536908265;}*/ ?>
﻿<!-- $Id: users_list.htm 17053 2010-03-15 06:50:26Z sxc_shop $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 会员列表 </title>
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

  a{
    text-decoration: none;
  }
</style>
<h3><span id="time"></span></h3><a href="">退出</a> 
 <script>
// <!--
// // 这里把JS用到的所有语言都赋值到这里
// var process_request = "正在处理您的请求...";
// var todolist_caption = "记事本";
// var todolist_autosave = "自动保存";
// var todolist_save = "保存";
// var todolist_clear = "清除";
// var todolist_confirm_save = "是否将更改保存到记事本？";
// var todolist_confirm_clear = "是否清空内容？";
// var no_username = "没有输入用户名。";
// var invalid_email = "没有输入邮件地址或者输入了一个无效的邮件地址。";
// var no_password = "没有输入密码。";
// var less_password = "输入的密码不能少于六位。";
// var passwd_balnk = "密码中不能包含空格";
// var no_confirm_password = "没有输入确认密码。";
// var password_not_same = "输入的密码和确认密码不一致。";
// var invalid_pay_points = "消费积分数不是一个整数。";
// var invalid_rank_points = "等级积分数不是一个整数。";
// var password_len_err = "新密码和确认密码的长度不能小于6";
// //-->
// /*关闭按钮*/
//   function get_certificate(){
// 	  var panel = document.getElementById('panelCloud');
// 	  var mask  = document.getElementById('CMask')||null;
// 	  var frame = document.getElementById('CFrame');
// 	  if(panel&&CMask&&frame){
// 	      panel.style.display = 'block';
// 	      mask.style.display = 'block';
// 	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2Flocalhost%2Fda1%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
// 	    }
// 	}

// 	/*关闭按钮*/
// 	function btnCancel(item){
// 	  var par  = item.offsetParent;
// 	  var mask  = document.getElementById('CMask')||null;
// 	  var frame = document.getElementById('CFrame');
// 	  par.style.display = 'none';
// 	  if(mask){mask.style.display = 'none';}
// 	  frame.src = '';
// 	}
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
    <a class="btn btn-right action-span6" href="http://yunqi.shopex.cn/products/crm" target="_blank">开通会员高级管理</a>
      <a class="btn btn-right" href="<?php echo url('user/user_add'); ?>">添加会员</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;会员列表 </span>
  <div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="<?php echo url('user/user_search'); ?>">
    &nbsp;会员等级 <select name="user_rank"><option value="0">所有等级</option><option value="1">注册用户</option><option value="3">代销用户</option><option value="2">vip</option></select>

    &nbsp;会员积分大于&nbsp;<input type="text" name="pay_points" size="8" />&nbsp;会员积分小于&nbsp;<input type="text" name="rank_points" size="10" />
    &nbsp;会员名称 &nbsp;<input type="text" name="keyword" />
     <input type="submit" class="button" value=" 搜索 ">
  </form>

</div>



<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">

<!-- start users list -->
<div class="list-div" id="listDiv">
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      <a href="javascript:listTable.sort('user_id'); ">编号</a><img src="../../../static/picture/sort_desc.png">    </th>
    <th><a href="javascript:listTable.sort('user_name'); ">会员名称</a></th>
    <th><a href="javascript:listTable.sort('email'); ">邮件地址</a></th>
    <th>是否已验证</th>
    <th>可用资金</th>
    <th>冻结资金</th>
    <th>等级积分</th>
    <th>消费积分</th>
    <th><a href="javascript:listTable.sort('reg_time'); ">注册日期</a></th>
    <th>操作</th>
  <tr>
  <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr>
    <td><input type="checkbox" name="checkboxes[]"  notice="0"/><?php echo $v['user_id']; ?></td>
    <td class="first-cell"><?php echo $v['user_name']; ?></td>
    <td><span onclick="listTable.edit(this, 'edit_email', 2)"><?php echo $v['email']; ?></span></td>
    <td align="center">
    <?php if(in_array(($v['status']), explode(',',"1"))): ?>
    <img src="../../../static/picture/yes.svg" class="status" id="<?php echo $v['user_id']; ?>" value="<?php echo $v['status']; ?>" width="20"/>
    <?php else: ?>
    <img src="../../../static/picture/no.svg" class="status" id="<?php echo $v['user_id']; ?>" value="<?php echo $v['status']; ?>" width="20"/>
    <?php endif; ?>
    </td>
    <td><?php echo $v['user_money']; ?></td>
    <td><?php echo $v['frozen_money']; ?></td>{
        <td><?php echo $v['pay_points']; ?></td>
        <td><?php echo $v['rank_points']; ?></td>
        <td align="center"><?php echo $v['reg_time']; ?></td>
        <td align="center">
          <a href="/index/user/user_upd/?user_id=<?= $v['user_id']?>" title="编辑">编辑</a>|
      <a href="/index/user/del/?user_id=<?= $v['user_id']?>" title="移除">移除</a>
    </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php echo $data->render(); ?>

</div>
<!-- end users list -->
</form>
<script src="../../../static/js/jquery-2.1.4.min.js"></script>
<script>

function show(){
  var date = new Date();
  var a = date.toLocaleString();
  document.getElementById('time').innerHTML = a;
}
setInterval('show()',1000);



    $(document).on('click','.status',function(){
        var status = $(this).attr('value');
        var user_id = $(this).attr('id');
        // alert(user_id)
        var obj = $(this);
        $.ajax({
            url:"<?php echo url('user/user_change_name'); ?>",
            data:{status:status,user_id:user_id},
            dataType:"json",
            success:function(res){
                if(res.status==1){
                    alert(res.msg);
                    return false;
                }else{
                    if(status==1){
                        obj.prop("src","../../../static/picture/no.svg");
                        obj.attr("value",0)
                    }else{
                        obj.prop("src","../../../static/picture/yes.svg");
                        obj.attr("value",1)
                    }
                }
            }
        })
    })
</script>
 <div id="footer">
共执行 6 个查询，用时 0.037280 秒，Gzip 已禁用，内存占用 1.166 MB<br />
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
  <embed src="../../../static/images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>


</body>
</html>