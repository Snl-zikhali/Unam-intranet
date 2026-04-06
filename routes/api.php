<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/test', function () {
    return "It works";
});

Route::get('/employee/{personnel}', function ($personnel) {

    $user = Employee::where('personnel_number', $personnel)->first();

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    return response()->json($user);
});