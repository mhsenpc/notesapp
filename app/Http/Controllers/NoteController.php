<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index(){
        return inertia('Notes', [
            'notes' => Note::all()
        ]);
    }

    /**
     * Create a new note
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'note'  => 'required',
        ])->validateWithBag('createNote');

        $note = Note::create($request->all());

        return redirect()->action([NoteController::class, 'index'], ['note' => $note->id])->with('message', 'Note created successfully');
    }

    /**
     * Delete the specified note
     *
     * @param \App\Models\Note $note
     * @return \Illuinate\Http\Response
     */
    public function destroy(Note $note)
    {
        if ($note->default) {
            return redirect()->back()->with('message', 'Sorry, you can not delete this note');
        }

        $note->delete();

        return redirect()->back()->with('message', 'note deleted');
    }
}
