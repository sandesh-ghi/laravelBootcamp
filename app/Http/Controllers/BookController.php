<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Books::all();
        return view('backend.books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookCreateRequest $request)
    {
        //dd($request='all');
//        $request->validate([
//            'name'=>'required|string',
//            'pageCount'=>'required|integer',
//            'point'=>'required|integer',
//        ]);
        $book=Books::create($request->all());
        //dd($book);
        return redirect()->route('backend.book.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $book_id)
    {

        $book =Books::find($book_id);
        return view('backend.books.show',compact('book'));

//        $book = Books::where('id',$book_id)->first();
//        return view('backend.books.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $book_id)
    {
        //
        $book=Books::find($book_id);
        return view('backend.books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $book_id)
    {
        //
        $book=Books::find($book_id);
        $book->update($request->all());
        return redirect()->route('backend.book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $book_id)
    {
        //
        $book=Books::find($book_id);
        $book->delete();
        return redirect()->route('backend.books.index');
    }
}
