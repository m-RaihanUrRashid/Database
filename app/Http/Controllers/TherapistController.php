<?php

namespace App\Http\Controllers;
use App\Models\Therapist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function index(Request $request){

        $user = $request->session()->get('user');
    
        $therapistData = DB::table('therapist_t')
        ->join('specialist_t', 'therapist_t.ctsUserID', '=', 'specialist_t.csUserID')
        ->join('person_t', 'specialist_t.csUserID', '=', 'person_t.cUserID')
        ->select('therapist_t.ctsUserID', 'therapist_t.cSpecialty', 'person_t.cLname', 'person_t.cFname', 'person_t.cEmail', 'person_t.cType', 'specialist_t.cExperience')
        ->where('therapist_t.ctsUserID', $user->cUserID)
        ->first();

        return view('therapistprofile', ['user' => $user, 'therapistData' => $therapistData]);
    }
}
