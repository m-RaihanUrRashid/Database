<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Specialist;
use App\Models\Therapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rehabAddSpecialistController extends Controller
{ 

    public function addSpecialist(Request $request)
    {
        $request->validate([
            'specialistID' => 'required|string',
            'Experience' => 'required|string',
            'officeAddress' => 'required|string',
            'Type' => 'required|string',
            'Fname' => 'required|string',
            'Lname' => 'required|string',
            'datepicker' => 'required',
            'Email' => 'required|email',
            'homeAddress' => 'required|string'
        ]);

        $person = new Person();
        $person->cFname = $request->input('Fname');
        $person->cLname = $request->input('Lname');
        $person->dDOB = strval($request->input('datepicker'));
        $person->cEmail = $request->input('Email');
        $person->cUserID = $request->input('specialistID');
        $person->cAddress = $request->input('homeAddress');
        $person->cType = $request->input('Type');
        $person->cGender = $request->input('cGender');




        $person->save();

        $specialist = new Specialist();

        $specialist->csUserID = $request->input('specialistID');
        $specialist->cExperience = $request->input('Experience');
        $specialist->cOff_Address = $request->input('officeAddress');
        $specialist->cType = $request->input('Type');
        $specialist->cArea = $request->input('cArea');

        $specialist->save();

        // Checking if the type is a Therapist
        if ($request->input('Type') == 'Therapist'){
            $newTherapist = new Therapist();

            $newTherapist->ctsUserID = $request->input('specialistID');
            $newTherapist->cSpecialty = 'test';
            $newTherapist->save();

            DB::table('therapist_work_records_t')->insert([
                'ctsUserID' => $request->input('specialistID'),
                'cRehabID' => null,
                'dJ_Date' => now(),
                'dL_Date' => null,
            ]);

        }

        return redirect()->route('rehabSupervisorHome')->with('success', 'Specialist added successfully');
    }

}
