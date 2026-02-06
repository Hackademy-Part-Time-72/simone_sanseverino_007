<x-layout :title="$title">
    <div class="container my-5 text-center">
        <h1 class="display-4 fw-bold mb-4">I nostri Libri</h1>
        <a href="{{ route('books.create') }}" class="btn btn-outline-success btn-lg mb-5">Aggiungi Nuovo</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Richiamiamo il componente passando la variabile $books --}}
    <x-books-table :books="$books" />
</x-layout>