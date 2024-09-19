<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ExampleController extends Controller
{
    public function create()
    {
        return view('your-form');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'enum_field' => 'required|in:value1,value2,value3',
            'checkboxes_field' => 'required|array|min:1',
            'checkboxes_field.*' => 'integer|in:1,2,3',
            'range_field' => 'required|numeric|min:0|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
