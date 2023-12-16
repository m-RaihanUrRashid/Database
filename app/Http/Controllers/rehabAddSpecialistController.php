<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Person;
use App\Models\Psychiatrist;
use App\Models\Specialist;
use App\Models\Therapist;
use App\Models\User;
use App\Models\Rehab;

class rehabAddSpecialistController extends Controller
{

    public function addSpecialist(Request $request)
    {

        // $request->validate([
        //     'specialistID' => 'required|string',
        //     'Experience' => 'required|string',
        //     'officeAddress' => 'required|string',
        //     'Type' => 'required|string',
        //     'Fname' => 'required|string',
        //     'Lname' => 'required|string',
        //     'datepicker' => 'required',
        //     'Email' => 'required|email',
        //     'homeAddress' => 'required|string'
        // ]);

        // dd($request);

        $person = new Person();
        $newID = strval(mt_rand(1000000, 9999999));
        $person->cUserID = $newID;
        $person->cFname = $request->input('Fname');
        $person->cLname = $request->input('Lname');
        $person->cGender = $request->input('cGender');
        $person->dDOB = strval($request->input('datepicker'));
        $person->cAddress = $request->input('homeAddress');
        $person->cEmail = $request->input('Email');
        $person->cType = $request->input('Type');
        $person->save();

        $specialist = new Specialist();
        $specialist->csUserID = $newID;
        $specialist->cExperience = $request->input('Experience');
        $specialist->cOff_Address = $request->input('officeAddress');
        $specialist->cType = $request->input('Type');
        $specialist->cArea = $request->input('cArea');
        $specialist->save();

        $user = $request->session()->get('user');
        $rehab = Rehab::where ('cSupervisorID', $user->cUserID)->first();
        $rid = $rehab->cRehabID;

        if ($request->input('Type') == 'Therapist') {
            $newTherapist = new Therapist();
            $newTherapist->ctsUserID = $newID;
            $newTherapist->save();

            DB::table('therapist_work_records_t')->insert([
                'ctsUserID' => $newID,
                'cRehabID' => $rid,
                'dJ_Date' => now(),
                'dL_Date' => null,
            ]);
        } else {
            $newPsych = new Psychiatrist();
            $newPsych->cpsUserID = $newID;
            $newPsych->save();

            DB::table('psychiatrist_work_records_t')->insert([
                'cpsUserID' => $newID,
                'cRehabID' => $rid,
                'dJ_Date' => now(),
                'dL_Date' => null,
            ]);
        }

        $data['cType'] = $request->input('Type');
        $data['name'] = $request->input('Fname');
        $data['email'] = $request->input('Email');
        $data['password'] = Hash::make($request->input('Password'));
        User::create($data);

        return redirect()->route('rehabSupervisorHome')->with('success', 'Specialist added successfully');
    }
}
