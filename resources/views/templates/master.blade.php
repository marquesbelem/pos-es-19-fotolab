<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fotolab</title>

        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">

        @yield('css-view')
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    </head>
    <body>
        @include('templates.menu')
        @yield('conteudo-view')
        @yield('js-view')
    </body>
</html>