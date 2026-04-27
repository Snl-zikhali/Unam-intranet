<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItsAccessController;
use App\Http\Controllers\PersonalDetail;
use App\Http\Controllers\AddressBookController;



// sidebar pages

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


//It ACCESS

Route::post('/technology/personnel_no', [ItsAccessController::class, 'store'])->name('its.access.store');

Route::get('/its-access', function (){
    return view('personnel-no');
});

Route::post('/dis-info',[PersonalDetail::class, 'getPersonaldetail'])->name('verify.info');


//Address book

Route::post('/staff-details', [AddressBookController::class, 'store'])->name('staff.detail.store');

Route::get('/staff-info', function(){
    return view('address-book');
});

//Route::post('/address-book/staff-details', [AddressBookController::class, 'getStaffDetail'])->name('address-book.search');

// Change this line:
// Route::post('/address-book/staff-details', [AddressBookController::class, 'getStaffDetail'])->name('address-book.search');

// To this (Supports both searching and clicking a specific name):
Route::match(['get', 'post'], '/address-book', [AddressBookController::class, 'getStaffDetail'])->name('address-book.search');

Route::get('/', function () {
    return view('app');  // Points to resources/views/app.blade.php
});