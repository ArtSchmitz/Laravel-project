@extends('layouts.main')

@section('title', 'ART Events')

@section('content')

<h1>Hello Laravel!</h1>
@if (10 > 5)
    <p>a condição é true</p>
@endif

<img src="/imgs/capa.jpg" alt="live-banner">

@if ($nome == 'Arthur')
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

@foreach ($nomes as $names)
    <br>
    <p>{{ $loop->index }}</p>
    <p>{{ $names }}</p>
@endforeach

@endsection
