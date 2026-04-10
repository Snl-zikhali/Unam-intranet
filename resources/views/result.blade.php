@<!DOCTYPE html>
<html>
<head>
    <title>Employee Result</title>
</head>
<body>

@if($employee)
    <h1>{{ $employee->fullname }}</h1>
    <p><strong>Personnel Number:</strong> {{ $employee->personnel_number }}</p>
    <p><strong>Email:</strong> {{ $employee->email }}</p>
    <p><strong>Job Title:</strong> {{ $employee->job_title }}</p>
    <p><strong>Faculty:</strong> {{ $employee->faculty }}</p>
    <p><strong>Department:</strong> {{ $employee->department }}</p>
@else
    <p>User not found</p>
@endif

<a href="/technology">Go Back</a>

</body>
</html>