<?php

namespace App\Http\Controllers;

use App\Models\Rehab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ngo;
use App\Models\NgoContact;
use App\Models\NgoHotline;
use App\Models\Pharma;
use App\Models\PharmaContact;


class AdminController extends Controller
{
    function addPharma()
    {
        return view('addPharma');
    }

    // function addRehab()
    // {
    //     return view('addRehab');
    // }

    function addNGO()
    {
        return view('addNGO');
    }

    function newPharma(Request $request)
    {
        $request->validate([
            'pharmacyName' => 'required',
            'area' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'contacts' => 'array'
        ]);

        $pharma = new Pharma();
        $newID = strval(mt_rand(1000000, 9999999));
        $pharma->cPharmaID = $newID;
        $pharma->cPharmaName = $request->pharmacyName;
        $pharma->cArea = $request->area;
        $pharma->cAddress = $request->address;
        $pharma->cManagerEmail = $request->email;
        $pharma->save();

        $cArr = $request->contacts;
        for ($i = 0; $i < count($cArr); $i++) {
            $pharmaC = new PharmaContact();
            $pharmaC->cPharmaID = $newID;
            $pharmaC->cContact = $cArr[$i];
            $pharmaC->save();
        }

        $data['cType'] = "Pharmacy";
        $data['name'] = $request->pharmacyName;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        User::create($data);

        return view('addPharma');
    }

    function newNGO(Request $request)
    {
        $request->validate([
            'owner' => 'required',
            'area' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'contacts' => 'array',
            'hotlines' => 'array'
        ]);

        $ngo = new Ngo();
        $newID = strval(mt_rand(1000000, 9999999));
        $ngo->cNGO_ID = $newID;
        $ngo->cOwner = $request->owner;
        $ngo->cArea = $request->area;
        $ngo->cAddress = $request->address;
        $ngo->cManagerEmail = $request->email;
        $ngo->save();

        $cArr = $request->contacts;
        for ($i = 0; $i < count($cArr); $i++) {
            $ngoC = new NgoContact();
            $ngoC->cNGO_ID = $newID;
            $ngoC->cContact = $cArr[$i];
            $ngoC->save();
        }

        $hArr = $request->hotlines;
        for ($i = 0; $i < count($hArr); $i++) {
            $ngoC = new NgoHotline();
            $ngoC->cNGO_ID = $newID;
            $ngoC->cSP_Hotline = $hArr[$i];
            $ngoC->save();
        }

        $data['cType'] = "NGO";
        $data['name'] = $request->owner;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        User::create($data);

        return view('addNGO');
    }
}
