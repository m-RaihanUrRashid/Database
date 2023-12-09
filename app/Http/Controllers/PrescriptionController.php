<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\PrescriptionMedicine;

class PrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = Prescription::all();

        // Pass prescriptions to the view
        return view('psychPrescription', ['prescriptions' => $prescriptions]);
    }
    

    public function store(Request $request)
    {

        $user = $request->session()->get('user');
        
        // Validate the request data
        $request->validate([
            'cpUserID' => 'required|string', // Assuming 'cpUserID' is the field name in your form
            'medicines' => 'required|array', // Assuming 'medicines' is the field name in your form
        ]);

        // Assuming you have an array of medicines in your form like 'medicines' => ['medicine1', 'medicine2', 'medicine3']
        $medicines = $request->input('medicines');

        // Create Prescription instance
        $prescription = new Prescription();
        $prescription->cPrescID = substr(uniqid(), 0, 7);
        $prescription->dIssueDate = now();
        $prescription->cpUserID = $request->input('cpUserID');
        //$prescription->cpsUserID = '2234567';
        $prescription->cpsUserID =$user-> cUserID; ; // assuming you want to associate with the authenticated user
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

    public function showPrescriptions()
{
    // Assuming you have a user in the session
    $user = session('user');

    // Retrieve prescriptions for the logged-in user with medicines
    $prescriptions = Prescription::with('prescriptionMedicines')
        ->where('cpUserID', $user->cUserID)
        ->get();

    return view('psychPrescriptionView', ['prescriptions' => $prescriptions]);
}

public function deletePrescription($id)
{
    // Find the prescription by ID
    $prescription = Prescription::findOrFail($id);

    // Delete associated medicines
    $prescription->prescriptionMedicines()->delete();

    // Delete the prescription
    $prescription->delete();

    // Redirect to a relevant page (e.g., prescription list)
    return redirect()->route('psychPrescriptionView.showPrescriptions')->with('success', 'Prescription deleted successfully');
}
}
