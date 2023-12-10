<?php

namespace App\Http\Controllers;

use App\Models\Specialist;

use Illuminate\Http\Request;

class rehabRemoveSpecialistController extends Controller
{
    public function viewSpecialist()
    {
        $specialists = Specialist::all();

        return view('rehabRemoveSpecialists', compact('specialists'));
    }

    public function removeSpecialist(Request $request)
    {
        $csUserID = $request->input('selectedRowId');    // Find the specialist to delete
        $specialist = Specialist::findOrFail($csUserID);

        // Perform the delete operation
        $specialist->delete();
        return redirect()->route('rehabSupervisorHome');
    }
}
