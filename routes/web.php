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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/first_ps', function(){
    return view('first_ps');
})->name('first_ps');

Route::get('/second_ps', function(){
    return view('second_ps');
})->name('second_ps');

Route::get('/third_ps', function(){
    return view('third_ps');
})->name('third_ps');

Route::get('/fourth_ps', function(){
    return view('fourth_ps');
})->name('fourth_ps');

Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');

Route::group(['middleware' => ['web']], function(){

    Route::get('/login', function(){
      return view('login');
    })->name('login');
});
