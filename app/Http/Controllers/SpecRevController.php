<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;


class SpecRevController extends Controller
{
    public function patRevSpec() {
        $specs = patientSpec::all();
        return view('patientReviewSpec', ['seenSpec' => $specs]);
    }

    public function postRev(Request $request) {
        $request->validate([
            'cpUserID' => 'required',
            'csUserID' => 'required',
            'cRating' => 'required|numeric',
            'cComment' => 'nullable'
        ]);

        $newReview = Review::create($data);

        return redirect(route('patientHome'));
    }
}
