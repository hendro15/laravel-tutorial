<!doctype html>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to HackerPair</title>
    </head>
    <body>
        <div>
            @yield('content')
        </div>
        <div>
            @yield('advertisement')
        </div>
    </body>
</html>
