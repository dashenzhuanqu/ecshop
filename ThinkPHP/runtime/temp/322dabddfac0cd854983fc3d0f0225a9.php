<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\goods\brand_list.html";i:1536828133;}*/ ?>
﻿<!-- $Id: brand_list.htm 15898 2009-05-04 07:25:41Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="../../../static/">
    <title>ECSHOP 管理中心 - 商品品牌 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/general.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <style>
        .panel-icloud .panel-right iframe {
            height: 300px;
            margin-top: 15px;
        }
        .panel-hint{
            top: 0%;
        }
    </style>

</head>
<body>
<!--云起激活系统面板-->
<div class="panel-hint panel-icloud" id="panelCloud">
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
</div>
<!--云起激活系统面板-->
<!--遮罩-->
<div class="mask-black" id="CMask"></div>
<!--遮罩-->
<h1>
    <a class="btn btn-right" href="/index/goods/brand_add">添加品牌</a>

    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品品牌 </span>
    <div style="clear:both"></div>
</h1><!-- 品牌搜索 -->
<!-- $Id: brand_search.htm 2009-05-04 liuhui $ -->
<!--<div class="form-div">-->
<form action="<?php echo url('goods/brand_list'); ?>">
    <img src="picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
    <input type="text" name="search" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
</form>
<!--</div>-->

<!--<script language="JavaScript">-->
<!--function search_brand()-->
<!--{-->
<!--listTable.filter['brand_name'] = Utils.trim(document.forms['searchForm'].elements['brand_name'].value);-->
<!--listTable.filter['page'] = 1;-->

<!--listTable.loadList();-->
<!--}-->

<!--</script>-->
<!--<form method="post" action="aaa" name="listForm">-->
<!-- start brand list -->
<div class="list-div" id="listDiv">
    <table cellpadding="3" cellspacing="1">
        <tr>
            <th>品牌名称</th>
            <th>品牌LOGO</th>
            <th>品牌网址</th>
            <th>品牌描述</th>
            <th>排序</th>
            <th>是否显示</th>
            <th>操作</th>
        </tr>
        <?php foreach($data as $k=> $v): ?>
        <tr>
            <td class="first-cell" id="<?php echo $v['b_id']; ?>">
                <span style="float:right"></span>
                <span class="change_name"><?php echo $v['brand_name']; ?></span>
            </td>
            <td><img src="/uploads/<?php echo $v['brand_img']; ?>" width="100" alt=""></td>
            <td><?php echo $v['brand_url']; ?></td>
            <td align="left"><?php echo $v['brand_desc']; ?></td>
            <td align="right"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 1)"><?php echo $v['sort_order']; ?></span></td>
            <td align="center">
                <?php if(in_array(($v['is_show']), explode(',',"1"))): ?>
                <img src="picture/yes.svg" class="is_show" id="<?php echo $v['b_id']; ?>" value="<?php echo $v['is_show']; ?>" width="20"/>
                <?php else: ?>
                <img src="picture/no.svg" class="is_show" id="<?php echo $v['b_id']; ?>" value="<?php echo $v['is_show']; ?>" width="20"/>
                <?php endif; ?>
            </td>
            <td align="center">
                <a href="<?php echo url('goods/brand_edit'); ?>?id=<?php echo $v['b_id']; ?>" title="编辑">编辑</a> |
                <a href="<?php echo url('goods/brand_del'); ?>?id=<?php echo $v['b_id']; ?>" title="编辑">移除</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <!--<td align="right" nowrap="true" colspan="6">-->
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
    <center><div><?php echo $data->render(); ?></div></center>

    <!--<div id="turn-page">-->
    <!--<span id="pageCurrent">1</span> / <span id="totalPages">1</span>-->
    <!--页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">-->
    <!--条记录，总共 <span id="totalRecords">2</span>-->
    <!--条记录-->
    <!--<span id="page-link">-->
    <!--<a href="javascript:listTable.gotoPageFirst()">第一页</a>-->
    <!--<a href="javascript:listTable.gotoPagePrev()">上一页</a>-->
    <!--<a href="javascript:listTable.gotoPageNext()">下一页</a>-->
    <!--<a href="javascript:listTable.gotoPageLast()">最末页</a>-->
    <!--<select id="gotoPage" onchange="listTable.gotoPage(this.value)">-->
    <!--<option value='1'>1</option>    </select>-->
    <!--</span>-->
    <!--</div>-->
    <!--</td>-->
    <!--</tr>-->


    <!-- end brand list -->
</div>
<!--</form>-->

<div id="footer">
    共执行 4 个查询，用时 0.024000 秒，Gzip 已禁用，内存占用 1.394 MB<br />
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
</body>
</html>
<script>
    $(document).on('click','.is_show',function(){
        var status = $(this).attr('value');
        var brand_id = $(this).attr('id');
        var obj = $(this);
        $.ajax({
            url:"<?php echo url('goods/brand_change_show'); ?>",
            data:{status:status,brand_id:brand_id},
            dataType:"json",
            success:function(res){
                if(res.status==1){
                    alert(res.msg);
                    return false;
                }else{
                    if(status==1){
                        obj.prop("src","picture/no.svg");
                        obj.attr("value",0)
                    }else{
                        obj.prop("src","picture/yes.svg");
                        obj.attr("value",1)
                    }
                }
            }
        })
    })
    $(document).on('click','.change_name',function(){
        var brand_name = $(this).text();
        var obj = $(this);
        var input = $("<span class='changes_name'><input class='name' type='text' value='"+brand_name+"' /></span>");
        obj.html(input);
        input.click(function(){return false;});
        input.trigger("ocus");
    })
    $(document).on('blur','.changes_name',function(){
        var brand_name = $('.name').val();
        var id = $(this).parents('td').attr('id');
        var obj = $(this);
        $.ajax({
            url:"<?php echo url('goods/brand_change_name'); ?>",
            data:{brand_name:brand_name,id:id},
            dataType:"json",
            success:function(res){
                if (status==0) {
                    var input = $("<span class='changes_name'>"+brand_name+"</span>");
                    obj.html(input);
                }}
        })
    })
</script>
