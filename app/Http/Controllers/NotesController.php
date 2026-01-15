<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotesRequest;
use App\Http\Requests\UpdateNotesRequest;
use App\Models\Notes;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = auth()->user()->notes()->latest()->get();
        return view('notes.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $userAttributes = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $user->notes()->create($userAttributes);

        return redirect('/notes');


    }

    /**
     * Display the specified resource.
     */
    public function show(Notes $notes)
    {
        $note = Notes::find(request()->route('note'));
        return view('notes.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notes $notes)
    {
        $note = Notes::find(request()->route('note'));
        return view('notes.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    #[NoReturn]
    public function update(Request $request, Notes $note)
    {
        $note->update($request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]));

        return redirect('/notes/show/' . $note->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notes $note)
    {
        $note->delete();

        return redirect('/notes');
    }

    public function pin(Notes $note)
    {
        $note->pinned = true;
        $note->save();

        return redirect('/notes/show/'. $note->id);
    }

    public function unpin(Notes $note)
    {
        $note->pinned = false;
        $note->save();

        return redirect('/notes/show/' . $note->id);
    }

}
