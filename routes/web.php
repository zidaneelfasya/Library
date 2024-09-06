<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/main2', function () {
    return view('main2');
});