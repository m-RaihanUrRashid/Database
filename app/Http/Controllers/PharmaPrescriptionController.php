<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\PrescriptionMedicine;

class PharmaPrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = Prescription::all();
        return view('pharmacyPrescriptions', ['prescriptions' => $prescriptions]);
    }
    
}
