<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppController extends Controller
{

    public function view(Request $request)
    {
        $user = $request->session()->get('user');

        $appointments = Appointment::where('csUserID', $user->cUserID)
        ->where('cappStatus', 'no')
        ->get();
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


    public function past(Request $request)
{
    $user = $request->session()->get('user');

    $appointments = Appointment::where('csUserID', $user->cUserID)
        ->where('cappStatus', 'yes')
        ->get();

    return view('pastAppts', ['appointments' => $appointments]);
}

public function delete(Request $request, $cpUserID, $csUserID, $dappDate, $dappTime)
{
    $appointment = Appointment::where('cpUserID', $cpUserID)
        ->where('csUserID', $csUserID)
        ->where('dappDate', $dappDate)
        ->where('dappTime', $dappTime)
        ->delete();

    return redirect()->back()->with('success', 'Appointment deleted successfully.');
}
}
