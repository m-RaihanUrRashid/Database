<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('thnotes', ['notes' => $notes]);

    }

    public function create(){

        return view('therapistnotes');
    }

    public function store(Request $request){
        
        $data = $request->validate([

            'ctsUserID' => 'required|numeric',
            'cpUserID' => 'required|numeric',
            'cNotes' => 'required'
        ]);

        $newNote = Note::create($data);

        return redirect(route('note.index'));

    }
    public function edit(Note $note){
        return view('thnotesedit', ['note' => $note]);
    }
}
