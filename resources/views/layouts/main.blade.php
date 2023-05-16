<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        
        <!--- Fonts --->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">        
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <!--- CSS --->
        <link rel="stylesheet" href="/css/app.css">
        <script src="/javascript/script.js"></script>
        <title>@yield('title')</title>
        
    </head>
    <body class="main">
        @yield('content')
        <footer>ART Events &copy; 2023</footer>
    </body>
</html>