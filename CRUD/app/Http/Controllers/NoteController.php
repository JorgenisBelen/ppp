<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use PhpParser\Node\Stmt\Nop;
use Symfony\Contracts\Service\Attribute\Required;

use function Pest\Laravel\delete;

class NoteController extends Controller
{
    //

    public function index(){

        $notes =  Note::all();


        return view('notes.index', compact('notes'));
    }

    public function create(){

        return view('notes.create');
    }

    public function store(Request $request){ ///Guarda aqui
        //  Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        // ]);

        Note::create($request->all());

    return redirect()->route('note.index');
    }

    public function edit(Note $note){

        // $mynote = Note::find($id);

        return view('notes.edit', compact('note'));
        

    }

    public function update(Request $request ,Note $id){ ///Guarda aqui
        
        $id->update($request->all());

    return redirect()->route('note.index');
        

    }

    public function show(Note $note){
        return view('notes.show', compact('note'));
    }

    public function destroy(Note $note){
        $note->delete();
        return redirect()->route('note.index');
    }
}
