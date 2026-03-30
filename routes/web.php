<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('address-book');
});

Route::get('/address-book', function () {
    return view('address-book');
});


Route::get('/the-brand', function () {
    return view('the-brand');
});


Route::get('/vacancies', function () {
    return view('vacancies');
});

Route::get('/statistics', function () {
    return view('statistics');
});



Route::get('/calendar', function () {
    return view('calendar');
});


Route::get('/forms', function () {
    return view('forms');
});


Route::get('/policies', function () {
    return view('policies');
});


Route::get('/links', function () {
    return view('links');
});


Route::get('/technology',function() {
    return view('technology');
});