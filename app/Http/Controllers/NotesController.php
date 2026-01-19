<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotesRequest;
use App\Http\Requests\UpdateNotesRequest;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = auth()->user()->notes()->latest()->get();
        $pinned_notes = $notes->where('pinned', true) ?? false;

        return view('notes.index', ['notes' => $notes, 'pinned_notes' => $pinned_notes]);
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
            'tags' => 'nullable'
        ]);

        $note = $user->notes()->create(Arr::except($userAttributes, 'tags'));

        $rawTags = $userAttributes['tags'] ?? [];

        $tagNames = collect(is_array($rawTags) ? $rawTags : explode(',', $rawTags))
            ->map(fn ($t) => trim($t))
            ->filter()
            ->unique()
            ->take(20);


        $tagIds = $tagNames->map(function ($name) {
            return Tag::firstOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            )->id;
        });

        $note->tags()->sync($tagIds->all());

        return redirect()->route('notes.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Note $notes)
    {
        $note = Note::find(request()->route('note'));
        $tags = $note->tags;

        return view('notes.show', ['note' => $note, 'tags' => $tags]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        $tags = $note->tags;
        $text_tags = $tags->pluck('name')->implode(', ');
        return view('notes.edit', ['note' => $note, 'tags' => $tags, 'text_tags' => $text_tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    #[NoReturn]
    public function update(Request $request, Note $note)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'tags' => 'nullable'
        ]);

        $note->update(Arr::except($data, 'tags'));

        $rawTags = $data['tags'] ?? [];

        $tagNames = collect(is_array($rawTags) ? $rawTags : explode(',', $rawTags))
            ->map(fn ($t) => trim($t))
            ->filter()
            ->unique()
            ->take(20);

        $tagIds = $tagNames->map(function ($name) {
            return Tag::firstOrCreate(
                ['slug' => Str::slug($name)],
                ['name' => $name]
            )->id;
        });

        $note->tags()->sync($tagIds->all());

        return redirect('/notes/show/' . $note->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes');
    }

    public function pin(Note $note)
    {
        $note->pinned = true;
        $note->save();

        return redirect('/notes/show/'. $note->id);
    }

    public function unpin(Note $note)
    {
        $note->pinned = false;
        $note->save();

        return redirect('/notes/show/' . $note->id);
    }

}
