<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors=Authors::all();
        return view('backend.authors.index',compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.authors.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

             //dd($request='all');
               $author=Authors::create($request->all());
            // dd($author);
             return redirect()->route('backend.authors.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $author_id)
    {
        //
        $author =Authors::find($author_id);
        return view('backend.authors.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $author_id)
    {
        //
        $author=Authors::find($author_id);
        return view('backend.authors.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $author_id)
    {
        //
        $author=Authors::find($author_id);
        $author->update($request->all());
        return redirect()->route('backend.authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $author_id)
    {
        //
        $author=Authors::find($author_id);
        $author->delete();
        return redirect()->route('backend.authors.index');
    }
}
