<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/origen', function () {
    return view('origen');
});
Route::get('/infancia', function () {
    return view('infancia');
});
Route::get('/adolescencia', function () {
    return view('adolescencia');
});