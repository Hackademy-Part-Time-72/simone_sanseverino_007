<!DOCTYPE html>
<html>
<head>
    <title>Nuovo Libro Inserito</title>
</head>
<body>
    <h1>Ciao!</h1>
    <p>Un nuovo libro è stato aggiunto alla tua libreria:</p>
    <ul>
        <li><strong>Titolo:</strong> {{ $book->title }}</li>
        <li><strong>Pagine:</strong> {{ $book->pages }}</li>
        <li><strong>Anno:</strong> {{ $book->year }}</li>
    </ul>
    <p>Buona lettura!</p>
</body>
</html>