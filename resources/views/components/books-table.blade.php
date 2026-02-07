<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8"> 
            <div class="table-responsive shadow rounded">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="py-3">#</th>
                            <th scope="col" class="py-3">Titolo</th>
                            <th scope="col" class="py-3">Autore</th>
                            <th scope="col" class="py-3 text-center">Pagine</th>
                            <th scope="col" class="py-3"> Anno</th>
                            <th scope="col" class="py-3"> Azioni</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                            <tr>
                                <th scope="row">{{ $book->id }}</th>
                                <td class="fw-bold text-secondary">{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td class="text-center">{{ $book->pages }}</td>
                                <td> {{ $book->year }}</td>
                                <td class="text-center">    
                                <form action="{{ route('books.destroy','book') }}" method="POST" onsubmit="return confirm('Vuoi davvero eliminare questo libro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Elimina
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="bi bi-book mb-2 d-block" style="font-size: 2rem;"></i>
                                    Nessun libro disponibile nella tua libreria.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>