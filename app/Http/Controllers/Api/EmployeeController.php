<?php

// ============================================================
// API CONTROLLER
// File: app/Http/Controllers/Api/EmployeeController.php
//
// A Controller handles the logic between the database and
// the response sent back to the browser.
//
// Flow of a request:
//   Browser sends: GET /api/employees?search=john
//        ↓
//   api.php routes it to → EmployeeController@index
//        ↓
//   Controller queries the database
//        ↓
//   Controller returns JSON back to the browser
// ============================================================

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmployeeController extends Controller
{
    // ============================================================
    // index() — LIST / SEARCH employees
    // Route:  GET /api/employees
    // Params: ?search=    (optional) search by name or department
    //         ?department= (optional) filter by exact department
    //
    // Returns: JSON array of employee objects
    // ============================================================
    public function index(Request $request): JsonResponse
    {
        // ---------------------------------------------------
        // Start building the query.
        // Employee::active() applies the scopeActive scope
        // defined in the model — only returns active employees.
        // ---------------------------------------------------
        $query = Employee::active();

        // ---------------------------------------------------
        // If the request includes ?search=something,
        // apply the search scope to filter results.
        //
        // $request->filled('search') returns true only if the
        // parameter exists AND is not empty ("" or null).
        // ---------------------------------------------------
        if ($request->filled('search')) {
            $query->search($request->input('search'));
        }

        // ---------------------------------------------------
        // If the request includes ?department=Human Resources,
        // filter to only show that department.
        // ---------------------------------------------------
        if ($request->filled('department')) {
            $query->inDepartment($request->input('department'));
        }

        // ---------------------------------------------------
        // orderBy('full_name') sorts results A–Z by name.
        // get() executes the query and returns a Collection
        // (think of it as an array of Employee objects).
        // ---------------------------------------------------
        $employees = $query->orderBy('full_name')->get();

        // ---------------------------------------------------
        // Return a JSON response.
        // response()->json() converts the PHP data to JSON
        // and sets the correct Content-Type header automatically.
        //
        // The second argument (200) is the HTTP status code:
        //   200 = OK (success)
        //   404 = Not Found
        //   422 = Validation Error
        //   500 = Server Error
        // ---------------------------------------------------
        return response()->json([
            'success' => true,
            'count'   => $employees->count(),    // How many results
            'data'    => $employees,             // The actual employee records
        ], 200);
    }

    // ============================================================
    // departments() — GET list of all unique department names
    // Route:  GET /api/employees/departments
    //
    // Used to populate the department dropdown on the page.
    // Returns: JSON array of department name strings
    // ============================================================
    public function departments(): JsonResponse
    {
        // ---------------------------------------------------
        // distinct() removes duplicates.
        // pluck('department') gets ONLY the department column
        // as a flat array (not full employee objects).
        // sort() sorts alphabetically.
        // values() resets the array keys to 0,1,2...
        //
        // Result example: ["Finance", "Human Resources", "ICT Services"]
        // ---------------------------------------------------
        $departments = Employee::active()
            ->distinct()
            ->orderBy('department')
            ->pluck('department');

        return response()->json([
            'success' => true,
            'data'    => $departments,
        ], 200);
    }

    // ============================================================
    // show() — GET a single employee by their ID
    // Route:  GET /api/employees/{id}
    //
    // Example: GET /api/employees/42 returns employee with id=42
    // ============================================================
    public function show(int $id): JsonResponse
    {
        // ---------------------------------------------------
        // findOrFail() looks up the employee by primary key (id).
        // If no record is found, it automatically throws a
        // 404 Not Found response instead of crashing.
        // ---------------------------------------------------
        $employee = Employee::findOrFail($id);

        return response()->json([
            'success' => true,
            'data'    => $employee,
        ], 200);
    }
}