<?php

namespace App\Http\Controllers;
use App\Models\Specialist;
use Illuminate\Http\Request;

class rehabAddSpecialistController extends Controller
{public function addSpecialist(Request $request)
    {
        // Validate the request data if needed
        $request->validate([
            'specialistID' => 'required|string',
            'Experience' => 'required|string',
            'officeAddress' => 'required|string',
            'Type' => 'required|string',
        ]);
    
        // Create a new Specialist instance
        $specialist = new Specialist();
        $specialist->csUserID = $request->input('specialistID');
        $specialist->cExperience = $request->input('Experience');
        $specialist->cOff_Address = $request->input('officeAddress');
        $specialist->cType = $request->input('Type');
    
        // Save the specialist to the database
        $specialist->save();
    
        return redirect()->route('rehabSupervisorHome');
    }
}
