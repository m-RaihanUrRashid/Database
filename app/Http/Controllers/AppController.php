<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppController extends Controller
{

    public function index()
    {
       

        // Pass prescriptions to the view
        return view('psychAppt');
    }

    public function view(Request $request)
    {
        // Get the logged-in user
        $user = $request->session()->get('user');
    
        // Fetch appointments for the logged-in user
        $appointments = Appointment::where('cpUserID', $user->cpUserID)->get();
    
        // Pass appointments to the view
        return view('psychAppt', ['appointments' => $appointments]);
    }
}