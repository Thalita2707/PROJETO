<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Quilombola Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jomhuria&display=swap');

        h2 {
            color: #743B0B;
            font-family: 'Jomhuria', cursive;
            font-weight: 400;
        }
    </style>
    @vite('resources/css/quilombola/index.css')
    @vite('resources/css/quilombola/cultura.css')
    @vite('resources/css/quilombola/economia.css')
    @vite('resources/css/quilombola/lideres.css')
    @vite('resources/css/quilombola/noticias.css')
    @vite('resources/css/quilombola/lutasdireitos.css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
@include('layouts.quilombola.partials.header')

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@include('layouts.quilombola.partials.footer')
</body>
</html>
