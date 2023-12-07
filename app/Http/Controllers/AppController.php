<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppController extends Controller
{


    public function view(Request $request){

        

        $user = $request->session()->get('user');

        $appointments = Appointment::where('csUserID', $user->cUserID)->get();

        return view('psychAppt', ['appointments' => $appointments]);
    }

    public function togle(Request $request)
{        

        $appointment = $request;

        $appointment = Appointment::where('cpUserID', $request->cpUserID)
        ->where('csUserID', $request->csUserID)
        ->where('dappDate', $request->dappDate)
        ->where('dappTime', $request->dappTime)
        ->first();
        
        $appointment->cappStatus = 'yes';
        $appointment->save();

        return redirect()->route('psychAppt.view'); // Assuming 'psychAppt.view' is the route to your view method
}
}