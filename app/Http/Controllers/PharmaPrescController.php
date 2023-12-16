<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Prescription;

class PharmaPrescController extends Controller
{
    public function pharmaLoadPresc(Request $request)
    {
        $user = $request->session()->get('user');
        $myArea = $user->cArea;
        $prescriptions = Prescription::join('patient_t', 'prescription_t.cpUserID', '=', 'patient_t.cpUserID')
            ->where('patient_t.cArea', '=', $myArea)
            ->get(['prescription_t.*']);

        $prescriptionData = [];

        foreach ($prescriptions as $prescription) {
            $patient = DB::table('person_t')->where('cUserID', $prescription->cpUserID)->first();
            $patientName = $patient->cFname;

            $psychiatrist = DB::table('person_t')->where('cUserID', $prescription->cpsUserID)->first();
            $psychiatristName = $psychiatrist->cFname;

            $psychiatristContact = implode(", ", DB::table('person_contact_t')->where('cUserID', $prescription->cpsUserID)->get()->pluck('cContact')->toArray());
            $medicines = implode(", ", $prescription->prescriptionMedicines()->pluck('cMedicine')->toArray());
            $dispatch = $prescription->cDelivered;

            $prescriptionData[] = [
                $prescription->cPrescID,
                $prescription->dIssueDate,
                $patientName,
                $psychiatristName,
                $psychiatristContact,
                $medicines,
                $dispatch
            ];
        }

        return view("pharmacyPrescriptions", ["user" => $user, "prescriptionData" => $prescriptionData]);
    }

    public function pharmaUpdatePresc(Request $request, $cPrescID)
    {
        $user = $request->session()->get('user');
        Prescription::where('cPrescID', $cPrescID)->first()->update(['cDelivered' => 'Yes']);
        return redirect()->route('pharmaLoadPresc', ['user' => $user]);
    }

}
