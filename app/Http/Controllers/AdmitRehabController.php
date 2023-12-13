<?php

namespace App\Http\Controllers;

use App\Models\Rehab;
use Illuminate\Http\Request;

class AdmitRehabController extends Controller
{
    public function loadRehabs(){

        $rehabs = Rehab::all();

        return view("patientChoseRehab" , ["rehabs"=> $rehabs]);
    }
}
