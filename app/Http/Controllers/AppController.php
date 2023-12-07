<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppController extends Controller
{

    public function index()
    {
       

        
        return view('psychAppt');
    }

    public function view(Request $request)
    {
        
        $user = $request->session()->get('user');
        
        $appointments = Appointment::where('csUserID', $user->cUserID)->get();
    
        return view('psychAppt', ['appointments' => $appointments]);
    }
}