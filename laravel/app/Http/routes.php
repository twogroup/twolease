<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//测试
// Route::any('testvalue', 'TestController@add');

// Route::get('test', function(){
//     return view("demo");
// });
//
 Route::get('/', 'IndexController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*Route::get('index', function(){
    return view("html.index");
});*/
Route::get('show','ServiceController@shows');

Route::get('about', function(){
    return view("html.about");
});
Route::get('service', function(){
    return view("html.services");
});
Route::get('gallery', function(){
    return view("html.gallery");
});
Route::get('contact', function(){
    return view("html.contact");
});

//添加房源 
Route::get('lease', function(){
    return view("html.lease");
});

Route::any('shows', 'ServiceController@shows');//所有房源

Route::get('chu', 'ServiceController@chu');//要出租的房源

Route::get('wei', 'ServiceController@wei');//未租的房源

Route::get('shou','ServiceController@shou');//已售房源

Route::get('details','ServiceController@details');//房源详情

Route::get('map','ServiceController@map');//MAP

//单个房源详细信息
Route::get('showsxq','ServiceController@showsxq');
Route::get('zhan','ServiceController@objectToArray');


Route::any('videos','ServiceController@neironggb');//视频

/**
 * 登录注册验证页面
 */
Route::any('adds', 'LoginController@adds');
Route::any('loginss', 'LoginController@loginss');
/**
 * 退出登录
 */
Route::any('exits', function(){
    $model=new App\User();
    return $model->exits();

});

Route::any('logins', function(){
    $model=new App\User();
    return $model->logins();

});

Route::get('personal','UserController@shows');//用户中心/个人中心

