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

      
        return view('psychPrescription', ['prescriptions' => $prescriptions]);
    }
    

    public function store(Request $request)
    {

        $user = $request->session()->get('user');
        
       
        $request->validate([
            'cpUserID' => 'required|string',
            'medicines' => 'required|array',
        ]);

        $medicines = $request->input('medicines');

        $prescription = new Prescription();
        $id = strval(mt_rand(1000000, 9999999));
        $prescription->cPrescID =$id ; 
      
        $prescription->dIssueDate = now();
        $prescription->cpUserID = $request->input('cpUserID');
      
        $prescription->cpsUserID =$user-> cUserID; 
        $prescription -> cDelivered = "No";
        // dd($prescription, $medicines);
        $prescription->save();

 
        foreach ($medicines as $medicine) {
            $prescriptionMedicine = new PrescriptionMedicine();
            $prescriptionMedicine->cPrescID = $id;
            $prescriptionMedicine->cMedicine = $medicine;
            $prescriptionMedicine->save();
        }

       
        //return response()->json(['message' => 'Prescription created successfully'], 200);
        return  redirect()->route('psychiatristHome')  ->with('success' , 'Prescription added.');

    }

    public function showPrescriptions(Request $request)
{
    $user = $request->session()->get('user');
   
    $prescriptions = Prescription::with('prescriptionMedicines')
        ->where('cpsUserID', $user->cUserID)
        ->get();

    return view('psychPrescriptionView', ['prescriptions' => $prescriptions]);
}


public function destroy(Request $request, $cPrescID)
{
    $prescription = Prescription::find($cPrescID);

    if (!$prescription) {
        return response()->json(['error' => 'Prescription not found'], 404);
    }    
    PrescriptionMedicine::where('cPrescID', $cPrescID)->delete();   
    $prescription->delete();

    return redirect()->route('psychPrescriptionView.showPrescriptions')->with('success', 'Prescription deleted successfully');
}



} 
