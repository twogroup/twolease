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
Route::any('testvalue', 'TestController@add');

Route::get('test', function(){
    return view("demo");
});
//
Route::get('/', 'IndexController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('index', function(){
    return view("html.index");
});
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

