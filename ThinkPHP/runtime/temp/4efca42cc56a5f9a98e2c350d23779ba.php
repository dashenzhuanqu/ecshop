<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:95:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/admin\view\goods\user_show.html";i:1537427758;s:83:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\header.html";i:1537514909;s:81:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\tail.html";i:1537343751;}*/ ?>
﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="\">
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta name="Description" content="" />
<meta http-equiv="refresh" content="3;URL=http://www.ecshop4.com/index.php" />
<title>系统提示_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="admin/js/common.js"></script><style type="text/css">
p a{color:#006acd; text-decoration:underline;}
</style>
</head>
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
<div class="blank"></div>
<div class="block">
  <div class="box">
   <div class="box_1">
    <h3><span>系统信息</span></h3>
    <div class="boxCenterList RelaArticle" align="center">
      <div style="margin:20px auto;">
          <?php if(empty($_SESSION)){ ?>
          <p style="font-size: 14px; font-weight:bold; color: red;">您已经成功的退出了。</p>
          <div class="blank"></div>
          <p><a href="http://www.ecshop4.com/index.php">返回上一页</a></p>
                    <p><a href="index.php">返回首页</a></p>
          <?php }else{ ?>
          <p style="font-size: 14px; font-weight:bold; color: red;">登陆成功。</p>
          <div class="blank"></div>
          <p><a href="http://www.ecshop4.com/index.php">返回上一页</a></p>
                    <p><a href="<?php echo url('goods/user_list'); ?>">查看我的个人信息</a></p>
          <?php }?>
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
</html>