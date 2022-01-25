<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('views.home');
});

Route::get('link', function () {
    return view('views.link');
});

Route::get('/', 'Comic@home') -> name('home');

