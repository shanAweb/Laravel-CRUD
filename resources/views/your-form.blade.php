<!-- resources/views/your-form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Your Form</title>
</head>
<body>
    <h1>Your Form</h1>

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

    <form method="POST" action="{{ route('form.store') }}">
        @csrf

        <!-- Enum field -->
        <label for="enum_field">Select an enum value:</label><br>
        <select name="enum_field" id="enum_field">
            <option value="value1">Value 1</option>
            <option value="value2">Value 2</option>
            <option value="value3">Value 3</option>
        </select><br><br>

        <!-- Checkboxes field -->
        <label>Choose one or more checkboxes:</label><br>
        <input type="checkbox" name="checkboxes_field[]" value="1"> Checkbox 1<br>
        <input type="checkbox" name="checkboxes_field[]" value="2"> Checkbox 2<br>
        <input type="checkbox" name="checkboxes_field[]" value="3"> Checkbox 3<br><br>

        <!-- Range field -->
        <label for="range_field">Enter a number between 0 and 50:</label><br>
        <input type="number" name="range_field" id="range_field" min="0" max="50"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
