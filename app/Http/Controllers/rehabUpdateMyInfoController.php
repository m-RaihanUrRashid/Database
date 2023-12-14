<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Person;


use Illuminate\Http\Request;

class rehabUpdateMyInfoController extends Controller
{
    // public function updateInformation(Request $request)
    // {
    //     $Specialist = Specialist::find(auth()->id());
    //     $Person = Person::where('cUserID', $Specialist->csUserID)->first();



    //     $Specialist->cOff_Address = $request->input('officeAddress');
    //     $Specialist->cOff_Address = $request->input('officeAddress');
    //     $Specialist->contactNo = $request->input('contactNo');
    //     $Specialist->rehab = $request->input('rehab');

    //     $Specialist->save();

    //     return redirect()->route('home')->with('success', 'Information updated successfully');
    // }

    // rehabUpdateMyInfoController.php

    

    // rehabUpdateMyInfoController.php

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
        return view('rehabUpdateMyInfo')->with('success', 'Information updated successfully');
    }
}
