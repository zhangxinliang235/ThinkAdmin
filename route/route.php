<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2019 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://demo.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 代码仓库：https://gitee.com/zoujingli/ThinkAdmin
// | github 代码仓库：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

use think\facade\App;
use think\facade\Route;
use think\Request;

header('Access-Control-Allow-Origin: *');




//测试
Route::get('test','wechat_portal/Carousel/test');




//微信管理 api
Route::group( 'v1',function(){
    //导航管理
    Route::get('nav','wechat_portal/Carousel/nav');
    //轮播图管理
    Route::get('/banner', 'wechat_portal/Carousel/banner');
    //搜索
    Route::get('search','wechat_portal/Carousel/search');

    //线路管理
    //线路根据条件获取相应数据
    Route::get('/line','wechat_portal/Carousel/line');
    //线路获取详情
    Route::get('/linedetail','wechat_portal/Carousel/linedetail');

    //景区门票管理
    //门票根据条件获取相应数据
    Route::get('spot','wechat_portal/Carousel/spot');
    //门票详情
    Route::get('spotdetail','wechat_portal/Carousel/spotdetail');

    //登录
    Route::get('login','wechat_portal/Carousel/login');


    //个人管理
    //个人信息保存
    Route::post('usersave','wechat_portal/My/save');


});






return [];


/* 演示环境禁止操作路由绑定 */
//if (stripos(Request::host(true), 'thinkadmin.top') !== false) {
//    Route::post('admin/user/pass', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止修改用户密码！']);
//    });
//    Route::post('admin/index/pass', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止修改用户密码！']);
//    });
//    Route::post('admin/config/file', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止修改系统配置！']);
//    });
//    Route::post('admin/config/config', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止修改系统配置！']);
//    });
//    Route::post('admin/menu/index', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止给菜单排序！']);
//    });
//    Route::post('admin/menu/add', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止添加菜单！']);
//    });
//    Route::post('admin/menu/edit', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止编辑菜单！']);
//    });
//    Route::post('admin/menu/forbid', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止禁用菜单！']);
//    });
//    Route::post('admin/menu/remove', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止删除菜单！']);
//    });
//    Route::post('wechat/config/options', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止修改微信配置！']);
//    });
//    Route::post('service/config/edit', function () {
//        return json(['code' => 0, 'info' => '演示环境禁止修改开放配置！']);
//    });
//}
