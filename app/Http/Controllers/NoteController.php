<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Therapist;
use App\Models\Patient;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('thnotes', ['notes' => $notes]);
    }

    public function create()
    {

        return view('therapistnotes');
    }

    public function store(Request $request)
    {

        $user = $request->session()->get('user');

        $data = $request->validate([
            'cpUserID' => 'required|numeric',
            'cNotes' => 'required'
        ]);

        $data['ctsUserID'] = $user->cUserID;

        $patientExists = Patient::where('cpUserID', $data['cpUserID'])->exists();

        if (!$patientExists) {
            // Redirect back with an error message if the patient doesn't exist
            return redirect()->back()->with('error', 'Patient with ID ' . $data['cpUserID'] . ' does not exist.');
        }

        // Add the therapist ID (ctsUserID) to the data


        $newNote = Note::create($data);

        return redirect(route('note.index'));
    }
    public function edit(Note $note)
    {

        $notes = Note::all();

        return view('thnotesedit', ['notes' => $notes]);
    }

    public function delete(Request $request, $ctsUserID, $cpUserID, $cNotes, $dDate)
    {
        $notes = Note::where('ctsUserID', $ctsUserID)
            ->where('cpUserID', $cpUserID)
            ->where('cNotes', $cNotes)
            ->where('dDate', $dDate)
            ->delete();

        return redirect()->back()->with('success', 'Note deleted successfully.');
    }
}
