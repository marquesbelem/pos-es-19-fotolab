<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fotolab | @yield('pageName') </title>

        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

        @yield('css-view')
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    </head>
    <body>
        @include('templates.menu')
        @yield('conteudo-view')

        <script src="{{ asset('js/jquery/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('js/jquery/slick.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('js-view')
    </body>
</html>