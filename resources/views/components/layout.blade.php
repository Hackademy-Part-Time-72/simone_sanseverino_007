<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title ?? 'BookStore' }}</title>
</head>
<body>
    <x-nav />
    <main>
        {{ $slot }}
    </main>
</body>
</html>