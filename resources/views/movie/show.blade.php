@extends('base')
@section('content')

    <h1>Visualizando os Dados do Filme</h1>    
    <hr>
    <p>ID: {{ $movie->id }}</p>
    <p>Nome do Filme: {{ $movie->name }}</p>
    <p>Classificação: {{ $movie->rating }}</p>
    <p>Duração: {{ $movie->duration }}</p>
    <p>Gênero: {{ $genre->name }}</p>

@endsection

