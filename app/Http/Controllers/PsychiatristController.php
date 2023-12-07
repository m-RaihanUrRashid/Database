<?php

namespace App\Http\Controllers;
use App\Models\Psychiatrist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PsychiatristController extends Controller
{
    //
    public function index(Request $request)
    {
        // Get the user data from the session
        $user = $request->session()->get('user');
    
        $psychiatristData = DB::table('psychiatrist_t')
        ->join('specialist_t', 'psychiatrist_t.cpsUserID', '=', 'specialist_t.csUserID')
        ->join('person_t', 'specialist_t.csUserID', '=', 'person_t.cUserID')
        ->select('psychiatrist_t.cpsUserID', 'person_t.cLname', 'person_t.cFname', 'person_t.cEmail', 'person_t.cType', 'specialist_t.cExperience')
        ->where('psychiatrist_t.cpsUserID', $user->cUserID)
        ->first();
    
        // Pass both user and psychiatristData to the view
        return view('psychInfo', ['user' => $user, 'psychiatristData' => $psychiatristData]);
    }
    

}