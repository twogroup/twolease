<?php


//显示主页面
 Route::get('/', 'IndexController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('show','ServiceController@shows');

Route::any('about','AboutController@about');   // 关于我们

Route::any('service', 'ServiceController@services');  // 房源列表

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

Route::any('addhouse','ServiceController@addhouse2');//一级添加
Route::any('houseadd','ServiceController@addhouse3');//二级添加
Route::any('houseadd3','ServiceController@addhouse4');//三级添加
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
/**
 * 个人中心
 */
Route::get('personal','UserController@show');
Route::any('information','UserController@information');
/**
 * 修改密码
 */
Route::any('password','UserController@password');
Route::any('modify','UserController@modify');
Route::any('revert','UserController@revert');

/**
 * 我的收藏
 */
Route::get('collect','UserController@collect');

/**
 * 用户积分
 */

Route::get('integral','UserController@integral');

Route::any('img', function(){

    return view("html.addhouse2");

});
Route::any('pic','ServiceController@pic');   // 图片上传
