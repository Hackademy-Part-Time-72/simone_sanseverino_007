<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookCreatedMail;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $title = 'Benvenuto su BookStore';
        return view('books.index', compact('books', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Aggiungi un nuovo libro';
        return view('books.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|min:3',
            'pages' => 'required|numeric',
            'year' => 'required|numeric',
            'author' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        // creazione del libro
        $book = Book::create($request->all());

        // invio Email        
        Mail::to('emaill@email.com')->send(new BookCreatedMail($book));
        


        //redirect con messaggio di successo
        return redirect()->route('books.index')->with('success', 'Libro creato con successo'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
