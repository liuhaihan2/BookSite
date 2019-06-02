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

// 公有路由，无需登录即可访问
Route::group(['prefix' => 'v1'], function () {
    Route::get('/user', 'API\UsersController@getUser');
});

// 私有路由，需要登录才能访问
Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {

    /*
    |-------------------------------------------------------------------------------
    | Adds a New appreciation
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/appreciations
    | Controller:     API\AppreciationController@create
    | Method:         POST
    | Description:    Adds a new appreciation
     */
    Route::post('/appreciation', 'API\CafesController@postNewCafe');
    Route::get('/appreciation/{id}/edit', 'API\CafesController@getCafeEditData');
    Route::delete('/appreciation/{id}/favorite', 'API\CafesController@deletefavoriteappreciation');
    Route::put('/user', 'API\UsersController@putUpdateUser');
});

