@extends('base')
@section('content')

    <h1>Visualizando Dados do Produto</h1>    
    <hr>
    <p>ID: {{ $movie->id }}</p>
    <p>Nome: {{ $movie->name }}</p>
    <p>Classificação: {{ $movie->rating }}</p>
    <p>Duração: {{ $movie->duration }}</p>
    <p>Gênero: {{ $movie->genre }}</p>

@endsection

