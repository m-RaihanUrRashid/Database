<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){

        return view('thnotes');

    }

    public function create(){

        return view('therapistnotes');
    }

    public function store(Request $request){
        
        $data = $request->validate([

            'pid' => 'required|numeric',
            'name' => 'required',
            'note' => 'required'
        ]);

        $newNote = Note::create($data);

        return redirect(route('note.index'));

    }
}
