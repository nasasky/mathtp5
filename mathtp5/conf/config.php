<?php
/**
 * User: Administrator
 */

    return [
        //开启调试模式
        'app_debug' => true,

        // 视图输出字符串内容替换
        'view_replace_str'       => [
            "__PUBLIC__INDEX"=>'/static/index',//前台
            "__PUBLIC_ADMIN"=>'/static/admin',//后台
        ],

        'http_exception_template'    =>  [
            // 定义404错误的重定向页面地址
            404 =>  APP_PATH.'/index/view/index/404.html',
            // 还可以定义其它的HTTP status
            401 =>  APP_PATH.'401.html',
        ],



    ];

