<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;
use App\Models\Person;
use App\Models\Appointment;


class MakeAppController extends Controller
{
    public function loadSpecs(){

        $specs = Specialist::with('person')->get();

        $specPersons = [];
        $apps = [];

    // Loop through each specialist to get the associated persons
        foreach ($specs as $spec) {
            $specPersons[] = Person::where('cUserID', $spec->csUserID)->get();
            $apps[] = Appointment::where('csUserID', $spec->csUserID)->get();
        }

        

        //$specPersons = Person::where('cUserID', $specs->csUserID)->get();

        return view('patientMakeApp', ['specs' => $specPersons, 'apps' => $apps]);
    }
}
