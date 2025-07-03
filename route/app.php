<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

// 兼容前端环境检测接口
Route::any('index/index/getReturn', 'index/Index/getReturnApi');

// 默认路由规则
Route::get('/', 'index/Index/index');

// API路由
Route::group('api', function () {
    // 登录相关
    Route::post('login', 'index/Index/login');
    Route::any('getMenu', 'index/Index/getMenu');
    
    // 订单相关
    Route::post('createOrder', 'index/Index/createOrder');
    Route::get('getOrder', 'index/Index/getOrder');
    Route::get('checkOrder', 'index/Index/checkOrder');
    Route::post('closeOrder', 'index/Index/closeOrder');
    Route::get('getState', 'index/Index/getState');
    
    // 应用相关
    Route::post('appHeart', 'index/Index/appHeart');
    Route::post('appPush', 'index/Index/appPush');
});

// 后台路由
Route::group('admin', function () {
    Route::get('/', 'admin/Index/index');
    Route::any('getMain', 'admin/Index/getMain');
    Route::get('checkUpdate', 'admin/Index/checkUpdate');
    Route::get('getSettings', 'admin/Index/getSettings');
    Route::post('saveSetting', 'admin/Index/saveSetting');
    
    // 二维码管理
    Route::post('addPayQrcode', 'admin/Index/addPayQrcode');
    Route::get('getPayQrcodes', 'admin/Index/getPayQrcodes');
    Route::post('delPayQrcode', 'admin/Index/delPayQrcode');
    Route::post('setBd', 'admin/Index/setBd');
    Route::get('enQrcode/:url', 'admin/Index/enQrcode');
    
    // 订单管理
    Route::get('getOrders', 'admin/Index/getOrders');
    Route::post('delOrder', 'admin/Index/delOrder');
    Route::post('delGqOrder', 'admin/Index/delGqOrder');
    Route::post('delLastOrder', 'admin/Index/delLastOrder');
    
    // 其他
    Route::get('ip', 'admin/Index/ip');
});

// 添加自定义路由
Route::get('think', function () {
    return 'hello,ThinkPHP8!';
});

Route::get('hello/:name', 'index/hello');

// 添加自定义路由
Route::any('login', 'index/Index/login');
Route::any('getMenu', 'index/Index/getMenu');
Route::any('createOrder', 'index/Index/createOrder');
Route::any('closeOrder', 'index/Index/closeOrder');
Route::any('checkOrder', 'index/Index/checkOrder');
Route::any('getOrder', 'index/Index/getOrder');

// 添加明确的Admin路由映射
Route::any('admin/index/checkUpdate', 'admin/Index/checkUpdate');
Route::any('admin/index/:action', 'admin/Index/:action');

// 添加兼容的enQrcode路由，支持查询参数形式
Route::get('enQrcode', 'admin/Index/enQrcode');

// 添加兼容的admin/index/路由，支持所有前端请求
Route::get('admin/index/getOrders', 'admin/Index/getOrders');
Route::post('admin/index/setBd', 'admin/Index/setBd');
Route::post('admin/index/delOrder', 'admin/Index/delOrder');
Route::post('admin/index/delGqOrder', 'admin/Index/delGqOrder');
Route::post('admin/index/delLastOrder', 'admin/Index/delLastOrder');
Route::get('admin/index/getPayQrcodes', 'admin/Index/getPayQrcodes');
Route::post('admin/index/delPayQrcode', 'admin/Index/delPayQrcode');
Route::post('admin/index/addPayQrcode', 'admin/Index/addPayQrcode');
Route::post('admin/index/saveSetting', 'admin/Index/saveSetting');
Route::get('admin/index/getSettings', 'admin/Index/getSettings'); 