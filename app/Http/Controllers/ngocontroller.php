<?php

namespace App\Http\Controllers;

use App\Models\Rehab;
use Illuminate\Support\Facades\Auth;

class ngocontroller extends Controller
{
    public function index() {
        // Fetch the current NGO in session
        $ngoId = Auth::user()->ngo_id;

        // Retrieve rehabs associated with the current NGO
        $rehabs = Rehab::where('ngo_id', $ngoId)->get();

        return view('rehabs.index', compact('rehabs'));
    }
}