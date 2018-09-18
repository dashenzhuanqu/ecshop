<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:106:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/admin\view\goods\user_collection_list.html";i:1537261717;}*/ ?>
﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
    <base href="\">
<title>用户中心_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="admin/js/transport.js"></script><script type="text/javascript" src="admin/js/common.js"></script><script type="text/javascript" src="admin/js/user.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <script type="text/javascript" src="admin/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 <font > 您好，<font class="f4_b">root</font>, 欢迎您回来！ <a href="<?php echo url('admin/user'); ?>">用户中心</a>| <a href="<?php echo url('user_logout'); ?>">退出</a> </font>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <a href="<?php echo url('admin/user'); ?>" class="">用户中心</a>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <a href="<?php echo url('admin/flow'); ?>" title="查看购物车">购物车(0)</a> </div>
    </div>
  </div>
</div>
<div class="nav-menu">
  <div class="wrap">
    <div class="logo"><a href="index.php" name="top"><img src="admin/picture/logo.gif" /></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul>
        <li><a href="index.php" class="cur">首页</a></li>
              </ul>
      </div>
    </div>
    <div class="serach-box">
      <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="135"><input name="keywords" type="text" id="keyword" value="" class="B_input"  /></td>
            <td><input name="imageField" type="submit" value="搜索" class="go" style="cursor:pointer;" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<div class="clear0 "></div>
<div class="block box">
  <div id="ur_here"> <div class="path"><div>当前位置: <a href=".">首页</a> <code>&gt;</code> 用户中心</div></div> </div>
</div>
<div class="blank"></div>
<div class="block clearfix userpage">
  <div class="AreaL">
    <div class="box">
      <div class="box_1">
        <div class="userCenterBox"> <div class="userMenu">
  <a href="<?php echo url('user_list'); ?>" ><img src="admin/picture/u1.gif"> 欢迎页</a>
  <a href="<?php echo url('user_profile'); ?>"><img src="admin/picture/u2.gif"> 用户信息</a>
  <a href="<?php echo url('user_order_list'); ?>"><img src="admin/picture/u3.gif"> 我的订单</a>
  <a href="<?php echo url('user_address_list'); ?>"><img src="admin/picture/u4.gif"> 收货地址</a>
  <a href="<?php echo url('user_collection_list'); ?>"><img src="admin/picture/u5.gif"> 我的收藏</a>
  <a href="<?php echo url('user_message_list'); ?>"><img src="admin/picture/u6.gif"> 我的留言</a>
  <a href="<?php echo url('user_tag_list'); ?>"><img src="admin/picture/u7.gif"> 我的标签</a>
  <a href="<?php echo url('user_booking_list'); ?>"><img src="admin/picture/u8.gif"> 缺货登记</a>
  <a href="<?php echo url('user_bonus'); ?>"><img src="admin/picture/u9.gif"> 我的红包</a>
  <a href="<?php echo url('user_affiliate'); ?>"><img src="admin/picture/u10.gif"> 我的推荐</a>
  <a href="<?php echo url('user_comment_list'); ?>"><img src="admin/picture/u11.gif"> 我的评论</a>
            <!--<a href="user.php?act=group_buy">我的团购</a>-->
  <a href="<?php echo url('user_track_packages'); ?>"><img src="admin/picture/u12.gif"> 跟踪包裹</a>
<a href="<?php echo url('user_account_log'); ?>"class="curs"><img src="admin/picture/u13.gif">资金管理</a>
  <a href="<?php echo url('user_logout'); ?>" style="background:none; text-align:right; margin-right:10px;"><img src="admin/picture/bnt_sign.gif"></a>
</div> </div>
      </div>
    </div>
  </div>
  <div class="AreaR">
    <div class="box">
      <div class="box_1">
        <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                              <h5><span>我的收藏</span></h5>
          <div class="blank"></div>
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr align="center">
              <th width="35%" bgcolor="#ffffff">商品名称</th>
              <th width="30%" bgcolor="#ffffff">价格</th>
              <th width="35%" bgcolor="#ffffff">操作</th>
            </tr>
                        <tr>
              <td bgcolor="#ffffff"><a href="goods.php?id=3" class="f6">联想</a></td>
              <td bgcolor="#ffffff">                本店售价：<span class="goods-price">￥4000元</span>
                              </td>
              <td align="center" bgcolor="#ffffff">                <a href="javascript:if (confirm('确定将此商品加入关注列表么？')) location.href='user.php?act=add_to_attention&rec_id=1'" class="f6">关注</a>
                                <a href="javascript:addToCart(3)" class="f6">加入购物车</a> <a href="javascript:if (confirm('您确定要从收藏夹中删除选定的商品吗？')) location.href='user.php?act=delete_collection&collection_id=1'" class="f6">删除</a> </td>
            </tr>
                      </table>
           <div class="page-form clearfix">

