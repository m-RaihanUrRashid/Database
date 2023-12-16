<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharma;
use App\Models\PharmaContact;

class PharmaProfileController extends Controller
{
    public function pharmaLoadProfile(Request $request)
    {
        $user = $request->session()->get('user');
        $contacts = PharmaContact::where('cPharmaID', $user->cPharmaID)->get();
        $user = Pharma::where('cPharmaID', $user->cPharmaID)->first();
        return view("pharmacyProfile", ["user" => $user, "contacts" => $contacts]);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->session()->get('user');
        $request->validate([
            'contacts' => 'required|array',
        ]);

        Pharma::where('cPharmaID', $user->cPharmaID)
            ->update([
                'cPharmaName' => $request->input('pharmacyName'),
                'cArea' => $request->input('area'),
                'cAddress' => $request->input('address')
            ]);

        $oldContacts = PharmaContact::where('cPharmaID', $user->cPharmaID)->get();
        $newContacts = $request->input('contacts');
        $i = 0;
        foreach ($oldContacts as $tempContact) {
            PharmaContact::where('cPharmaID', $user->cPharmaID)
                ->where('cContact', $tempContact->cContact)
                ->update(['cContact' => $newContacts[$i]]);
            $i++;
        }

        if (count($oldContacts) < count($newContacts)) {
            for ($i = count($oldContacts); $i < count($newContacts); $i++) {
                $pharmaContact = new PharmaContact();
                $pharmaContact->cPharmaID = $user->cPharmaID;;
                $pharmaContact->cContact = $newContacts[$i];
                $pharmaContact->save();
            }
        }

        $contacts = PharmaContact::where('cPharmaID', $user->cPharmaID)->get();
        $user = Pharma::where('cPharmaID', $user->cPharmaID)->first();
        $request->session()->put('user', $user);
        return view("pharmacyProfile", ["user" => $user, "contacts" => $contacts]);
    }


    public function destroy(Request $request, $cpUserID, $csUserID, $dappDate, $cappTime)
    {

        $user = $request->session()->get('user');

        // $app = Appointment::where('cpUserID', $user->cUserID)
        //             ->where('csUserID', $csUserID)
        //             ->where('dappDate', $dappDate)
        //             ->where('cappTime', $cappTime)
        //             ->delete();

        return redirect()->route('loadApps')->with('success', 'Appointment Deleted');
    }
}
