<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    $title = 'Benvenuto su BookStore';
    return view('welcome', compact('title'));
});
// Rotta per la lista dei libri
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Rotta per il form di creazione
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Rotta per salvare i dati nel database
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');