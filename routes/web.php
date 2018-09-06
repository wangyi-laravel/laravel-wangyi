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

//后台主页
Route::get('/admin','AdminController@index');

//网站设置页
Route::get('/admin/set','AdminController@set');

//保存网站设置
Route::post('/admin/set', 'AdminController@update');

//后台用户
Route::resource('user','UserController');

//后台地址管理
Route::resource('site','SiteController');

//后台商品属性
Route::resource('attr','AttrController');

//后台商品属性值
Route::resource('attrval','AttrvalController');

//后台一级分类
Route::resource('cate_1','Cate_1Controller');

//后台二级分类
Route::resource('cate_2','Cate_2Controller');

//后台分类
Route::resource('cates','CatesController');

//后台评价表
Route::resource('eval','EvalController');

//后台推荐表
// Route::resource('recom','RecomController');

//后台标签
Route::resource('tag','TagController');

//后台商品管理
Route::resource('good','GoodController');

//广告位
Route::resource('guanggao','GuanggaoController');

//后台友情链接
Route::resource('link','LinkController');



//前台首页
Route::get('/','ShouyeController@tou');