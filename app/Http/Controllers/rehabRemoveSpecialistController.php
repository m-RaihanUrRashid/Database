<?php

namespace App\Http\Controllers;

use App\Models\Specialist;

use Illuminate\Http\Request;

class rehabRemoveSpecialistController extends Controller
{
    public function viewSpecialist()
    {
        $specialists = Specialist::all();

        return view('rehabRemoveSpecialist', ['specialists' => $specialists]);
    }

    public function removeSpecialist(Request $request, $csUserID)
    {
           // Find the specialist to delete
        $specialist = Specialist::findOrFail($csUserID);

        // Perform the delete operation
        $specialist->delete();
        return redirect()->route('remove.specialist');
    }
}
