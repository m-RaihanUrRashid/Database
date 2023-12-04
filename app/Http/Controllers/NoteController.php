<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tnote;

class NoteController extends Controller
{
    public function index(){

        return view('thnotes');

    }

    public function create(){

        return view('notes.create');

    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'note' => 'required',
            'mood' => 'required|numeric',
            
        ]);

        $newnote = Tnote::create($data);

        return redirect(route('notes.index'));
    }
}
