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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'SiteController@about');

//Route::get('/articles', 'ArticleController@index');
//Route::get('/articles/create', 'ArticleController@create');
//Route::get('/articles/{id}', 'ArticleController@show');
//Route::post('/articles', 'ArticleController@store');
//Route::get('/articles/{id}/edit', 'ArticleController@edit');
Route::resource('articles', 'ArticleController');

//用户登录，注册路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/logout', 'Auth\AuthController@getLogout');
