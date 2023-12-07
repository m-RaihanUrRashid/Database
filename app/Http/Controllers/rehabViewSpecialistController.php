<?php

namespace App\Http\Controllers;

use App\Models\Specialist;

use Illuminate\Http\Request;

class rehabViewSpecialistController extends Controller
{
    public function viewSpecialist()
    {
        $specialists = Specialist::all();

        return view('rehabViewSpecialists', compact('specialists'));
    }

}
