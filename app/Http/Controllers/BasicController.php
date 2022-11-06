<?php

namespace App\Http\Controllers;

use App\Models\FormValudate;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('basic.index');
    }

    public function formValidation()
    {
        return view('basic.validation');
    }

    public function formValidateCheck(Request $request)
    {

        $validated = $request->validate([
            'user' => 'required|max:255',
            'email' => 'required|unique:form_valudates|max:255',
            'phone' => 'required|max:11',
            'password' => 'required|min:6|max:12',
        ]);

        FormValudate::storeData($request);
        return back()->with('msg','Data Inserted');
    }
}
