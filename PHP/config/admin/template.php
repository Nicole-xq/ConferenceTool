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

// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

return [
    'layout_on'          => true,
    'layout_name'        => 'layout',
    'tpl_replace_string' => [
        '__STATIC__' => request()->domain().request()->rootUrl().'/static',
        //'__JS__'     => '/static/js',
        //'__CSS__'    => '/static/css',
    ],
    'tpl_cache'=>false,//模板编译缓存
];
