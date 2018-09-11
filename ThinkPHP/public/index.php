<?php

// [ 应用入口文件 ]
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

//echo PATH_P;die;
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

// \think\Route::bind('admin');// 绑定当前入口文件到模块
// \think\App::run()->send();// 执行应用
