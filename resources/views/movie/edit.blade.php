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

        <label for="genre_id">Gênero:</label>
        <select name="genre_id">
            @foreach ($genres as $genre)
                @if($genre_name->name == $genre->name)
                    <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
                @else
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endif
            @endforeach
        </select> <br>

        <input type="submit" name="command" value="Salvar">
    </form>

@endsection