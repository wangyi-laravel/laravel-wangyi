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




//加入我们
Route::get('/home/joinus', 'JoinusController@index');

//管理员登录
Route::get('/admin/login','AdminController@login');
//执行管理员登录
Route::post('/admin/login','AdminController@dologin');

//后台路由

Route::group(['middleware'=>['admin','login']],function(){

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

	//站内信
	Route::resource('message','MessageController');
	Route::get('/back/{id}/edit','MessageController@back');
	Route::post('/doback/{id}','MessageController@doback');

	//消息数量
	Route::get('/htadmin','MessageController@htadmin');

});



//验证码
Route::get('capcha','LoginController@captcha');

//用户登陆页面
Route::get('/login', 'LoginController@login');

//登陆操作
Route::post('/login', 'LoginController@dologin');


//前台首页
Route::get('/','ShouyeController@show');

//注册页面
Route::get('/register','ShouyeController@register');

//执行注册
Route::post('/store','ShouyeController@store');

//前台退出
Route::get('/home/logout','ShouyeController@logout');

//个人中心
// Route::get('/home/people','ShouyeController@people');
Route::get('/home/people/{id}','ShouyeController@people');
Route::post('/people/z','ShouyeController@z');

//收货地址
Route::get('/home/site','ShouyeController@site');
Route::post('/home/dosite','ShouyeController@dosite');
Route::get('/home/delsite/{id}','ShouyeController@delsite');


//评论
Route::resource('comment','CommentController');

//2
Route::get('aaa','CommentController@aaa');



//商品详情页
Route::resource('/home/xiang','XiangController');

//商品列表
Route::resource('/home/liebiao','LiebiaoController');
Route::resource('/home/biao','BiaoController');

//前台路由
Route::group(['middleware'=>'home'],function(){
	//前台退出
	Route::get('/home/logout','ShouyeController@logout');

	//个人中心
	Route::get('/home/people','ShouyeController@people');
	Route::get('/home/people/{id}','ShouyeController@people');
	Route::post('/people/z','ShouyeController@z');

	//收货地址
	Route::get('/home/site','ShouyeController@site');
	Route::post('/home/dosite','ShouyeController@dosite');
	Route::get('/home/delsite/{id}','ShouyeController@delsite');



	//评论
	Route::resource('comment','CommentController');


	//购物车
	// Route::resource('/home/cart_items','Cart_itemsController');
	Route::get('/home/cart_items/{id}','GwcController@create');
	Route::get('/home/cart_items','GwcController@index');
	Route::get('/home/cart_items/delete/{id}','GwcController@delete');

	//订单
	Route::post('/order/TianJia/{id?}','OrderController@TianJia');
	Route::get('/order/liebiao/{id}','OrderController@liebiao');
});
//用户条款
Route::get('/terms','ShouyeController@terms');


// 引导用户到新浪微博的登录授权页面
Route::get('auth/weibo', 'AuthController@weibo');
// 用户授权后新浪微博回调的页面
Route::get('auth/callback', 'AuthController@callback');

//markdown发送邮件
Route::get('sendEmail', 'IndexController@sendEmail');

//用户消息列表
Route::get('/messages','MessageController@list');

//消息回复页
Route::get('/reply/{id}','MessageController@reply');

//执行回复
Route::post('/doreply/{id}','MessageController@doreply');

//用户删除消息
Route::post('/del/{id}','MessageController@delmessage');