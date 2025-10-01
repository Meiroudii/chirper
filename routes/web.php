<?php

use Illuminate\Support\Facades\Route;

Route::get('/greet', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/working', function () {
    return view('gonna_try');
});
