<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Test','TestController@Test');


Route::get('user/reg',"Goods\GoodsController@reg"); //注册前台
Route::post('user/regad',"Goods\GoodsController@regad"); //注册后台

Route::get('user/login',"Goods\GoodsController@login"); //前台登录
Route::post('user/loginadd',"Goods\GoodsController@loginadd"); //后台登录

Route::get('user/conter',"Goods\GoodsController@conter"); //个人中心