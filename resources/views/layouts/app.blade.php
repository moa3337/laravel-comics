<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('page_name')</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>

<body class="bg-secondary">
    @include('partials/_navbar')

    <main>
        @yield('main_content')
        {{--@dump($comics)--}}
    </main>

    @include('partials._footer')
</body>
</html>