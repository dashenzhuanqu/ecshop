<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:95:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/admin\view\goods\user_list.html";i:1537414495;s:83:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\header.html";i:1537514909;s:79:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\in.html";i:1537361785;s:81:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\tail.html";i:1537343751;}*/ ?>
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
<div class="top-bar">
    <div class="fd_top fd_top1">
        <div class="bar-left">
            <div class="top_menu1">
                <script type="text/javascript" src="admin/js/transport.js"></script>
                <script type="text/javascript" src="admin/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                <?php if(empty($_SESSION)){ ?>
                欢迎光临本店<a href="<?php echo url('admin/user'); ?>">请登录 <strong></strong></a>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('admin/user_register'); ?>">免费注册</a>  </font>
                <?php }else{ ?>
            <font > 您好，<font class="f4_b"><?php echo $username; ?></font>, 欢迎您回来！ <a href="<?php echo url('goods/user_list'); ?>">用户中心</a>| <a href="<?php echo url('admin/user_logout'); ?>">退出</a> </font>  </font>
                <?php }?>
        </div> </div>
        <div class="bar-cart">
            <div class="fl cart-yh">
                <a href="<?php echo url('goods/user_list'); ?>" class="">用户中心</a>
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
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('admin/category'); ?>?id=<?php echo $v['cat_id']; ?>" class="cur"><?php echo $v['cat_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="serach-box">
            <form id="searchForm" name="searchForm" method="get" action="<?php echo url('category'); ?>" onSubmit="return checkSearchForm()" class="f_r">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="135"><input name="keywords" type="text" id="keyword" value="" class="B_input"/></td>
                        <td><input name="imageField" type="submit" value="搜索" class="go" style="cursor:pointer;"/></td>
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
        <div class="userCenterBox">
            <div class="userMenu">
            <a href="<?php echo url('goods/user_list'); ?>" ><img src="admin/picture/u1.gif"> 欢迎页</a>
<a href="<?php echo url('goods/user_profile'); ?>"><img src="admin/picture/u2.gif"> 用户信息</a>
<a href="<?php echo url('goods/user_order_list'); ?>"><img src="admin/picture/u3.gif"> 我的订单</a>
<a href="<?php echo url('goods/user_address_list'); ?>"><img src="admin/picture/u4.gif"> 收货地址</a>
<a href="<?php echo url('goods/user_collection_list'); ?>"><img src="admin/picture/u5.gif"> 我的收藏</a>
<a href="<?php echo url('goods/user_message_list'); ?>"><img src="admin/picture/u6.gif"> 我的留言</a>
<a href="<?php echo url('goods/user_tag_list'); ?>"><img src="admin/picture/u7.gif"> 我的标签</a>
<a href="<?php echo url('goods/user_booking_list'); ?>"><img src="admin/picture/u8.gif"> 缺货登记</a>
<a href="<?php echo url('goods/user_bonus'); ?>"><img src="admin/picture/u9.gif"> 我的红包</a>
<a href="<?php echo url('goods/user_affiliate'); ?>"><img src="admin/picture/u10.gif"> 我的推荐</a>
<a href="<?php echo url('goods/user_comment_list'); ?>"><img src="admin/picture/u11.gif"> 我的评论</a>
<!--<a href="user.php?act=group_buy">我的团购</a>-->
<a href="<?php echo url('goods/user_track_packages'); ?>"><img src="admin/picture/u12.gif"> 跟踪包裹</a>
<a href="<?php echo url('goods/user_account_log'); ?>"class="curs"><img src="admin/picture/u13.gif"> 资金管理</a>
<a href="<?php echo url('goods/user_logout'); ?>" style="background:none; text-align:right; margin-right:10px;"><img src="admin/picture/bnt_sign.gif"></a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="AreaR">
    <div class="box">
      <div class="box_1">
        <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                    <font class="f5"><b class="f4"><?php echo $username; ?></b> 欢迎您回到 ECSHOP！</font><br />
          <div class="blank"></div>
          您的上一次登录时间: 2018-09-17 16:09:05<br />
          <div class="blank5"></div>
          您的等级是 注册用户  <br />
          <div class="blank5"></div>
                    您还没有通过邮件认证 <a href="javascript:sendHashMail()" style="color:#006bd0;">点此发送认证邮件</a><br />
                    <div style="margin:5px 0; border:1px solid #a1675a;padding:10px 20px; background-color:#e8d1c9;"> <img src="admin/picture/note.gif" alt="note" />&nbsp;用户中心公告！ </div>
          <br />
          <br />
          <div class="f_l" style="width:350px;">
            <h5><span>您的账户</span></h5>
            <div class="blank"></div>
            余额:<a href="user.php?act=account_log" style="color:#006bd0;">￥0.00元</a><br />
                        红包:<a href="user.php?act=bonus" style="color:#006bd0;">共计 0 个,价值 ￥0.00元</a><br />
            积分:0积分<br />
          </div>
          <div class="f_r" style="width:350px;">
            <h5><span>用户提醒</span></h5>
            <div class="blank"></div>
                        您最近30天内提交了0个订单<br />
                      </div>
                    <div class="blank5"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="blank"></div>
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