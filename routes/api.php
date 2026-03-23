<?php

// ============================================================
// API ROUTES
// File: routes/api.php
//
// This file registers all API endpoints.
// Every route here is automatically prefixed with /api/
// by Laravel — you do NOT need to write /api/ yourself.
//
// So Route::get('/employees') becomes accessible at:
//   http://your-site.com/api/employees
//
// API routes do NOT use sessions or cookies by default.
// They are designed to receive requests and return JSON data.
// ============================================================

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;

// ---------------------------------------------------
// Route::prefix('employees') groups all employee
// routes under the /api/employees path.
// Route::controller() means all routes in this group
// use the EmployeeController class.
// ---------------------------------------------------
Route::prefix('employees')
    ->controller(EmployeeController::class)
    ->group(function () {

        // GET /api/employees
        // GET /api/employees?search=john
        // GET /api/employees?department=ICT+Services
        // → Returns a list of employees (filtered if params given)
        Route::get('/', 'index')->name('api.employees.index');

        // GET /api/employees/departments
        // → Returns a list of all unique department names
        // NOTE: This must be defined BEFORE /{id} otherwise
        //       Laravel will try to look up "departments" as an id
        Route::get('/departments', 'departments')->name('api.employees.departments');

        // GET /api/employees/42
        // → Returns the single employee with id 42
        Route::get('/{id}', 'show')->name('api.employees.show');
    });