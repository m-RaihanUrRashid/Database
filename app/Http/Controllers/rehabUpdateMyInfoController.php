<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Rehab;


use Illuminate\Http\Request;

class rehabUpdateMyInfoController extends Controller
{
    public function updateInformation(Request $request)
    {
        $user = $request->session()->get('user');
        $rehab = Rehab::where ('cSupervisorID', $user->cUserID)->first();
        $rid = $rehab->cRehabID;
        $rehab->cRehabName = $request->input('rehabName');
        $rehab->cArea = $request->input('area');
        $rehab->cAddress = $request->input('address');
        $rehab->save();

        $oldContacts = DB::table('rehab_centre_contact_t')->where('cRehabID', $rehab->cRehabID)->get();
        $newContacts = $request->input('contacts');
        $i = 0;
        foreach ($oldContacts as $tempContact) {
            DB::table('rehab_centre_contact_t')->where('cRehabID', $rid)
                ->where('cContact', $tempContact->cContact)
                ->update(['cContact' => $newContacts[$i]]);
            $i++;
        }

        if (count($oldContacts) < count($newContacts)) {
            for ($i = count($oldContacts); $i < count($newContacts); $i++) {
                DB::table('rehab_centre_contact_t')->insert([
                    'cRehabID' => $rid,
                    'cContact' => $newContacts[$i],
                ]);
            }
        }

        return redirect()->route('rehabUpdateMyInfo')->with('success', 'Information updated successfully');
    }

    public function loadInfo(Request $request){

        $user = $request->session()->get('user');
        $rehab = Rehab::where ('cSupervisorID', $user->cUserID)->first();
        $contacts = DB::table('rehab_centre_contact_t')->where('cRehabID', $rehab->cRehabID)->get();
        return view('rehabUpdateMyInfo', ['rehab' => $rehab, 'contacts' => $contacts]);
    }

    
}
