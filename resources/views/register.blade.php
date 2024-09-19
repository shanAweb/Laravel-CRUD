<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 20px;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input id="birthdate" type="date" name="birthdate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" type="text" name="address" class="form-control" value="{{ old('address') }}" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input id="city" type="text" name="city" class="form-control" value="{{ old('city') }}" required>
            </div>
            <div class="form-group">
                <label for="zip_code">ZIP Code</label>
                <input id="zip_code" type="text" name="zip_code" class="form-control" value="{{ old('zip_code') }}" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input id="country" type="text" name="country" class="form-control" value="{{ old('country') }}" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="terms_and_conditions" class="form-check-input" id="terms_and_conditions" required>
                <label class="form-check-label" for="terms_and_conditions">I accept the terms and conditions</label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
