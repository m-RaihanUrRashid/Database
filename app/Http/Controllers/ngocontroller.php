<?php
namespace App\Http\Controllers;

use App\Models\Rehab;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NgoController extends Controller
{
    public function index() {
        $ngoId = Auth::user()->ngo_id;
        $rehabs = Rehab::where('NGO ID', $ngoId)->get();
        return view('rehabs.index', compact('rehabs'));
    }

    public function update(Request $request, $id) {
        $rehab = Rehab::find($id);
    
        if (!$rehab) {
            return response()->json(['message' => 'Rehab not found'], 404);
        }
    
        $rehab->ngo_id = $request->input('field0'); // Adjust field names accordingly
        $rehab->street = $request->input('field1');
        $rehab->road = $request->input('field2');
        $rehab->city = $request->input('field3');
        $rehab->owner = $request->input('field4');
        // Update other fields similarly
    
        $rehab->save();
    
        return response()->json(['message' => 'Rehab updated successfully', 'rehab' => $rehab]);
    
    }

    public function destroy($id) {
        $rehab = Rehab::find($id);

        if (!$rehab) {
            return response()->json(['message' => 'Rehab not found'], 404);
        }

        $rehab->delete();

        return response()->json(['message' => 'Rehab deleted successfully']);
    }

    public function store(Request $request) {
        // Assuming this function handles adding new rows
        $rehab = new Rehab();
        $rehab->ngo_id = Auth::user()->ngo_id;
        $rehab->cArea = $request->input('cArea'); // Example for 'cArea', adjust as per your fields
        // Add other fields similarly
        $rehab->save();

        // Redirect back to the page or return a response as needed
        return redirect()->back()->with('success', 'Row added successfully');
    }
}
