<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Person;
use App\Models\Psychiatrist;
use App\Models\Therapist;


class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function signUp(){
        return view('signUp');
    }

    function patientHome(){
        return view('patientHome');
    }

    function loginPost(Request $request){
        $request->validate([
                'email' => 'required',
                'password' => 'required'
        ]);

        $user = null;

        $user = Person::where('cEmail', $request->email)->first();

        $credentials = $request->only('email', 'password');

        if(Auth ::attempt($credentials)){

            session(['user' => $user]);


            if($user->cType == 'Patient'){
                return redirect()->intended(route('patientHome'));
            }elseif($user->cType == 'Psychiatrist'){
                return redirect()->intended(route('psychiatristHome'));
            }elseif($user->cType == 'Therapist'){
                return redirect()->intended(route('therapistdb'));
            }/*elseif($user->type == 'Pharmacy'){
                return redirect()->intended(route('pharmacyHome'));
            }elseif($user->type == 'NGO'){
                return redirect()->intended(route('ngo'));
            }*/elseif($user->cType == 'Rehab'){
                return redirect()->intended(route('rehabSupervisorHome'));
            }
        }


        return redirect(route('login'))->with("error", "Wrong Email or Password");
    }

    function signUpPost(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'DOB' => 'required',
            'gender'=> 'required',
            'address'=> 'required',
            'email' => 'required',
            'password' => 'required',
            'mHistory'=> 'nullable',
        ]);

        $patient = new Patient();

        $person = new Person();
        $person->cUserID = strval(mt_rand(1000000, 9999999));
        $patient->cpUserID = $person->cUserID;
        $person->cFname = $request->fname;
        $person->cLname = $request->lname;
        $person->dDOB = $request->DOB;
        $person->cGender = $request->gender;
        $person->cAddress = $request->address;
        $person->cEmail = $request->email;
        $person->cType = "Patient";
        $person->save();

        $patient->cMedicalHistory = $request->mHistory;
        $patient->cArea = $request->g_area;
        $patient->save();

        $data['name'] = $request->fname;
        $data['email'] = $request->email;
        $data['password'] = Hash :: make($request->password);
        $user = User:: create($data);

        if(!$user){
            return redirect(route('signUp'))->with("error", "Retry");
        }
        return redirect(route('login'))->with("success", "Success! You can login now.");

    }
}
