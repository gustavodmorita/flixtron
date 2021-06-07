@extends('base')
@section('content')

    <form method="POST" action="{{ route('movie.update', $movie->id ) }}">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input value="{{ $movie->name }}" type="text" name="name" id="name" required> <br>

        <label for="rating">Classificação:</label>
        <input value="{{ $movie->rating }}" type="text" name="rating" id="rating" required> <br>

        <label for="duration">Duração:</label>
        <input value="{{ $movie->duration }}" type="text" name="duration" id="duration" required> <br>

        <label for="genre">Gênero:</label>
        <input value="{{ $movie->genre }}" type="text" name="genre" id="genre" required> <br>

        <input type="submit" name="command" value="Salvar">
    </form>

@endsection