<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Bootatrap-->
        <link rel="stylesheet" href="{{ url(mix('site/css/style.css')) }}">
        <!--jQuery & Bootstrap-->
        <script src="{{ url(mix('site/js/scripts.js'))}}"></script>
        <!--Corpo da Pagina Principal-->
        <title>@yield('InfoFree')</title>
    </head>
    <body class="bg-azulclaro">
        @yield('content')
        <footer class="text-center">
            <p>Marcos &copy; 2021</p>
        </footer>
    </body>
</html>