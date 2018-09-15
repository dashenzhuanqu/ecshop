<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"G:\CodeFile\WWW\month12\perject\ecshop\ThinkPHP\public/../application/index\view\user\user_add.html";i:1536968526;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加会员 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../../static/css/general.css" rel="stylesheet" type="text/css" />
<link href="../../../static/css/main.css" rel="stylesheet" type="text/css" />
<script type="../../../text/javascript" src="static/js/transport.js"></script><script type="text/javascript" src="static/js/common.js"></script>
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
var no_username = "没有输入用户名。";
var invalid_email = "没有输入邮件地址或者输入了一个无效的邮件地址。";
var no_password = "没有输入密码。";
var less_password = "输入的密码不能少于六位。";
var passwd_balnk = "密码中不能包含空格";
var no_confirm_password = "没有输入确认密码。";
var password_not_same = "输入的密码和确认密码不一致。";
var invalid_pay_points = "消费积分数不是一个整数。";
var invalid_rank_points = "等级积分数不是一个整数。";
var password_len_err = "新密码和确认密码的长度不能小于6";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2Flocalhost%2Fda1%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
      <a class="btn btn-right" href="<?php echo url('user_list'); ?>">会员列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加会员 </span>
  <div style="clear:both"></div>
</h1><div class="main-div">
<form method="post" action="<?php echo url('user_add'); ?>" id
="fm">

<table width="100%" >
  <tr>
    <td class="label">会员名称:</td>
    <td><input type="text" name="user_name" maxlength="60" value="" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">邮件地址:</td>
    <td><input type="text" name="email" maxlength="60" size="40" value="" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">登录密码:</td>
    <td><input type="password" name="password" maxlength="20" size="20" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">确认密码:</td>
    <td><input type="password" name="repassword" maxlength="20" size="20" /><span class="require-field">*</span></td>
  </tr>

  <tr>
    <td class="label">性别:</td>
    <td><input type="radio" name="sex" value="0" checked>&nbsp;保密&nbsp;<input type="radio" name="sex" value="1">&nbsp;男&nbsp;<input type="radio" name="sex" value="2">&nbsp;女&nbsp;</td>
  </tr>
  <tr>
    <td class="label">出生日期:</td>
    <td>
        年：<select name="years" id="" style="text-align:center;">
          <option value="0">请选择</option>
          <?php for ($i=1990; $i<=2018 ; $i++) { ?>
          <option value="$i"><?php echo $i; ?></option>
          <?php } ?>
        </select>
        月：
        <select name="mouth" id="">
          <option value="0">请选择</option>
          <?php for ($i=1; $i<=13; $i++) { ?>
          <option value="$i"><?php echo $i; ?></option>
          <?php } ?>
        </select>
        日：
        <select name="day" id="">
          <option value="0">请选择</option>
          <?php for ($i=1; $i<=31; $i++) { ?>
          <option value="$i"><?php echo $i; ?></option>
          <?php } ?>
        </select>
    </td>
  </tr>
  <tr>
    <td class="label">信用额度:</td>
    <td><input name="user_money" type="text" id="credit_line" value="0" size="10" /></td>
  </tr>
    <tr>
    <td class="label">QQ:</td>
    <td>
    <input name="qq" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">办公电话:</td>
    <td>
    <input name="office_phone" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">家庭电话:</td>
    <td>
    <input name="home_phone" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">手机:</td>
    <td>
    <input name="phone" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
        <tr>
    <td colspan="2" align="center">
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
      <!-- <input type="hidden" name="act" value="insert" />
      <input type="hidden" name="id" value="" />    </td> -->
  </tr>
</table>

</form>
</div>


<div id="footer">
共执行 4 个查询，用时 0.028958 秒，Gzip 已禁用，内存占用 1.162 MB<br />
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

<script src="../../../static/jquery-2.1.4.min.js">
$(document).on("click",".button",function(){
     var fm = $("#fm").serialize();
     $.ajax({
        url:"<?php echo url('user/user_add'); ?>",
        data:{fm:fm},
        type:'post',
        // dataType:'json',
        contentType:false,
        //是否序列化
        processData:false,
        success:function(e)
        {
            if (e.status == 0) 
            {
              alert (e.msg);
              return ;
            } else {
              location.href("<?php echo url('user/user_list'); ?>");
            }
        }
     })
  })

  
</script>


</body>
</html>