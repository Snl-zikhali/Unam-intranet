<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class AddressBookController
{    
    public function getStaffDetail(Request $request)
    {
        $search = $request->input('search');
        $query = Staff::query();
        
        if ($search) {
            // Split search into individual words
            $words = explode(' ', trim($search));
            
            // Search where ANY word matches full_name OR department
            foreach ($words as $word) {
                if (!empty($word)) {
                    $word = trim($word);
                    $query->where(function($q) use ($word) {
                        $q->where('full_name', 'like', "%{$word}%")
                          ->orWhere('department', 'like', "%{$word}%");
                    });
                }
            }
        }
        
        $results = $query->get();

        // Always return JSON for AJAX requests
        if ($request->wantsJson() || $request->expectsJson() || $request->header('Accept') === 'application/json') {
            return response()->json($results);
        }

        // For non-AJAX requests, show the view
        return view('address-book', compact('results'));
    }
}