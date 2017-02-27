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

//Dashboard Home routes
Route::post('/dashboard/homeCover', 'DashboardController@updateHome');
Route::post('/dashboard/homeCoIntro', 'DashboardController@updateHomeCoIntro');
Route::post('/dashboard/homeInternet', 'DashboardController@updateHomeInternet');
Route::post('/dashboard/homeNetworking', 'DashboardController@updateHomeNetworking');
Route::post('/dashboard/homeSoftDev', 'DashboardController@updateHomeSoftDev');
Route::post('/dashboard/homeSoftMen', 'DashboardController@updateHomeSoftMen');
Route::post('/dashboard/homeOfficeSpace', 'DashboardController@updateOfficeSpace');

//Dashboard About routes
Route::post('/dash-about/aboutHistory', 'DashAboutController@updateAboutHistory');
Route::post('/dash-about/aboutMilestones', 'DashAboutController@updateAboutMilestones');
Route::post('/dash-about/aboutTestimonials', 'DashAboutController@updateAboutTestimonials');
Route::post('/dash-about/aboutPartners', 'DashAboutController@updateAboutPartners');
Route::post('/dash-about/aboutTeam', 'DashAboutController@updateAboutTeam');

//Dashboard First Product/Service routes
Route::post('/dash-fps/fpsConnectivity', 'DashFpsController@updateFpsConnectivity');
Route::post('/dash-fps/fpsInternet', 'DashFpsController@updateFpsInternet');
Route::post('/dash-fps/fpsFastInternet', 'DashFpsController@updateFpsFastInternet');
Route::post('/dash-fps/fpsUsers', 'DashFpsController@updateFpsUsers');

//Dashboard Second Product/Service routes
Route::post('/dash-sps/spsIntro', 'DashSpsController@updateSpsIntro');
Route::post('/dash-sps/spsSec2', 'DashSpsController@updateSpsSec2');
Route::post('/dash-sps/spsTouchline', 'DashSpsController@updateSpsTouchline');
Route::post('/dash-sps/spsSec3', 'DashSpsController@updateSpsSec3');
Route::post('/dash-sps/spsSec4', 'DashSpsController@updateSpsSec4');

//Dashboard Third Product/Service routes
Route::post('/dash-tps/tpsSoftDevIntro', 'DashTpsController@updateSoftDevIntro');
Route::post('/dash-tps/tpsSoftDev', 'DashTpsController@updateSoftDev');
Route::post('/dash-tps/tpsSoftMen', 'DashTpsController@updateSoftMen');
Route::post('/dash-tps/tpsSoftDiverse', 'DashTpsController@updateSoftDiverse');

//Dashboard Fourth Product/Service routes
Route::post('/dash-frps/frpsOfficePartitioning', 'DashFrpsController@updateOfficePartitioning');
Route::post('/dash-frps/frpsOfficeSmart', 'DashFrpsController@updateOfficeSmart');
Route::post('/dash-frps/frpsOfficeAll', 'DashFrpsController@updateOfficeAll');
Route::post('/dash-frps/frpsOfficeComfort', 'DashFrpsController@updateOfficeComfort');
Route::post('/dash-frps/frpsOfficeDesign', 'DashFrpsController@updateOfficeDesign');
Route::post('/dash-frps/frpsOfficeLuxury', 'DashFrpsController@updateOfficeLuxury');

//Dashboard Nav routes
Route::post('/dash-nav/navProductsServices', 'DashNavController@updateProductsServices');