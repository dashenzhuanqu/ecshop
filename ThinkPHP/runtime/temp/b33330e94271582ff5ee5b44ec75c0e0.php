<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\Users\Shinelon\Desktop\ecshop\ThinkPHP\public/../application/index\view\index\index.html";i:1536238928;}*/ ?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
  <frameset cols="120, *" framespacing="0" border="0" id="frame-body">
    <frame src="<?php echo url('Index/menu'); ?>" id="menu-frame" name="menu-frame" frameborder="no" scrolling="yes">
    <!-- <frame src="index.php?act=drag" id="drag-frame" name="drag-frame" frameborder="no" scrolling="no"> -->
    <frameset rows="100,*" framespacing="0" border="0">
      <frame src="<?php echo url('Index/top'); ?>" id="header-frame" name="header-frame" frameborder="no" scrolling="no">
      <frame src="<?php echo url('Index/main'); ?>" id="main-frame" name="main-frame" frameborder="no" scrolling="yes">
    </frameset>
  </frameset>

<body>
</body>
</html>