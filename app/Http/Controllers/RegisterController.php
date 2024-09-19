<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'birthdate' => 'required|date|before:today',
            'phone' => 'required|integer',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|min:5',
            'country' => 'required|string|max:255',
            'terms_and_conditions' => 'accepted',
        ]);
       /*$validator = Validator::make($request->all(), [...]);: This line creates a new validator instance using the Validator::make() method. It takes two arguments:
$request->all(): This method retrieves all input data from the incoming request. It returns an associative array containing all the form fields and their respective values.
[...]: This is an associative array defining the validation rules for each input field. Each key-value pair represents a field name and its corresponding validation rules. For example:
'name' => 'required|string|max:255': This specifies that the name field is required, must be a string, and must not exceed 255 characters in length.
'email' => 'required|email|unique:users,email': This specifies that the email field is required, must be a valid email format, and must be unique in the users table's email column.
'password' => 'required|string|min:8|confirmed': This specifies that the password field is required, must be a string, must be at least 8 characters long, and must match the password_confirmation field.
'birthdate' => 'required|date|before:today': This specifies that the birthdate field is required, must be a valid date format, and must be before today's date.
'phone' => 'required|integer': This specifies that the phone field is required and must be an integer.
'address' => 'required|string|max:255': This specifies that the address field is required, must be a string, and must not exceed 255 characters in length.
'city' => 'required|string|max:255': This specifies that the city field is required, must be a string, and must not exceed 255 characters in length.
'zip_code' => 'required|min:5': This specifies that the zip_code field is required and must be at least 5 characters long.
'country' => 'required|string|max:255': This specifies that the country field is required, must be a string, and must not exceed 255 characters in length.
'terms_and_conditions' => 'accepted': This specifies that the terms_and_conditions field must be present and accepted. Usually used for checkbox validation.*/
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        return redirect('/register')->with('success', 'Registration successful!');
    }
}
/*The provided PHP code defines a RegisterController class within the App\Http\Controllers namespace, which extends the base Controller class. This controller contains two methods: showRegistrationForm() and register(Request $request). The former renders a view named register, typically displaying the registration form, while the latter handles registration submissions. In the register() method, input data from the request is validated using Laravel's Validator facade against various rules specified in an associative array. If validation fails, the user is redirected back to the registration form with validation errors and old input data flashed to the session. If validation succeeds, the user is redirected to /register with a success message flashed to the session. Overall, this controller manages the registration process, including form rendering and data validation.*/