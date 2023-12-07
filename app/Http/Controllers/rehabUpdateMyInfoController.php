<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Person;


use Illuminate\Http\Request;

class rehabUpdateMyInfoController extends Controller
{
    public function updateInformation(Request $request)
    {
        $Specialist = Specialist::find(auth()->id());
        $Person = Person::where('cUserID', $Specialist->csUserID)->first();

        
        
        $Specialist->cOff_Address = $request->input('officeAddress');
        $Specialist->cOff_Address = $request->input('officeAddress');
        $Specialist->contactNo = $request->input('contactNo');
        $Specialist->rehab = $request->input('rehab');

        $Specialist->save();

        return redirect()->route('home')->with('success', 'Information updated successfully');
    }
}
