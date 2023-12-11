<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;
use App\Models\Person;
use App\Models\Appointment;
use Carbon\Carbon;


class MakeAppController extends Controller
{
    public function loadSpecs(){

        $specs = Specialist::with('person')->get();

        $specPersons = [];
        $apps = [];

    // Loop through each specialist to get the associated persons
        foreach ($specs as $spec) {
            $specPersons[] = Person::where('cUserID', $spec->csUserID)->get();
            $apps[] = Appointment::where('csUserID', $spec->csUserID)->get();
        }

        

        //$specPersons = Person::where('cUserID', $specs->csUserID)->get();

        return view('patientMakeApp', ['specs' => $specPersons, 'apps' => $apps]);
    }

    public function saveApp(Request $request){

        $user = $request->session()->get('user');

        
        $appointment = new Appointment();
        $appointment->cpUserID = $user->cUserID;
        $appointment->csUserID = $request->input('spec');
        $appointment->dappDate = Carbon::parse($request->input('date'));
        $appointment->dappTime = $request->input('time');
        $appointment->cappStatus= "no";
        $appointment->save();
        
        return response()->json(['status' => 'success']);

        //return redirect(route('patientHome'));
       
    }

}
