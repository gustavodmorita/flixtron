@extends('base')
@section('content')

    <form method="POST" action="{{ route('movie.store') }}">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" > <br>
        @error('name')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <label for="rating">Classificação:</label>
        <input type="text" name="rating" id="rating" value="{{ old('rating') }}" > <br>
        @error('rating')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <label for="duration">Duração:</label>
        <input type="text" name="duration" id="duration" value="{{ old('duration') }}" > <br>
        @error('duration')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <label for="genre_id">Gênero:</label>
        <select name="genre_id">
            @if( $genres->count() )
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            @else
                <option>Não há gêneros de filmes cadastrados!</option>
            @endif
        </select> <br>
        @error('genre')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <input type="submit" name="command" value="Salvar">
        <input type="reset" value="Limpar">
    </form>

@if ($errors->any()) 

<h3>Erros</h3>
<ul>
    @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>  
    @endforeach
</ul>

@endif

@endsection