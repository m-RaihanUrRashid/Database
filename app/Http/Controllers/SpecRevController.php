<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patientSpec;

class SpecRevController extends Controller
{
    public function patRevSpec() {
        $specs = patientSpec::all();
        return view('patientReviewSpec', ['seenSpec' => $specs]);
    }

    public function postRev(Request $request) {
        $request->validate([
            ''
        ]);
    }
}
