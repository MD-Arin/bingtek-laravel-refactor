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

Route::get('/', function () {
    return view('main.home');
});

Route::get('/home', function () {
    return view('main.home');
})->name('home');

Route::get('/about', function(){
    return view('main.about');
})->name('about');

Route::get('/first_ps', function(){
    return view('main.first_ps');
})->name('first_ps');

Route::get('/second_ps', function(){
    return view('main.second_ps');
})->name('second_ps');

Route::get('/third_ps', function(){
    return view('main.third_ps');
})->name('third_ps');

Route::get('/fourth_ps', function(){
    return view('main.fourth_ps');
})->name('fourth_ps');

Route::get('/contacts', function(){
    return view('main.contacts');
})->name('contacts');

Route::group(['middleware' => ['web']], function(){

    Route::get('/login', function(){
      return view('main.login');
    })->name('login');
});
