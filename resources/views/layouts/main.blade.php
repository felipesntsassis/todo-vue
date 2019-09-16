<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TODO Vue</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/animate.min.css">
    </head>

    <body>
        <div id="app">
            <div class="container animated fadeIn">
                @yield('content')
            </div>
        </div>
    </body>

    <script src="/js/app.js"></script>
</html>
