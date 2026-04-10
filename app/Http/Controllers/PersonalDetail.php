<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class PersonalDetail
{
    public function getPersonaldetail(Request $request){
      
    
        $personnel_no = $request->input('personnel_no');

        // Use first() instead of firstOrFail() for now so you can handle the error manually
        $user = Employee::where('personnel_number', $request->personnel_no)->first();

        if (!$user) {
            return back()->with('error', 'Personnel Number not found.');
        }

        return view('access-from', compact('user'));
        
    }

}
