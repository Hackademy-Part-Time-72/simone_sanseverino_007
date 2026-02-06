<x-layout :title="$title">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Inserisci un nuovo Libro</h1>

            {{-- Visualizzazione Errori di Validazione --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST" class="shadow p-4 rounded bg-light">
                @csrf {{-- Fondamentale per la sicurezza CSRF --}}

                <div class="mb-3">
                    <label class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Autore</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pagine</label>
                    <input type="number" name="pages" class="form-control" value="{{ old('pages') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Anno</label>
                    <input type="number" name="year" class="form-control" value="{{ old('year')}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Salva Libro</button>
            </form>
        </div>
    </div>
</x-layout>
