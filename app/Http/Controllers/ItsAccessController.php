<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Employee; // Assuming your model is here

class ItsAccessController 
{
public function store(Request $request)
{
    // 1. Validate the incoming data
    $request->validate([
        'service_type' => 'required',
        'personnel_no' => 'required'
    ]);

    // 2. Logic to save or process the access request
    // Example: AccessRequest::create($request->all());

    return redirect()->route('technology')->with('success', 'Access Request Submitted!');
}

    public function showInfo(Request $request)
    {
        $personnel_no = $request->input('personnel_no');

        // Use first() instead of firstOrFail() for now so you can handle the error manually
        $user = Employee::where('personnel_number', $personnel_no)->first();

        if (!$user) {
            return back()->with('error', 'Personnel Number not found.');
        }

        return view('access-from', compact('user'));
    }
}