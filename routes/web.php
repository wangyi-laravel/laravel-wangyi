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
Route::get('/admin',function(){
	return view('admin');
});

//后台用户

<<<<<<< HEAD
Route::resource('user','UserController');

//后台商品属性
Route::resource('attr','AttrController');

//后台商品属性值
Route::resource('attrval','AttrvalController');

//后台一级分类
Route::resource('cate_1','Cate_1Controller');

//后台二级分类
Route::resource('cate_2','Cate_2Controller');

//后台评价表
Route::resource('eval','EvalController');

//后台推荐表
// Route::resource('recom','RecomController');

//后台标签
Route::resource('tag','TagController');

=======
>>>>>>> 4f9b66c70055b7cdfc1e067dec4b1e49ef779d09

