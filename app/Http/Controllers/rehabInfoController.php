<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class rehabInfoController extends Controller
{
    public function loadInfo(Request $request){

        $user = $request->session()->get('user');

        $specialist = Person::where('cUserID',$user->cUserID)->first();

        return view('rehabInfo', ['specialist' => $specialist]);
    }

}