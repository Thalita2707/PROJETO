<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Quilombola Digital</title>
    @vite('resources/css/bootstrap/bootstrap.min.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jomhuria&display=swap');

        h2 {
            color: #743B0B;
            font-family: 'Jomhuria', cursive;
            font-weight: 400;
        }
    </style>

    @vite('resources/css/quilombola/estilo.css')
    @yield('page-css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
@include('layouts.quilombola.partials.header')

@yield('content')

@vite(['resources/js/bootstrap/bootstrap.bundle.min.js'])

@include('layouts.quilombola.partials.footer')

@yield('page-js')
</body>
</html>
