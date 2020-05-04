<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{slug?}', 'HomeController@index')->name('home')->where('slug', '([A-z\d\-\/_.]+)');

Auth::routes();
