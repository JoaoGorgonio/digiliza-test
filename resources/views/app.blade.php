<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <link rel="icon" href="{{ asset('images/favicon.png') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">

        <!-- Importações de estilos CSS -->
        <link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('styles')
    </head>
    <body>
         <!-- Conteúdo da página -->
        @yield('content')

        <!-- Importações de bibliotecas JavaScript -->
        <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('src/jquery/jquery.js') }}"></script>
        <script src="{{ asset('src/jquery/jquery.validation.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
