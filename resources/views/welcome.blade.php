<x-layout :title="$title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-primary mt-5">{{ $title }}</h1>
                <p class="text-center">Gestisci la tua libreria personale in modo semplice ed elegante.</p>
            </div>
        </div>

        {{-- Qui potresti decidere di non mostrare nulla o di richiamare il componente se passi i dati --}}
        {{-- <x-books-table :books="$books" /> --}}
    </div>
</x-layout>