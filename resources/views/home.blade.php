<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <div class="container mt-5">
        <h1>Welcome to our website!</h1>
        <p>This is a simple example demonstrating the include directive in Laravel Blade.</p>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
