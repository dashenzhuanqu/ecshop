<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/admin\view\admin\category.html";i:1537446046;s:83:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\header.html";i:1537514861;s:81:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\application\admin\view\module\tail.html";i:1537343751;}*/ ?>
﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="\">
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>学习_饮料_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="admin/js/common.js"></script><script type="text/javascript" src="admin/js/global.js"></script><script type="text/javascript" src="admin/js/compare.js"></script></head>
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
            <font > 您好，<font class="f4_b"><?php echo $username; ?></font>, 欢迎您回来！ <a href="<?php echo url('goods/user_list'); ?>">用户中心</a>| <a href="<?php echo url('module/user_logout'); ?>">退出</a> </font>  </font>
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
 <div class="category-body">
  <div id="ur_here"> <div class="path"><div>当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">饮料</a> <code>&gt;</code> <a href="category.php?id=2">学习</a></div></div> </div>
<div class="block clearfix">
  <div class="Area">
        <div class="guige">
            <div class="screeBox"> <strong>品牌：</strong>
                        <span>全部</span>
             <a href="category.php?id=2&amp;brand=2&amp;price_min=0&amp;price_max=0">文档</a>
        </div>
        <div class="clear0"></div>
    </div>
<div class="prclist">
  <div class="displaylist">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="tdl"><span></span>相关商品<b>1</b>个 </td>
        <td><a name='goods_list'></a></td>
        <td class="tdr"><table border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td>排序：</td>
              <td><form method="GET" class="sort list-paixu" name="listform">
                    <a href="category.php?category=2&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="admin/picture/goods_id_desc.gif" alt="按上架时间排序"></a> <a href="category.php?category=2&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="admin/picture/shop_price_default.gif" alt="按价格排序"></a> <a href="category.php?category=2&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="admin/picture/last_update_default.gif" alt="按更新时间排序"></a>
                  <input type="hidden" name="category" value="2" />
                  <input type="hidden" name="display" value="grid" id="display" />
                  <input type="hidden" name="brand" value="0" />
                  <input type="hidden" name="price_min" value="0" />
                  <input type="hidden" name="price_max" value="0" />
                  <input type="hidden" name="filter_attr" value="0" />
                  <input type="hidden" name="page" value="1" />
                  <input type="hidden" name="sort" value="goods_id" />
                  <input type="hidden" name="order" value="DESC" />
                </form></td>
            </tr>
          </table></td>
      </tr>
    </table>
  </div>
  <div class="blank5"></div>
    <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
            <div class="centerPadd">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <div class="clearfix goodsBox" style="border:none;">
                        <div class="goodsItem"> <a href="<?php echo url('goods'); ?>?id=<?php echo $v['g_id']; ?>" class="img-box"><img src="admin/picture/3_thumb_g_1536199224277.jpg" alt="文档" class="goodsimg" /></a>
        <div class="goods-info">
            <div class="goods-title"><a href="<?php echo url('goods'); ?>?id=<?php echo $v['g_id']; ?>" title="文档"><?php echo $v['goods_name']; ?></a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥<?php echo $v['goods_price']; ?></div>
              <a class="price-btn" href="<?php echo url('flow'); ?>">立即购买</a>
            </div>
        </div>
        </div>
        </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
          </form>
  </div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
function selectPage(sel)
{
  sel.form.submit();
}
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
 <div class="page-form clearfix">
<form name="selectPageForm" action="/ECShop_V4.0.0_UTF8_release0830/source/ecshop/category.php" method="get">
  <div id="pager" class="pagebar">
                          </div>
  </form>
<script type="Text/Javascript" language="JavaScript">
function selectPage(sel)
{
  sel.form.submit();
}
</script>
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
</html>