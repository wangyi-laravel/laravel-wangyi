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

/*Route::get('/', function () {
    return view('welcome');
});*/


//验证码
Route::get('capcha','LoginController@captcha');

//登陆页面
Route::get('/admin/login', 'LoginController@login');

//登陆操作
Route::post('/admin/login', 'LoginController@dologin');

//后台路由
 // Route::group(['middleware'=>'login'],function(){


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

	//后台颜色管理
	Route::resource('color','ColorController');

	//后台尺码管理
	Route::resource('size','SizeController');

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

	//后台友情链接
	Route::resource('link','LinkController');

	//退出
	Route::get('/admin/logout', 'LoginController@logout');

	//广告
	Route::resource('guanggao','GuanggaoController');

	//购物车
	Route::resource('cart_items','Cart_itemsController');

	//订单
	//Route::resource('guanggao','GuanggaoController');

// });




//前台首页
Route::get('/','ShouyeController@show');

//注册页面
Route::get('/admin/register','ShouyeController@register');

//执行注册
Route::post('/admin/store','ShouyeController@store');

//前台退出
Route::get('/home/logout','ShouyeController@logout');

//个人中心
Route::get('/home/people','ShouyeController@people');
Route::post('/prople/z','ShouyeController@z');



//商品详情页
Route::resource('/home/xiang','XiangController');

//商品列表
Route::resource('/home/liebiao','LiebiaoController');



