<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Rehab;
use Illuminate\Http\Request;

class rehabInfoController extends Controller
{
    public function loadInfo(Request $request){

        $user = $request->session()->get('user');

        $rehab = Rehab::where('cSupervisorID',$user->cUserID)->first();
        $contacts = DB::table('rehab_centre_contact_t')->where('cRehabID', $rehab->cRehabID)->get();

        return view('rehabInfo', ['rehab' => $rehab, 'contacts' => $contacts]);
    }

}