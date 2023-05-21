@extends('layouts.main')

@section('title', 'ART Events')

@section('content')

<h1>Produtos</h1>

@if($busca != '')
<p>O Usuário está procurando por {{ $busca }}</p>
@endif

@endsection
