<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\PrescriptionMedicine;

class PrescriptionController extends Controller
{
    public function index()
    {
        return view('psychPrescription');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'cpUserID' => 'required|string', // Assuming 'cpUserID' is the field name in your form
            'medicines' => 'required|array', // Assuming 'medicines' is the field name in your form
        ]);

        // Assuming you have an array of medicines in your form like 'medicines' => ['medicine1', 'medicine2', 'medicine3']
        $medicines = $request->input('medicines');

        // Create Prescription instance
        $prescription = new Prescription();
        $prescription->cPrescID = uniqid();
        $prescription->dIssueDate = now();
        $prescription->cpUserID = $request->input('cpUserID');
        $prescription->cpsUserID = '234';
        //$prescription->cpsUserID = auth()->id(); // assuming you want to associate with the authenticated user

        $prescription->save();

        
        

        // Create PrescriptionMed entries for each medicine
        foreach ($medicines as $medicine) {
            $prescriptionMedicine = new PrescriptionMedicine();
            $prescriptionMedicine->cPrescID = $prescription->cPrescID;
            $prescriptionMedicine->cMedicine = $medicine;
            $prescriptionMedicine->save();
        }

        // You can return a response to the frontend if needed
        return response()->json(['message' => 'Prescription created successfully'], 200);
    }
}
