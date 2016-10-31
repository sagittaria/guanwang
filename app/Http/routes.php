<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/home', 'HomeController@index');//新闻管理系统首页

    Route::get('/create/newArticle','HomeController@create');//新建
    Route::post('/create','HomeController@store');//保存新文
    Route::get('/edit/{aid}','HomeController@edit');//编辑一篇
    Route::put('/edit/{aid}','HomeController@update');//保存更改
    Route::delete('/delete/{aid}','HomeController@destroy');//删除一篇

    Route::get('/','OfficialController@index');//官网首页
    Route::get('/members','OfficialController@members');//纽蓝成员
    Route::get('/member/{mid}','OfficialController@memberDetail');//成员详情
    Route::get('/about','OfficialController@about');//关于纽蓝
    Route::get('/about/{aid}','OfficialController@aboutDetail');//纽蓝详情
    Route::get('/news','OfficialController@news');//新闻中心
    Route::get('/news/{nid}','OfficialController@newsDetail');//新闻详情
    Route::get('/product','OfficialController@product');//产品与服务
    Route::get('/solution','OfficialController@solution');//解决方案
    Route::get('/solution/{sid}','OfficialController@solutionDetail');//新闻详情


    Route::get('/about/recent','OfficialController@listRecent');
    Route::get('/about/recent/{aid}','OfficialController@showOneRecent');
});
