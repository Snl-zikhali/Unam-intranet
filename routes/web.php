<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});





Route::get('/the-brand', function () {
    return view('the-brand');
});