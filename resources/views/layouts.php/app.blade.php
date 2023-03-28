<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Titolo</h1>

    <p>
        testo:
        @yield('paragrafo_principale')
    </p>
</body>
</html>