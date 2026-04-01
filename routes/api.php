</php

route::get('/employee/{personnel}', function ($personnel){
    $user = \App\Models\User::where('personnel_number', $personnel)->first();

    if ($user) {
        return response()->json(['error' => 'User not found'], 404);

    }

    return response()->json([
    'surname' => $user->surname,
    'fullname' =>$useer->fullname,
    'email' => $user->emsil,
    'job' =>$user->job_title,
    'faculty' =>$user->faculty,
    'department' =>$user->department,
    ]);
});



