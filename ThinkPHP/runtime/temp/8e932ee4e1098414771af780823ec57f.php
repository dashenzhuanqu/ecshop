<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/admin\view\admin\goods.html";i:1537269591;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="\">
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>文档_学习_饮料_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="admin/js/common.js"></script><script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <script type="text/javascript" src="admin/js/transport.js"></script><script type="text/javascript" src="admin/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 欢迎光临本店<a href="<?php echo url('user'); ?>">请登录 <strong></strong></a>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('user_register'); ?>">免费注册</a>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <a href="<?php echo url('user'); ?>" class="">用户中心</a>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <a href="<?php echo url('flow'); ?>" title="查看购物车">购物车(0)</a> </div>
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
<div class="goods-home">
  
<div class="block box">
  <div id="ur_here"> <div class="path"><div>当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">饮料</a> <code>&gt;</code> <a href="category.php?id=2">学习</a> <code>&gt;</code> 文档</div></div> </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaR">
    
    <div id="goodsInfo" class="clearfix">
      
      <div class="imgInfo">
                <a href="javascript:;" onclick="window.open('gallery.php?id=2'); return false;"> <img src="/admin/picture/72_thumb_g_1462956048008.jpg" alt="文档"/> </a>
                <div class="blank5"></div>
        
         <div class="clearfix">
      <span onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
      <div class="gallery">
        <div id="demo">
          <div id="demo1" style="float:left">
            <ul>
                         <li><a href="gallery.php?id=2&amp;img=2" target="_blank"><img src="admin/picture/72_thumb_g_1462956048008.jpg" alt="文档" class="B_blue" /></a>
            </li>
                        </ul>
          </div>
          <div id="demo2" style="display:inline; overflow:visible;"></div>
        </div>
      </div>
      <span onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span>
      <script>
      function $gg(id){  
        return (document.getElementById) ? document.getElementById(id): document.all[id]
      }
      var boxwidth=53;//跟图片的实际尺寸相符
      var box=$gg("demo");
      var obox=$gg("demo1");
      var dulbox=$gg("demo2");
      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      box.style.width=obox.getElementsByTagName("li").length*boxwidth*3+'px';
      var canroll = false;
      if (obox.getElementsByTagName("li").length >= 4){
        canroll = true;
        dulbox.innerHTML=obox.innerHTML;
      }
      var step=5;temp=1;speed=50;
      var awidth=obox.offsetWidth;
      var mData=0;
      var isStop = 1;
      var dir = 1;
      function s(){
        if (!canroll) return;
        if (dir) {
      if((awidth+mData)>=0)
      {
      mData=mData-step;
      }
      else
      {
      mData=-step;
      }
      } else {
        if(mData>=0)
        {
        mData=-awidth;
        }
        else
        {
        mData+=step;
        }
      }
      obox.style.marginLeft=mData+"px";
      if (isStop) return;
      setTimeout(s,speed)
      }
      function moveLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      function moveRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      function scrollStop() {
        isStop=1;
      }
      function clickLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      function clickRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      </script> 
     </div>
        <div class="blank5"></div>
          </div>
      <div class="textInfo">
        <form action="javascript:addToCart(2)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
          <div class="goods_style_name"> <strong><font color=#FE0000>文档</font></strong> </div>
          <ul>
                        <li class="clearfix">
              <dd>
                                <strong>商品货号：</strong>11                              </dd>
              <dd class="ddR">
                                                <strong>商品库存：</strong> 1                                               </dd>
            </li>
            <li class="clearfix">
              <dd>
                                <strong>商品品牌：</strong><a href="brand.php?id=2" >文档</a>
                              </dd>
              <dd class="ddR">
                                <strong>商品重量：</strong>0克                              </dd>
            </li>
            <li class="clearfix">
              <dd>
                                <strong>上架时间：</strong>2018-08-31                              </dd>
              <dd class="ddR">
                
                <strong>商品点击数：</strong>2 </dd>
                <dd class="ddR">
       
       <strong>累计销量：</strong>65535       </dd>
            </li>
            <li class="clearfix">
              <dd>
                                <strong>市场价格：</strong><font class="market">￥13元</font> </dd>
                            
              <dd><strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥11元</font> </dd>
                            <dd><strong>注册用户：</strong><font class="shop" id="ECS_RANKPRICE_1">￥11元</font> </dd>
                          </li>
                        <li class="padd"> <font class="f1">购买商品达到以下数量区间时可享受的优惠价格</font><br />
              <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
                <tr>
                  <td align="center" bgcolor="#FFFFFF"><strong>数量</strong></td>
                  <td align="center" bgcolor="#FFFFFF"><strong>优惠价格</strong></td>
                </tr>
                                <tr>
                  <td align="center" bgcolor="#FFFFFF" class="shop">11111</td>
                  <td align="center" bgcolor="#FFFFFF" class="shop">￥222元</td>
                </tr>
                              </table>
            </li>
                                    <li class="clearfix">
              <dd> <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font> </dd>
              <dd class="ddR">
                              </dd>
            </li>
                        <li class="clearfix">
              <dd> <strong>购买数量：</strong>
                <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/>
              </dd>
              <dd class="ddR">
                                <strong>购买此商品可使用：</strong><font class="f4">0 积分</font>
                              </dd>
            </li>
                        
                        
            <li class="padd">
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="td1"><a href="<?php echo url('flow'); ?>"><img src="admin/picture/buybtn1.png" /></a></td>
                  <td class="td2"><a href="<?php echo url('goods/user_collection_list'); ?>"><img src="admin/picture/bnt_colles.gif" /></a></td>
                                    <td class="td3"><a href="user.php?act=affiliate&goodsid=2"><img src='admin/picture/bnt_recommend.gif'></a> </td>
                                  </tr>
              </table>
            </li>
            
          </ul>
        </form>
      </div>
    </div>
    <div class="blank"></div>
    
    
    <div class="box clearfix">
      <div class="box_1 goods-boxg">
        <div class="box_top">
          <div id="com_b" class="history clearfix">
            <h2>商品描述：</h2>
            <h2 class="h2bg">商品属性</h2>
                      </div>
        </div>
        <div id="com_v" class="boxCenterList RelaArticle"></div>
        <div id="com_h">
          <blockquote>  </blockquote>
          <blockquote>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                          </table>
          </blockquote>
                  </div>
      </div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
    <div class="blank"></div>
    
     
     <div class="box">
     <div class="box_1">
      <h3><span class="text">商品标签</span></h3>
      <div class="boxCenterList clearfix ie6">
       <form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">
        <p id="ECS_TAGS" style="margin-bottom:5px;">
                  </p>
        <p>
          <input type="text" name="tag" id="tag" class="inputBg" size="35" />
          <input type="submit" value="添 加" class="bnt_blue" style="border:none;" />
          <input type="hidden" name="goods_id" value="2"  />
        </p>
                <script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                function submitTag(frm)
                {
                  try
                  {
                    var tag = frm.elements['tag'].value;
                    var idx = frm.elements['goods_id'].value;
                    if (tag.length > 0 && parseInt(idx) > 0)
                    {
                      Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                    }
                  }
                  catch (e) {alert(e);}
                  return false;
                }
                function submitTagResponse(result)
                {
                  var div = document.getElementById('ECS_TAGS');
                  if (result.error > 0)
                  {
                    alert(result.message);
                  }
                  else
                  {
                    try
                    {
                      div.innerHTML = '';
                      var tags = result.content;
                      for (i = 0; i < tags.length; i++)
                      {
                        div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                      }
                    }
                    catch (e) {alert(e);}
                  }
                }
                
                //]]>
                </script>
              </form>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
  <div id="ECS_BOUGHT"><div class="box">
     <div class="box_1">
      <h3><span class="text">购买记录</span>(近期成交数量<font class="f1">0</font>)</h3>
      <div class="boxCenterList">
               还没有人购买过此商品               
       <div id="buy_pagebar" class="f_r" style="margin-top:10px">
        <form name="selectPageForm" action="/ECShop_V4.0.0_UTF8_release0830/source/ecshop/goods.php" method="get">
                <div id="buy_pager">
          总计 0 个记录，共 1 页。 <span> <a href="javascript:gotoBuyPage(1,2)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
                    </div>
                </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
      <div class="blank5"></div>
      </div>
     </div>
    </div>
    <div class="blank5"></div></div> <div id="ECS_COMMENT"> <div class="box">
     <div class="box_1">
      <h3><span class="text">用户评论</span>(共<font class="f1">1</font>条评论)</h3>
      <div class="boxCenterList clearfix" style="height:1%;">
       <ul class="comments">
                      <li class="word">
        <font class="f2">匿名用户</font> <font class="f3">( 2018-09-07 16:14:32 )</font><br />
        <img src="admin/picture/stars5.gif" alt="" />
        <p>啊是的法规</p>
				        <p><font class="f1">管理员：</font>阿斯蒂芬</p>
				        </li>
                       </ul>
       
       <div id="pagebar" class="f_r">
        <form name="selectPageForm" action="/ECShop_V4.0.0_UTF8_release0830/source/ecshop/goods.php" method="get">
                <div id="pager">
          总计 1 个记录，共 1 页。 <span> <a href="javascript:gotoPage(1,2,0)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
                    </div>
                </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
      <div class="blank5"></div>
      
      <div class="commentsList">
      <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
       <table width="710" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td width="64" align="right">用户名：</td>
          <td width="631">匿名用户</td>
        </tr>
        <tr>
          <td align="right">E-mail：</td>
          <td>
          <input type="text" name="email" id="email"  maxlength="100" value="" class="inputBorder"/>
          </td>
        </tr>
        <tr>
          <td align="right">评价等级：</td>
          <td>
          <input name="comment_rank" type="radio" value="1" id="comment_rank1" /> <img src="admin/picture/stars1.gif" />
          <input name="comment_rank" type="radio" value="2" id="comment_rank2" /> <img src="admin/picture/stars2.gif" />
          <input name="comment_rank" type="radio" value="3" id="comment_rank3" /> <img src="admin/picture/stars3.gif" />
          <input name="comment_rank" type="radio" value="4" id="comment_rank4" /> <img src="admin/picture/stars4.gif" />
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" /> <img src="admin/picture/stars5.gif" />
          </td>
        </tr>
        <tr>
          <td align="right" valign="top">评论内容：</td>
          <td>
          <textarea name="content" class="inputBorder" style="height:50px; width:620px;"></textarea>
          <input type="hidden" name="cmt_type" value="0" />
          <input type="hidden" name="id" value="2" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
                    <div style="padding-left:15px; text-align:left; float:left;">
          验证码：<input type="text" name="captcha"  class="inputBorder" style="width:50px; margin-left:5px;"/>
          <img src="admin/picture/captcha.php" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha">
          </div>
                    <input name="" type="submit"  value="" class="f_r" style="border:none; background:url(static/images/commentsbnt.gif); width:75px; height:21px; margin-right:8px;">
          </td>
        </tr>
      </table>
      </form>
      </div>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
<script type="text/javascript">
//<![CDATA[
var cmt_empty_username = "请输入您的用户名称";
var cmt_empty_email = "请输入您的电子邮件地址";
var cmt_error_email = "电子邮件地址格式不正确";
var cmt_empty_content = "您没有输入评论的内容";
var captcha_not_null = "验证码不能为空!";
var cmt_invalid_comments = "无效的评论内容!";
/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;
  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;
  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }
//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }
  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }
   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }
   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }
   Ajax.call('comment.php', 'cmt=' + cmt.toJSONString(), commentResponse, 'POST', 'JSON');
   return false;
}
/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }
    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');
      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }
//]]>
</script></div>
  </div>
</div>
<div class="blank5"></div>
<div class="blank"></div>
</div>
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
var goods_id = 2;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 2;
var now_time = 1537165423;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</html>