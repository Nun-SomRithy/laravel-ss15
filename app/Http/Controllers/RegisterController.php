<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        $data = $request->all();

        // Get the values from the form data
        $email = $data['floating_email'];
        $firstName = $data['floating_first_name'];
        $lastName = $data['floating_last_name'];
        $company = $data['floating_company'];

        // Redirect back to the form with the input data
        return redirect('/register')->withInput($request->input());
    }
}
