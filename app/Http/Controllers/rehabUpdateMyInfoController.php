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

    public function showUpdateForm()  #new
    {
        // Retrieve the logged-in specialist
        $specialist = Specialist::find(auth()->id());

        return view('rehabUpdateMyInfo', compact('specialist'));
        // Assuming 'rehabUpdateMyInfo' is the Blade file name
    }

    // rehabUpdateMyInfoController.php

    public function updateInformation(Request $request)
    {
        // Retrieve the logged-in specialist
        $specialist = Specialist::find(auth()->id());

        // Update Specialist model properties based on form input
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
}
