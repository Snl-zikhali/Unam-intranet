@php $activePage = 'app'; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('includes.head')
</head>
<body>
    @include('includes.sidebar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">MyApp</a>
        </div>
    </nav>

    <main class="container my-5">
        <!-- Your page content here -->
       @extends('app')

@section('title', 'app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h1>About Us</h1>
            <p>Welcome to our company. We build amazing web applications...</p>
        </div>
    </div>
@endsection
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('includes.scripts')
</body>
</html>