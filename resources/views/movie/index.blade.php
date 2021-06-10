@extends('base')
@section('content')
    <table border="1">
        <tr>
            <th>ID</th>  <th>Nome</th>  <th>Classificação</th> <th>Duração</th> <th>Gênero</th>
            <th colspan="3">Comandos</th>
        </tr>

        @if( $movies->count() )
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>{{ $movie->duration }}</td>
                    @foreach ($genres as $genre)
                        @if( $genre->id == $movie->genre_id )
                            <td>{{ $genre->name }}</td>
                        @endif
                    @endforeach
                    <td><button> <a href="{{ route('movie.show', $movie->id) }}">Mostrar</a> </button></td>
                    <td><button> <a href="{{ route('movie.edit', $movie->id) }}">Editar</a> </button></td>
                    <td>
                        <form method="post" action="{{ route('movie.destroy', $movie->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>   
            @endforeach
        @else
            <tr>
                <td colspan="6">Não há filmes para serem exibidos!</td>
            </tr>
        @endif
    </table>
@endsection