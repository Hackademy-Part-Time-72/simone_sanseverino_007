<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookCreatedMail;
use Symfony\Component\HttpKernel\HttpCache\Store;

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
    public function store(StoreBookRequest $request)
    {
        // dd($request->all());
        // recupero dati validati
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->extension();
            $filename = 'cover_' . time() . '.' . $extension;

            // salvataggio nel public dentro la cartella images
            $path = $request->file('image')->storeAs('images', $filename, 'public');

            // salvataggio nel database
            $data['image'] = $path;
        }

        // creazione del libro
        $book = Book::create($data);

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
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo');
    }
}
