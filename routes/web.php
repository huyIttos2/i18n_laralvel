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


Route::group(['middleware' => 'locale'], function (){
    route::get('/posts','PostController@index')->name('post.list');
    route::get('/posts/create','PostController@create')->name('post.create');
    route::post('/posts/create','PostController@store')->name('post.store');
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
});
Route::get('/{locale?}', function ($locale = null){
    App::setLocale($locale);
    return view('welcome');
});
