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

Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/first_ps', 'PagesController@getFirst_ps')->name('first_ps');
Route::get('/second_ps', 'PagesController@getSecond_ps')->name('second_ps');
Route::get('/third_ps', 'PagesController@getThird_ps')->name('third_ps');
Route::get('/fourth_ps', 'PagesController@getFourth_ps')->name('fourth_ps');
Route::get('/contacts', 'PagesController@getContacts')->name('contacts');

Route::group(['middleware' => ['web']], function(){

    Route::get('/login', 'PagesController@getLogin')->name('login');
});
