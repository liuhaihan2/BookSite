<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

//可跨域
Route::group(['middleware' => 'cors'], function () {
    //书籍
    Route::group(['prefix' => 'book'], function () {
        //获取首页推荐 书籍
        Route::get('/todayBooks', 'BookController@index');
        Route::group(['middleware' => ['auth:api']], function () {
            // 需要登录以后才能访问的  关于书籍  api
        });
        // Route::get('/todayBookLists', 'BooklistController@index');
    });

    //书单
    Route::group(['prefix' => 'booklist'], function () {
        //获取首页推荐 书单
        Route::get('/todayBookLists', 'BooklistController@index');
        Route::group(['middleware' => ['auth:api']], function () {
            // 需要登录以后才能访问的  关于书单  api
        });
    });

    //鉴赏
    Route::group(['prefix' => 'appreciation'], function () {
        //获取首页推荐 鉴赏
        Route::get('/todayAppreciation', 'AppreciationController@index');
        Route::group(['middleware' => ['auth:api']], function () {
            // 需要登录以后才能访问的  关于鉴赏  api
        });
    });

    //用户
    Route::group(['prefix' => 'user'], function () {
        //登录注册改密码什么的都在这里
        Route::group(['middleware' => ['auth:api']], function () {
            // 需要登录以后才能访问的  关于用户  api
        });
    });

    // 排行
    Route::get('/rank', 'BookController@rank');//收藏排行
    Route::get('/category', 'BookController@category');//鉴赏排行 with前三篇收藏最多的鉴赏

    //分类涉及到分页
    // 分类  某认所有书
    Route::get('/{category}/books', 'BookController@category');
    //根据标签筛选
    Route::get('/{tag}/books', 'BookController@tag');
    //根据收藏 或者 品鉴 排序
    Route::get('/{sort}/books', 'BookController@sort');
});


