<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\adds\adds.html";i:1537270730;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>ECSHOP 管理中心 - 广告位置 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../../../static/css/general.css" rel="stylesheet" type="text/css">
    <link href="../../../static/css/main.css" rel="stylesheet" type="text/css">
    <script src="../../../jquery-2.1.4.min.js"></script>
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
        var posit_name_empty = "广告位名称不能为空!";
        var ad_width_empty = "请输入广告位的宽度!";
        var ad_height_empty = "请输入广告位的高度!";
        var ad_width_number = "广告位的宽度必须是一个数字!";
        var ad_height_number = "广告位的高度必须是一个数字!";
        var no_outside_address = "建议您指定该广告所要投放的站点的名称，方便于该广告的来源统计!";
        var width_value = "广告位的宽度值必须在1到1024之间!";
        var height_value = "广告位的高度值必须在1到1024之间!";
        var ad_name_empty = "请输入广告名称!";
        var ad_link_empty = "请输入广告的链接URL!";
        var ad_text_empty = "广告的内容不能为空!";
        var ad_photo_empty = "广告的图片不能为空!";
        var ad_flash_empty = "广告的flash不能为空!";
        var ad_code_empty = "广告的代码不能为空!";
        var empty_position_style = "广告位的模版不能为空!";
        //-->
        /*关闭按钮*/
        function get_certificate(){
            var panel = document.getElementById('panelCloud');
            var mask  = document.getElementById('CMask')||null;
            var frame = document.getElementById('CFrame');
            if(panel&&CMask&&frame){
                panel.style.display = 'block';
                mask.style.display = 'block';
                frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2Flocalhost%2Fecshop0%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
<body rlt="1" style="">
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
    <a class="btn btn-right" href="/index/adds/ads_add">添加广告位</a>

    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;&gt;&nbsp;&nbsp;广告位置 </span>
    <div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
    <!-- start ad position list -->
    <div class="list-div" id="listDiv">

        <table cellpadding="3" cellspacing="1">
            <tbody>
            <tr>
                <th>广告位名称</th>
                <th>位置宽度</th>
                <th>位置高度</th>
                <th>广告位描述</th>
                <th>操作</th>
            </tr>

            <?php foreach($data as $k => $v){ ?>
            <tr>
                <td class="first-cell" style="background-color: rgb(255, 255, 255);">
                    <span class="author"><?= $v['ads_name']?></span>
                    <input type="text" value="<?= $v['ads_name']?>" style="display: none" class="show" where="<?= $v['ads_id']?>">
                </td>

                <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_type_money', 1)"><?= $v['ads_width']?></span></td>
                <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_min_amount', 1)"><?= $v['ads_height']?></span></td>
                <td align="right" style="background-color: rgb(255, 255, 255);"><span><?= $v['ads_descs']?></span></td>
                <td align="right" style="background-color: rgb(255, 255, 255);">
                    <a href="bonus.php?act=send&amp;id=1&amp;send_by=0">发放</a> |
                    <a href="bonus.php?act=bonus_list&amp;bonus_type=1">查看</a> |
                    <a href="/index/adds/adds_select/?ads_id=<?= $v['ads_id']?>">编辑</a> |
                    <a href="/index/adds/adds_delete/?ads_id=<?= $v['ads_id']?>" onclick="listTable.remove(1, '您确认要删除这条记录吗?')">移除</a></td>
            </tr>
            <?php } ?>
            <tr><td class="no-records" colspan="5" style="background-color: rgb(255, 255, 255);">您还没有设置广告位置</td></tr>
            <tr><td align="right" nowrap="true" colspan="5" style="background-color: rgb(255, 255, 255);"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
                <div id="turn-page">
                    <?php echo $data->render(); ?>
                </div>
            </td></tr>
            </tbody></table>

    </div>
</form>

<div id="footer">
    共执行 4 个查询，用时 0.017001 秒，Gzip 已禁用，内存占用 1.319 MB<br>
    版权所有 © 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
    <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
        <tbody><tr>
            <td style="color: #0f2c8c" width="30" height="24"></td>
            <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
            <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()">×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
        </tr>
        <tr>
            <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
                <div id="popMsgContent">
                    <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
                    <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
                </div>
            </td>
        </tr>
        </tbody></table>
</div>

<!--
<embed src="images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
    <param name="movie" value="images/online.swf">
    <param name="quality" value="high">
    <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">

</object>

</body></html>

<script>
    $(document).on('click','.author',function () {
        $(this).hide();
        $(this).next().show();
        var content = $(this).next().val();
        $(this).next().val('');
        $(this).next().focus();
        $(this).next().val(content);
    });

    $(document).on('blur','.show',function () {
        $(this).hide();
        $(this).prev().show();
<<<<<<< HEAD
=======

>>>>>>> 3652eca2600fe77443b1039126fb1b862771e0f3
        var ads_name = $(this).val();
//        alert(ads_name)
        var ads_id = $(this).attr('where');
//        alert(ads_id);
        $.ajax({
            url:"/index/adds/gai",
            type:"post",
            data:{ads_name:ads_name,ads_id:ads_id},
            success:function (e){
//                alert(e);
                if(e){
                    history.go(0)
                }
            }
        })
    })
</script>