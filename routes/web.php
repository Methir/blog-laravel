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

Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/', 'HomeController@index')->name('raiz');

Route::group(['as' => 'home'], function(){

    Route::get('/home', 'HomeController@index');

    Route::get('/category/{category}', 'HomeController@category')
    ->where('category','[A-Za-z]+')
    ->name('.category');

    Route::get('/author/{id}', 'HomeController@author')
    ->name('.author');

    Route::get('/search', 'HomeController@search')
    ->name('.search');

});

Route::group(['middleware' => 'auth', 'as' => 'comments'], function (){

    Route::post('/comment', 'CommentController@store')->name('.store');

});

Route::group(['middleware' => 'auth', 'as' => 'mail'], function (){

    Route::get('/mail', 'MailController@create')->name('.create');

    Route::post('/send', 'MailController@send')->name('.send');

});