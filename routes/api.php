<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 测试
Route::get('/todayBooks', 'BookController@index');
Route::get('/test', function() {
    $array = array('foo', 'bar');
    return $array;
})->middleware('cors');

// Route::get('/booklist', 'BooklistController@index')->middleware('client.credentials');

// Route::group(['namespace' => 'Frontend\Controllers', 'middleware' => 'cors'], function () {
//     Route::get('/todayBooks', 'BookController@index');
//     Route::get('/booklist', 'BooklistController@index')->middleware('client.credentials');
// });
// // 公有路由，无需登录即可访问
// Route::group(['prefix' => 'v1'], function () {
//     Route::get('/user', 'API\UsersController@getUser');
// });

// //这里是鉴赏操作的地方，关于鉴赏的增删改查
// Route::group(['prefix' => 'appreciation', 'middleware' => 'auth:api'], function() {
//     Route::post('/', 'AppreciationController@store');
//     Route::post('/{appreciation}', 'AppreciationController@update')->where('appreciation', '/d+');
// });

// Route::group(['prefix' => 'user', 'middleware' => 'auth:api'], function() {
//     //my today target:
//     //1. 先调通接口，可以传递数据
//     //2. 完成首页的搭建
//     //3. 完成所有路由的设定  可以先不实现
// });

