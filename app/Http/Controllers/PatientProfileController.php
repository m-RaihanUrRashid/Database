<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Person;


class PatientProfileController extends Controller
{
    public function viewInfo(Request $request){

        $u = $request->session()->get('user');
        $user = Person:: where ('cUserID', $u->cUserID)->first();
        
        $patient = Patient::where ('cpUserID', $u->cUserID)->first();
        
        return view('patientProfile',  ['user' =>$user, 'patient'=>$patient]);
    }

    public function editViewInfo(Request $request){

        $u = $request->session()->get('user');
        $user = Person:: where ('cUserID', $u->cUserID)->first();

        $patient = Patient::where ('cpUserID', $u->cUserID)->first();

        
        return view('patientProfileEdit',['user' =>$user, 'patient'=>$patient]);
    }

    public function updateInfo(Request $request){

        $user = $request->session()->get('user');

        $person = Person:: where ('cUserID', $user->cUserID)->first();

        // Update Specialist model properties based on form input
        $person->cUserID = $user->cUserID;
        $person->cFname = $request->input('Fname');
        $person->cLname = $request->input('Lname');
        $person->dDOB = $request->input('DOB');
        $person->cGender = $request->input('Gender');
        $person->cAddress = $request->input('Address');

        // Save changes to the database
        $person->save();
        
        $patient = Patient:: where ('cpUserID', $user->cUserID)->first();

        $patient->cMedicalHistory = $request->input('mHistory');

        $patient->save();

        // Redirect back to the same page or any other page you desire
        return redirect()->route('patientProfile.viewInfo')->with('success', 'Information updated successfully');
    }

}
