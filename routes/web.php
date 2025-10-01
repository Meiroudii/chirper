<?php

use Illuminate\Support\Facades\Route;

Route::get('/greet', function () {
    return view('welcome');
});


Route::get("/", [ChirpController::class, "index"]);


Route::get('/working', function () {
    return view('gonna_try');
});

Route::get("/fake-admin", function () {
    return view("fake_admin");
});

