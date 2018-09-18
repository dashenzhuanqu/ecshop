<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\user\user_account_add.html";i:1536913758;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form action="user_account.php" method="post" name="theForm" onsubmit="return validate()">
    <table width="100%">
      <tbody><tr>
        <td class="label">会员名称：</td>
        <td>
          <input type="text" name="user_id" value="" size="20">
        </td>
      </tr>
      <tr>
        <td class="label">金额：</td>
        <td>
          <input type="text" name="amount" value="" size="20">
        </td>
      </tr>
      <tr>
        <td class="label">支付方式：</td>
        <td>
          <select name="payment_id">
          <option value="">请选择...</option>
          <option value="余额支付">余额支付</option>
          <option value="银行汇款/转帐">银行汇款/转帐</option>
          <option value="天工收银">天工收银</option>
           </select>
        </td>
        
      </tr>
      <tr>
        <td class="label">类型：</td>
        <td>
          <input type="radio" name="process_type" value="0" checked="true">充值          <input type="radio" name="process_type" value="1">提现                  </td>
      </tr>
      <tr>
        <td class="label">管理员备注：</td>
        <td>
          <textarea name="admin_note" cols="55" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td class="label">会员描述：</td>
        <td>
          <textarea name="user_note" cols="55" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td class="label">到款状态：</td>
        <td>
          <input type="radio" name="is_paid" value="0" checked="true">未确认         
           <input type="radio" name="is_paid" value="1">已完成          
           <input type="radio" name="is_paid" value="2">取消 
        </td>
      </tr>
      <tr>
        <td class="label">&nbsp;</td>
        <td>
          <input type="hidden" name="id" value="">
          <input type="hidden" name="act" value="insert">
                    <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
                  </td>
      </tr>
    </tbody></table>
  </form>
  
</body>
</html>