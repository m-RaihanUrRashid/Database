<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Rehab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Person;
use App\Models\Ngo;
use App\Models\Pharma;


class AdminController extends Controller
{
    function addPharma() 
    {
        return view('addPharma');
    }
    
    function addRehab()
    {
        return view('addRehab');
    }

    function addNGO()
    {
        return view('addNGO');
    }

    function newPharma(Request $request)
    {
        $request->validate([
            'pharmacyName' => 'required',
            'area' => 'required',
            'address' => 'required',
            'contacts' => 'array'
        ]);
        dd($request);

        $user = null;
        $user = User::where('email', $request->email)->first();
        $credentials = $request->only('email', 'password');

        // dd($user, $credentials);

        if (Auth::attempt($credentials)) {
            // session(['user' => $user]);

            if ($user->cType == 'Patient') {
                $user = Person::where('cEmail', $request->email)->first();
                session(['user' => $user]);
                return redirect()->intended(route('patientHome'));
            } elseif ($user->cType == 'Psychiatrist') {
                $user = Person::where('cEmail', $request->email)->first();
                $supervisor = Rehab::where('cSupervisorID', $user->cUserID)->first();
                session(['user' => $user, 'supervisor'=> $supervisor]);
                return view('psychiatristHome');
            } elseif ($user->cType == 'Therapist') {
                $user = Person::where('cEmail', $request->email)->first();
                $supervisor = Rehab::where('cSupervisorID', $user->cUserID)->first();
                session(['user' => $user, 'supervisor'=> $supervisor]);
                return view('therapistdb');
            } elseif ($user->cType == 'Admin') {
                return redirect()->intended(route('admin'));
            } elseif ($user->cType == 'Pharmacy') {
                $user = Pharma::where('cManagerEmail', $request->email)->first();
                session(['user' => $user]);
                return redirect()->intended(route('pharmacyHome'));
            } elseif ($user->cType == 'NGO') {
                $user = Ngo::where('cManagerEmail', $request->email)->first();
                session(['user' => $user]);
                return redirect()->intended(route('ngo'));
            }
            /*
            Might not need this, as supervisor manages rehab

            elseif ($user->cType == 'Rehab') {
                return redirect()->intended(route('rehabSupervisorHome'));
            }
            
            */
        }


        return redirect(route('login'))->with("error", "Wrong Email or Password");
    }

    function signUpPost(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'DOB' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mHistory' => 'required',
        ]);

        $patient = new Patient();
        $person = new Person();

        $person->cUserID = strval(mt_rand(1000000, 9999999));
        $patient->cpUserID = $person->cUserID;
        $person->cFname = $request->fname;
        $person->cLname = $request->lname;
        $person->cGender = $request->gender;
        $person->dDOB = $request->DOB;
        $person->cAddress = $request->address;
        $person->cEmail = $request->email;
        $person->cType = "Patient";
        $person->save();

        $patient->cMedicalHistory = $request->mHistory;
        $patient->cArea = $request->g_area;
        $patient->save();

        $data['cType'] = "Patient";
        $data['name'] = $request->fname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('signUp'))->with("error", "Retry");
        }
        return redirect(route('login'))->with("success", "Success! You can login now.");
    }
}
