<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Aulab Books</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books.index') }}">Lista Libri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books.create') }}">Aggiungi Libro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>