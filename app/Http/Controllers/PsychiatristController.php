<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsychiatristController extends Controller
{
    //
    public function index(Request $request)
    {
        // Get the user data from the session
        $user = $request->session()->get('user');

        // Pass user data to the view
        return view('psychInfo', ['user' => $user]);
    }

}
