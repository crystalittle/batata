{{--resources/views/animais/base.blade.php--}}
<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1>@yield('titulo')</h1>
        <hr>
        <a href="{{ route('index') }}">Inicial</a>
        <a href="{{ route('index') }}">Animais</a>
        <a href="{{ route('index') }}">Usuários</a>
        <hr>
        @yield('conteudo')
    </body>
</html>