<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('product', function () {
    return view('product');
});

Route::get('service', function () {
    return view('service');
});