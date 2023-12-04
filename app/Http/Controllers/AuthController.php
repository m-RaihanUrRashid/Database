<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

        $credentials = $request->only('email', 'password');
        if(Auth ::attempt($credentials)){
            return redirect()->intended(route('patientHome'));
        }
        return redirect(route('login'))->with("error", "Wrong Email or Password");
    }

    function signUpPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash :: make($request->password);
        $user = User:: create($data);
        if(!$user){
            return redirect(route('signUp'))->with("error", "Retry");
        }
        return redirect(route('login'))->with("success", "You can login now");

    }
}