<form name="selectPageForm" action="/ECShop_V4.0.0_UTF8_release0830/source/ecshop/user.php" method="get">

  <div id="pager" class="pagebar">
                          </div>
  </form>
<script type="Text/Javascript" language="JavaScript">

function selectPage(sel)
{
  sel.form.submit();
}
</script>
</div>          <div class="blank5"></div>
          <h5><span>我的推荐</span></h5>
          <div class="blank"></div>
          <form name="theForm" method="post" action="">
            <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
              <tr>
                <td align="right" bgcolor="#ffffff">是否显示商品图片：</td>
                <td bgcolor="#ffffff"><select name="need_image" id="need_image" class="inputBg">
                    <option value="true" selected>显示</option>
                    <option value="false">不显示</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">显示商品数量：</td>
                <td bgcolor="#ffffff"><input name="goods_num" type="text" id="goods_num" value="6" class="inputBg" /></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">选择商品排列方式：</td>
                <td bgcolor="#ffffff"><select name="arrange" id="arrange" class="inputBg">
                    <option value="h" selected>横排</option>
                    <option value="v">竖排</option>
                  </select></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">排列显示条目数：</td>
                <td bgcolor="#ffffff"><input name="rows_num" type="text" id="rows_num" value="1" class="inputBg" /></td>
              </tr>
              <tr>
                <td align="right" bgcolor="#ffffff">选择编码：</td>
                <td bgcolor="#ffffff"><select name="charset" id="charset">

        <option value="UTF8">国际化编码（utf8）</option><option value="GB2312">简体中文</option><option value="BIG5">繁体中文</option>
                  </select></td>
              </tr>
              <tr>
                <td colspan="2" align="center" bgcolor="#ffffff"><input type="button" name="gen_code" value="生成代码" onclick="genCode()" class="bnt_blue_1" />
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center" bgcolor="#ffffff"><textarea name="code" cols="80" rows="5" id="code" class="B_blue"></textarea></td>
              </tr>
            </table>
          </form>
          <script language="JavaScript">
      var elements = document.forms['theForm'].elements;
      var url = 'http://127.0.0.1/ECShop_V4.0.0_UTF8_release0830/source/ecshop/';
      var u   = '2';
      /**
       * 生成代码
       */
      function genCode()
      {
          // 检查输入
          if (isNaN(parseInt(elements['goods_num'].value)))
          {
              alert('商品数量应该是整数');
              return;
          }
          if (elements['goods_num'].value < 1)
          {
              alert('商品数量应该大于0');
              return;
          }
          if (isNaN(parseInt(elements['rows_num'].value)))
          {
              alert('排列显示条目数应该是整数');
              return;
          }
          if (elements['rows_num'].value < 1)
          {
              alert('排列显示条目数应该大于0');
              return;
          }
          // 生成代码
          var code = '\<script src=static/js/d6935da80b4b4fb198d639deed469248.js"' + url + 'goods_script.php?';
          code += 'need_image=' + elements['need_image'].value + '&';
          code += 'goods_num=' + elements['goods_num'].value + '&';
          code += 'arrange=' + elements['arrange'].value + '&';
          code += 'rows_num=' + elements['rows_num'].value + '&';
          code += 'charset=' + elements['charset'].value + '&u=' + u;
          code += '\"\>\<\\script\>';
          elements['code'].value = code;
          elements['code'].select();
          if (Browser.isIE)
          {
              window.clipboardData.setData("Text",code);
          }
      }
	  var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
      var btn_buy = "购买";
      var is_cancel = "取消";
      var select_spe = "请选择商品属性";
  </script>
                    <div class="blank5"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="blank"></div>
<div class="foot-body">
  <div class="bads"><img src="admin/picture/bottom.jpg"></div>
  <div class="clear10"></div>
  <div class="blank"></div>
<div class="footer_info"> &copy; 2005-2018 ECSHOP 版权所有，并保留所有权利。       <br />
      <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v4.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F127.0.0.1%2FECShop_V4.0.0_UTF8_release0830%2Fsource%2Fecshop%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
            <div>ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank"></a></div>
    </div>
  <div class="clear10"></div>
</div>
</body>
<script type="text/javascript">
var msg_title_empty = "留言标题为空";
var msg_content_empty = "留言内容为空";
var msg_title_limit = "留言标题不能超过200个字";
</script>
</html>