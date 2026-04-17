<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;


class AddressBookController
{    
// Change 'public function search' to 'public function getStaffDetail' 
// to match your web.php route
public function getStaffDetail(Request $request)
{
    // These names MUST match the 'name' attribute in your HTML form
    $search = $request->input('sfn'); // First Name input
    $surname = $request->input('ssn'); // Surname input
    $dept = $request->input('sdept'); // Department input

    $results = Staff::query()
        ->when($search, function($q) use ($search) {
            return $q->where('full_name', 'like', "%{$search}%");
        })
        ->when($surname, function($q) use ($surname) {
            return $q->where('full_name', 'like', "%{$surname}%");
        })
        ->when($dept, function($q) use ($dept) {
            return $q->where('department', 'like', "%{$dept}%");
        })
        ->get();

    return view('address-book', compact('results'));
}


}