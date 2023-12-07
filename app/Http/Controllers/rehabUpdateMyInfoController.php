<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class rehabUpdateMyInfoController extends Controller
{
    public function updateInformation(Request $request)
    {
        $user = User::find(auth()->id());

        $user->supervisorName = $request->input('supervisorName');
        $user->Title = $request->input('Title');
        $user->officeAddress = $request->input('officeAddress');
        $user->ID = $request->input('ID');
        $user->contactNo = $request->input('contactNo');
        $user->rehab = $request->input('rehab');

        $user->save();

        return redirect()->route('home')->with('success', 'Information updated successfully');
    }
}
