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
