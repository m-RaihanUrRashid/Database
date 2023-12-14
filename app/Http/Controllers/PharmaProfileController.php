<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class PharmaProfileController extends Controller
{
    public function loadProfile(Request $request){
        $user = $request->session()->get('user');
        return view("pharmacyHome" , ["user"=> $user]);
    }

    public function destroy(Request $request, $cpUserID, $csUserID, $dappDate, $cappTime){
        
        $user = $request->session()->get('user');

        $app = Appointment::where('cpUserID', $user->cUserID)
                    ->where('csUserID', $csUserID)
                    ->where('dappDate', $dappDate)
                    ->where('cappTime', $cappTime)
                    ->delete();

        return redirect()->route('loadApps')->with('success','Appointment Deleted');
    }
}
