<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Person;


use Illuminate\Http\Request;

class rehabUpdateMyInfoController extends Controller
{
    public function updateInformation(Request $request)
    {
        // Retrieve the logged-in specialist
        $user = $request->session()->get('user');
        $specialist = Person:: where ('cUserID', $user->cUserID)->first();

        // Update Specialist model properties based on form input
        $specialist->cUserID = $user-> cUserID;
        $specialist->cFname = $request->input('Fname');
        $specialist->cLname = $request->input('Lname');
        $specialist->dDOB = $request->input('DOB');
        $specialist->cGender = $request->input('Gender');
        $specialist->cAddress = $request->input('Address');
        $specialist->cEmail = $request->input('Email');

        // Save changes to the database
        $specialist->save();

        // Redirect back to the same page or any other page you desire
        return redirect()->route('rehabUpdateMyInfo')->with('success', 'Information updated successfully');
    }

    public function loadInfo(Request $request){

        $user = $request->session()->get('user');

        $specialist = Person::where('cUserID',$user->cUserID)->first();

        return view('rehabUpdateMyInfo', ['specialist' => $specialist]);
    }

    
}
