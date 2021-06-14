@extends('base')
@section('content')

    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <h5 class="card-header text-center text-secondary">Editar Filme</h5>
    <div class="card-body">
    <form method="POST" action="{{ route('movie.update', $movie->id ) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome do Filme</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $movie->name }}">
            @error('name')
                <div style="color:red">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="rating">Classificação</label>
            <input type="text" class="form-control" name="rating" id="rating" value="{{ $movie->rating }}">
            @error('rating')
                <div style="color:red">{{ $message }}</div>
            @enderror
            
          </div>
          <div class="form-group col-md-6">
            <label for="duration">Duração</label>
            <input type="text" class="form-control" name="duration" id="duration" value="{{ $movie->duration }}">
            @error('duration')
                <div style="color:red">{{ $message }}</div>
            @enderror
            
          </div>
          <div class="form-group col-md-4">
            <label for="genre_id">Gênero</label>
            <select id="genre_id" class="form-control" name="genre_id">
                @foreach ($genres as $genre)
                @if($genre_name->name == $genre->name)
                    <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
                @else
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endif
                @endforeach
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="command">Salvar</button>
      </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    

@endsection