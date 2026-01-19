<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagsRequest;
use App\Http\Requests\UpdateTagsRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Http;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Http $request)
    {
        // Gather and validate input data
        // create unique Slug name
        // store in database for tags
        // store in pivot table for note_tag
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagsRequest $request, Tag $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tags)
    {
        //
    }
}
