<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"G:\CodeFile\WWW\month12\perject\ecshop\ThinkPHP\public/../application/admin\view\admin\index.html";i:1537363214;s:89:"G:\CodeFile\WWW\month12\perject\ecshop\ThinkPHP\application\admin\view\module\header.html";i:1537357078;s:87:"G:\CodeFile\WWW\month12\perject\ecshop\ThinkPHP\application\admin\view\module\tail.html";i:1537349429;}*/ ?>
﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="\">
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - Powered by ECShop" href="feed.php" />
<link rel="stylesheet" type="text/css" href="admin/css/swiper.min.css">
<script language='javascript' src='admin/js/swiper.min.js' type='text/javascript' charset='utf-8'></script>
<script type="text/javascript" src="admin/js/common.js"></script><script type="text/javascript" src="admin/js/index.js"></script></head>
<body>
<div class="top-bar">
    <div class="fd_top fd_top1">
        <div class="bar-left">
            <div class="top_menu1">
                <script type="text/javascript" src="admin/js/transport.js"></script>
                <script type="text/javascript" src="admin/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>


                欢迎光临本店<a href="<?php echo url('admin/user'); ?>">请登录 <strong></strong></a>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('admin/user_register'); ?>">免费注册</a>  </font>


            <font > 您好，<font class="f4_b">root</font>, 欢迎您回来！ <a href="<?php echo url('admin/user'); ?>">用户中心</a>| <a href="<?php echo url('user_logout'); ?>">退出</a> </font>  </font>

            
        </div> </div>
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
                    <li><a href="<?php echo url('category'); ?>" class="cur">电器</a></li>
                    <li><a href="<?php echo url('category'); ?>" class="cur">电子产品</a></li>
                    <li><a href="<?php echo url('category'); ?>" class="cur">医疗设备</a></li>
                </ul>
            </div>
        </div>
        <div class="serach-box">
            <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r">
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


<script>
if (Object.prototype.toJSONString){
        var oldToJSONString = Object.toJSONString;
        Object.prototype.toJSONString = function(){
            if (arguments.length > 0){
            return false;
            }else{
            return oldToJSONString.apply(this, arguments);
            }
        }
    }
