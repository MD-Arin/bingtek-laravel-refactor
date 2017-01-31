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

//Main routes
Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/first_ps', 'PagesController@getFirst_ps')->name('first_ps');
Route::get('/second_ps', 'PagesController@getSecond_ps')->name('second_ps');
Route::get('/third_ps', 'PagesController@getThird_ps')->name('third_ps');
Route::get('/fourth_ps', 'PagesController@getFourth_ps')->name('fourth_ps');
Route::get('/contacts', 'PagesController@getContacts')->name('contacts');


Auth::routes();

//Dashboard routes
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/dash-nav', 'HomeController@getDashNav')->name('dash-nav');
Route::get('/dash-footer', 'HomeController@getDashFooter')->name('dash-footer');
Route::get('/dash-about', 'HomeController@getDashAbout')->name('dash-about');
Route::get('/dash-fps', 'HomeController@getDashFps')->name('dash-fps');
Route::get('/dash-sps', 'HomeController@getDashSps')->name('dash-sps');
Route::get('/dash-tps', 'HomeController@getDashTps')->name('dash-tps');
Route::get('/dash-frps', 'HomeController@getDashFrps')->name('dash-frps');
Route::get('/logout', 'HomeController@getLogout')->name('logout');

//Dashboard routes
Route::post('/dashboard/homeCover', 'DashboardController@updateHome');
Route::post('/dashboard/homeCoIntro', 'DashboardController@updateHomeCoIntro');
Route::post('/dashboard/homeInternet', 'DashboardController@updateHomeInternet');
Route::post('/dashboard/homeNetworking', 'DashboardController@updateHomeNetworking');
Route::post('/dashboard/homeSoftDev', 'DashboardController@updateHomeSoftDev');
Route::post('/dashboard/homeSoftMen', 'DashboardController@updateHomeSoftMen');
Route::post('/dashboard/homeOfiiceSpace', 'DashboardController@updateOfficeSpace');
