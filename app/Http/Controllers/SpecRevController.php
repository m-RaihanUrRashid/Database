<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Review;
use App\Models\PatientSpec;
use App\Models\Specialist;
use App\Models\Person;


class SpecRevController extends Controller
{
    public function patRevSpec(Request $request) {

        $user = $request->session()->get('user');

        $patSpecs = PatientSpec::where('cpUserID', $user->cUserID)->get();

        //return view('patientReviewSpec', ['seenSpec' => $patSpecs, 'u' => $user ]);
        
        //$user = User::find(1);
        //$spec = $patSpecs->specs;
        if ($patSpecs->isNotEmpty()) {
            $specs = [];
            
            foreach ($patSpecs as $patSpec) {
                // Access the related specialist
                $spec = Specialist::where('csUserID', $patSpec->csUserID)->first();
                //$spec = $patSpec->specs;
    
                // Access the person related to the specialist
                $specName = Person::where('cUserID', $spec->csUserID)->first();
    
                // Build an array with the data for each specialty
                $specs[] = ['seenSpec' => $spec, 'specName' => $specName];
            }
        //$spec = Specialist::where('csUserID', $patSpecs->csUserID)->get();
        //$specNames = Person::where('csUserID', $spec->csUserID)->get();
            return view('patientReviewSpec', ['seenSpec' => $specs]);
        }else {
            // Handle the case where no patient specialties are found
            return redirect(route('patientHome'))->with('error', 'No specialties found for the patient.');
        }
    }

    public function postRev(Request $request) {

        $user = $request->session()->get('user');



        /*$request->validate([
            'cpUserID' => 'required',
            'csUserID' => 'required',   
            'cRating' => 'required| numeric',
            'cComment' => 'nullable'
        ]);

        $data = [
            'cpUserID' => $request->cpUserID,
            'csUserID' => $request->csUserID,
            'cRating' => $request->cRating,
            'cComment' => $request->cComment,
        ];

        $newReview = Review::create($data);*/

        $newReview = new Review();
        
        $newReview->cpUserID = $user->cUserID;
        $newReview->csUserID =  $request->input('selectedRowId');
        $newReview->cRating =  $request->input('rating');
        $newReview->cComment =  $request->input('comment');

        $newReview->save();

        return redirect(route('patientHome'));
    }
}