</script>
    <div class="indexpage clearfix">
        <div class="index-cat">
            <div class="category_info">
                <div id="category_tree">
                    <?php foreach ($cat_data as $key => $value) { ?>
                    <div class="cat-box">
                        <div class="cat1">
                            <a href="http://www.ecshop4.com/admin/admin/goods.html?cat_id=<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a>
                        </div>
                        <div class="cat2-box">
                            <?php foreach ($value['son'] as $key => $val) { ?>
                            <div class="cat2 clearfix">
                                <a class="cat2-link" href="http://www.ecshop4.com/admin/admin/goods.html?cat_id=<?php echo $val['cat_id']; ?>"><?php echo $val['cat_name']; ?></a>
                                <div class="cat3-block">
    
                                </div>
                                <div class="cat3-box">
                                    <?php foreach ($val['son'] as $key => $v) { ?>
                                    <a href="http://www.ecshop4.com/admin/admin/goods.html?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a>&nbsp;&nbsp;
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="clear0"></div>
                </div>
                <div class="clear0"></div>
            </div>
        </div>
        <div class="index-banner">
            <style>
                .swiper-container {
                    width: 100%;
                    height: 100%;
                }
                .swiper-slide {
                    text-align: center;
                    font-size: 18px;
                    background: #fff;
                    /* Center slide text vertically */
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    -webkit-align-items: center;
                    align-items: center;
                }
            </style>
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <img src="/uploads/<?php echo $v['ad_img']; ?>" alt="">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>
            <script>
               var swiper = new Swiper('.swiper1', {
                   pagination: '.swiper-pagination',
                   nextButton: '.swiper-button-next',
                   prevButton: '.swiper-button-prev',
                   paginationClickable: true,
                   spaceBetween: 2,
                   centeredSlides: true,
                   autoplay: 4000,
                   loop:true,
                   autoplayDisableOnInteraction: false
               });
            </script>
        </div>
    </div>

<div class="index-body">
    <div class="indexpage">
        <div class="body-goods">
            <div class="goods-title">1F 家用电器</div>
            <div class="clearfix goods-wrap">
                <div class="goods-leftad">
sasdf
                </div>
                <div class="goods-right">
                    <div class="all_ms">
                       
                        <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <a class="goodsItem" href="<?php echo url('admin/goods',['id'=>$v['g_id']]); ?>"> <div  class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="智能相机" class="goodsimg" /></div>
                            <div class="goods-brief"></div>
                            <div class="gos-title"><?php echo $v['goods_name']; ?></div>
                            <div class="prices">
                                <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?>元</b></font>
                            </div>
                        </a>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                      
                        <div class="clear0"></div>
                    </div>
                </div>
            </div>
            <div class="goods-title">2F 数码时尚</div>
            <div class="clearfix goods-wrap">
                <div class="goods-leftad">
                    <div style="margin-top:12px;">
                    </div>        </div>
                <div class="goods-right">
                    <div class="all_ms">
                            <?php if(is_array($goods1) || $goods1 instanceof \think\Collection || $goods1 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <a class="goodsItem" href="<?php echo url('admin/goods',['id'=>$v['g_id']]); ?>"> <div  class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="智能相机" class="goodsimg" /></div>
                                <div class="goods-brief"></div>
                                <div class="gos-title"><?php echo $v['goods_name']; ?></div>
                                <div class="prices">
                                    <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?>元</b></font>
                                </div>
    
                            </a>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="clear0"></div>
                    </div>
                </div>
            </div>
            <div class="goods-title">3F 家居生活</div>
            <div class="clearfix goods-wrap">
                <div class="goods-leftad">

                </div>
                <div class="goods-right">
                    <div class="all_ms">
                            <?php if(is_array($goods2) || $goods2 instanceof \think\Collection || $goods2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <a class="goodsItem" href="<?php echo url('admin/goods',['id'=>$v['g_id']]); ?>"> <div  class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="智能相机" class="goodsimg" /></div>
                                <div class="goods-brief"></div>
                                <div class="gos-title"><?php echo $v['goods_name']; ?></div>
                                <div class="prices">
                                    <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?>元</b></font>
                                </div>
    
                            </a>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="clear0"></div>
                    </div>
                </div>
            </div>
            <div class="goods-title">热门商品推荐</div>
            <div class="clearfix goods-wrap hot-goods">
                <div id="show_hot_area" class="clearfix goodsBox all_mid all_ms">
                 <?php if(is_array($goods_hot) || $goods_hot instanceof \think\Collection || $goods_hot instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <a class="goodsItem" href="<?php echo url('admin/goods',['id'=>$v['g_id']]); ?>"> 
                        <div  class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="<?php echo $v['goods_name']; ?>" class="goodsimg" />
                        </div>
                        <div class="goods-brief"></div>
                        <div class="gos-title"><?php echo $v['goods_name']; ?></div>
                        <div class="prices">
                            <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?>元</b></font>
                        </div>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="clear0"></div>
                </div> 
                <div class="clear10"></div>
            </div>
        </div>
    </div>
</div>
<div class="foot-body">
    <div class="clear10"></div>
    <div class="foot-help">
        <dl>
            <dt class="xs-1">新手上路 </dt>
            <dd><a href="article.php?id=9" target="_blank" title="售后流程">售后流程</a></dd>
            <dd><a href="article.php?id=10" target="_blank" title="购物流程">购物流程</a></dd>
            <dd><a href="article.php?id=11" target="_blank" title="订购方式">订购方式</a></dd>
        </dl>
        <dl>
            <dt class="xs-2">手机常识 </dt>
            <dd><a href="article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></dd>
            <dd><a href="article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
            <dd><a href="article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></dd>
        </dl>
        <dl>
            <dt class="xs-3">配送与支付 </dt>
            <dd><a href="article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></dd>
            <dd><a href="article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></dd>
            <dd><a href="article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt class="xs-4">会员中心</dt>
            <dd><a href="article.php?id=18" target="_blank" title="资金管理">资金管理</a></dd>
            <dd><a href="article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></dd>
            <dd><a href="article.php?id=20" target="_blank" title="我的订单">我的订单</a></dd>
        </dl>
        <div class="foot-weixin">
            <div class="weixin-txt">关注demo微信</div>
            <div class="weixin-pic">
                <img src="/admin/picture/weixin.jpg">
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
</div>
</body>
</html>