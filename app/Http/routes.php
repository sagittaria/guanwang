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


Route::get('/', function () {
    return view('index');
});



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

	Route::get('/home', 'HomeController@index');

    Route::get('/create/newArticle','HomeController@create');//新建
    Route::post('/create','HomeController@store');//保存新文
    Route::get('/edit/{aid}','HomeController@edit');//编辑一篇
    Route::put('/edit/{aid}','HomeController@update');//保存更改
    Route::delete('/delete/{aid}','HomeController@destroy');//删除一篇

    Route::get('/','HomeController@frontpage');//官网首页
    Route::get('/about/recent','HomeController@listRecent');
    Route::get('/about/recent/{aid}','HomeController@show');
});
