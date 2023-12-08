<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppController extends Controller
{

    public function view(Request $request)
    {
        $user = $request->session()->get('user');

        $appointments = Appointment::where('csUserID', $user->cUserID)->get();
        // dd($appointments);
        return view('psychAppt', ['appointments' => $appointments]);
    }

    public function toggle(Request $request, $cpUserID, $csUserID, $dappDate, $dappTime)
    {
        

        $appointment = Appointment::where('cpUserID', $cpUserID)
            ->where('csUserID', $csUserID)
            ->where('dappDate', $dappDate)
            ->where('dappTime', $dappTime)
            ->update(['cappStatus' => 'yes']);
            
        // $appointment->cappStatus = 'yes';
        // dd($appointment);
        // $appointment->save();
        
        return redirect()->back()->with('success', 'Appointment status updated.');
    }
}
