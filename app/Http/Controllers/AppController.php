<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;


class AppController extends Controller
{


    public function view(Request $request){

        

        $user = $request->session()->get('user');
        
        $appointments = Appointment::where('csUserID', $user->cUserID)->get();
        // dd($appointments);
        return view('psychAppt', ['appointments' => $appointments]);
    }

    public function togle (Request $request, $compositeKey)
{
    // Extract components from the composite key
    list($cpUserID, $csUserID, $dappDate, $dappTime) = explode('-', $compositeKey);

    // Logic for handling the form submission
    $appointment = Appointment::where('cpUserID', $cpUserID)
        ->where('csUserID', $csUserID)
        ->where('dappDate', $dappDate)
        ->where('dappTime', $dappTime)
        ->first();

    // Perform actions with the $appointment instance
    // For example, update the status
    $appointment->cappStatus = 'yes';
    $appointment->save();

    return redirect()->back()->with('success', 'Appointment status updated.');
}
}