<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Specialist;
use Illuminate\Http\Request;

class rehabAddSpecialistController extends Controller
{ // rehabAddSpecialistController.php

    public function addSpecialist(Request $request)
    {
        $request->validate([
            'specialistID' => 'required|string',
            'Experience' => 'required|string',
            'officeAddress' => 'required|string',
            'Type' => 'required|string',
            'Fname' => 'required|string',
            'Lname' => 'required|string',
            'DOB' => 'required|date',
            'Email' => 'required|email',
        ]);

        $person = new Person();
        $person->cFname = $request->input('Fname');
        $person->cLname = $request->input('Lname');
        $person->dDOB = $request->input('DOB');
        $person->cEmail = $request->input('Email');
        $person->cUserID = $request->input('specialistID');
        $person->cAddress = $request->input('homeAddress');

        $person->save();

        return redirect()->route('rehabSupervisorHome')->with('success', 'Person added successfully');

        $specialist = new Specialist();

        $specialist->csUserID = $request->input('specialistID');
        $specialist->cExperience = $request->input('Experience');
        $specialist->cOff_Address = $request->input('officeAddress');
        $specialist->cType = $request->input('Type');

        $specialist->save();

        return redirect()->route('rehabSupervisorHome')->with('success', 'Specialist added successfully');
    }

    public function addPerson(Request $request)
    {
        $request->validate([
            'Fname' => 'required|string',
            'Lname' => 'required|string',
            'DOB' => 'required|date',
            'Email' => 'required|email',
        ]);

        $person = new Person();
        $person->cFname = $request->input('Fname');
        $person->cLname = $request->input('Lname');
        $person->dDOB = $request->input('DOB');
        $person->cEmail = $request->input('Email');

        $person->save();

        return redirect()->route('rehabSupervisorHome')->with('success', 'Person added successfully');
    }
}
