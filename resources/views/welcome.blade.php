<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="/css/app.css">
        <script src="/javascript/script.js"></script>
        
    </head>
    <body class="antialiased">
        <h1>Hello Laravel!</h1>
        @if(10 > 5)
                <p>a condição é true</p>
        @endif

        <img src="/imgs/capa.jpg" alt="live-banner">

        @if ($nome == "Arthur")
                <p>Olá, seu nome é {{ $nome }} e você tem {{ $idade }} anos</p>
        @else
        <p>O nome não é {{ $nome }}</p>
        @endif
        
        @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
        @if ($i == 2)
            <p> o indice é 2 </p>
        @endif
        @endfor

        @foreach($nomes as $names)
        <br>
        <p>{{ $loop->index }}</p>
            <p>{{ $names }}</p>
        @endforeach
        
        <br>
        @php
            $name = 'Arthur';
            echo $name;
        @endphp

    </body>
</html>
