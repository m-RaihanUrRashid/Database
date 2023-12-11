<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Person;
use Illuminate\Http\Request;

class CheckAppntController extends Controller
{
    public function loadApps(Request $request){
        
        $user = $request->session()->get('user');

        $apps = Appointment::with('specialist.person')->where('cpUserID', $user->cUserID)->get();

        return view("patientCheckApp" , ["apps"=> $apps]);
    }

    public function destroy(Request $request, $cpUserID, $csUserID, $dappDate, $dappTime){
        
        $user = $request->session()->get('user');

        $app = Appointment::where('cpUserID', $user->cUserID)
                    ->where('csUserID', $csUserID)
                    ->where('dappDate', $dappDate)
                    ->where('dappTime', $dappTime)
                    ->delete();

        return redirect()->route('loadApps')->with('success','Appointment Deleted');
    }
}
