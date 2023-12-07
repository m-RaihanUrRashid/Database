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
        $requestData = json_decode($request->input('markasdone'), true);

        // Check if decoding was successful
        if ($requestData) {
            $cpUserID = $requestData['cpUserID'];
            $csUserID = $requestData['csUserID'];
            $dappDate = $requestData['dappDate'];
            $dappTime = $requestData['dappTime'];
            $cappStatus = $requestData['cappStatus'];

            $appointment = Appointment::where('cpUserID', $cpUserID)
            ->where('csUserID', $csUserID)
            ->where('dappDate', $dappDate)
            ->where('dappTime', $dappTime)
            ->first();
            
            $appointment->cappStatus = 'yes';
            $appointment->save();

            return redirect()->route('psychAppt.view'); // Assuming 'psychAppt.view' is the route to your view method

        } else {
            dd("error");
        }
}
}