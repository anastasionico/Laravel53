<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get("/about", "pagesController@getAbout");
Route::get("/contact", "pagesController@getContact");
Route::get('/welcome', 'pagesController@getWelcome');
Route::get('/', 'pagesController@getIndex');
Route::resource('posts','PostController');