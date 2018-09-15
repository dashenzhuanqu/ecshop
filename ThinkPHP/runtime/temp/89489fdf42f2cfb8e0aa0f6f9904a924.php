<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\money\money.html";i:1536822632;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>ECSHOP 管理中心 - 红包类型 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../../../static/css/general.css" rel="stylesheet" type="text/css">
    <link href="../../../static/css/main.css" rel="stylesheet" type="text/css">
    <!--<script src="//hm.baidu.com/hm.js?dde6ba2851f3db0ddc415ce0f895822e"></script><script type="text/javascript" src="../../../static/js/transport.js"></script><script type="text/javascript" src="../../../static/js/common.js"></script>-->
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
        var type_name_empty = "请输入红包类型名称!";
        var type_money_empty = "请输入红包类型价格!";
        var order_money_empty = "请输入订单金额!";
        var type_money_isnumber = "类型金额必须为数字格式!";
        var order_money_isnumber = "订单金额必须为数字格式!";
        var bonus_sn_empty = "请输入红包的序列号!";
        var bonus_sn_number = "红包的序列号必须是数字!";
        var bonus_sum_empty = "请输入您要发放的红包数量!";
        var bonus_sum_number = "红包的发放数量必须是一个整数!";
        var bonus_type_empty = "请选择红包的类型金额!";
        var user_rank_empty = "您没有指定会员等级!";
        var user_name_empty = "您至少需要选择一个会员!";
        var invalid_min_amount = "请输入订单下限（大于0的数字）";
        var send_start_lt_end = "红包发放开始日期不能大于结束日期";
        var use_start_lt_end = "红包使用开始日期不能大于结束日期";
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
    <a class="btn btn-right" href="/index/money/money_add">添加红包类型</a>

    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;&gt;&nbsp;&nbsp;红包类型 </span>
    <div style="clear:both"></div>
</h1>
<!--<script type="text/javascript" src="../../../static/js/utils.js"></script>-->
<!--<script type="text/javascript" src="../../../static/js/listtable.js"></script>-->
<!-- start bonus_type list -->
<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">

        <table cellpadding="3" cellspacing="1">
            <tbody>
            <tr>
                <th><a href="javascript:listTable.sort('type_name'); ">类型名称</a></th>
                <th><a href="javascript:listTable.sort('type_money'); ">红包金额</a></th>
                <th><a href="javascript:listTable.sort('min_amount'); ">订单下限</a></th>
                <th>发放数量</th>
                <th>使用数量</th>
                <th>操作</th>
            </tr>
            <?php foreach($arr as $k => $v){ ?>
                <tr id="<?= $v['type_id']?>">
                    <td class="first-cell" id="types" style="background-color: rgb(255, 255, 255);">
                        <span class="author"><?= $v['type_type']?></span>
                        <input type="text" value="<?= $v['type_type']?>" style="display: none;" class="inputAuthor" where="<?= $v['type_id']?>">
                    </td>
                    <td align="right" style="background-color: rgb(255, 255, 255);">
                        <?= $v['money_money']?>
                    </td>
                    <td align="right" style="background-color: rgb(255, 255, 255);">
                        <?= $v['money_money']?>
                    </td>
                    <td align="right" style="background-color: rgb(255, 255, 255);"><?= $v['type_money']?></td>
                    <td align="right" style="background-color: rgb(255, 255, 255);">0</td>
                    <td align="right" style="background-color: rgb(255, 255, 255);">
                        <a href="bonus.php?act=send&amp;id=1&amp;send_by=0">发放</a> |
                        <a href="bonus.php?act=bonus_list&amp;bonus_type=1">查看</a> |
                        <a href="/index/money/money_select/?type_id=<?= $v['type_id']?>">编辑</a> |
                        <a href="/index/money/money_delete/?type_id=<?= $v['type_id']?>" onclick="listTable.remove(1, '您确认要删除这条记录吗?')">移除</a></td>
                </tr>
            <?php } ?>




            <tr><td class="no-records" colspan="10" style="background-color: rgb(255, 255, 255);">没有找到任何记录</td></tr>
            <tr>
                <td align="right" nowrap="true" colspan="8" style="background-color: rgb(255, 255, 255);"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
                    <div id="turn-page">

                        <?php echo $arr->render(); ?>

    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value="1">1</option>    </select>
  </span>
                    </div>
                </td>
            </tr>
            </tbody></table>

    </div>
</form>
<!-- end bonus_type list -->


<div id="footer">
    共执行 7 个查询，用时 0.012001 秒，Gzip 已禁用，内存占用 1.442 MB<br>
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
    <embed src="../../../static/images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">

</object>

</body>
</html>
<script type="text/javascript">

    $(document).on('click','.author',function(){
        $(this).hide();
        $(this).next().show();
        var content=$(this).next().val();
        $(this).next().val("");
        $(this).next().focus();
        $(this).next().val(content)
        });

        $(document).on('blur','.inputAuthor',function(){
            $(this).hide();
            $(this).prev().show();

            var type_type =$(this).val();
            var type_id=$(this).attr('where');
            $.ajax({
                url:"/index/money/gai",
                type:"post",
                data:{type_type:type_type,type_id:type_id},
                success:function(e){
                    if(e){
                        history.go(0)
                    }
                }
        })
    })

</script>