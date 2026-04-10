<?php

/**
 * API ROUTES - api.php
 * 
 * These are the API endpoints that return JSON data.
 * All routes here are prefixed with /api
 * 
 * Example:
 *   Route::get('/test') → URL: http://localhost/api/test
 *   Route::get('/employee/{id}') → URL: http://localhost/api/employee/12345
 */

/**use Illuminate\Support\Facades\Route;
use App\Models\Employee;
Route::get('/employee/{personnel}', function ($personnel) {

    if ($personnel !== "12345") {
        return response()->json(['error' => 'User not found'], 404);
    }

    return response()->json([
        'surname' => 'Shikongo',
        'fullname' => 'John Shikongo',
        'email' => 'john@unam.na',
        'job_title' => 'Lecturer',
        'faculty' => 'Science',
        'department' => 'Computer Science',
    ]);
});