@extends('base')
@section('content')

    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <h5 class="card-header text-center text-secondary">Cadastrar Filme</h5>
    <div class="card-body">
    <form method="POST" action="{{ route('movie.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome do Filme</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Vingadores Ultimato...">
            @error('name')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="rating">Classificação</label>
            <input type="text" class="form-control" name="rating" id="rating" value="{{ old('rating') }}" placeholder="Maiores de 18 anos...">
            @error('rating')
                <div style="color:red">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="duration">Duração</label>
            <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration') }}" placeholder="1 hora e 30 minutos...">
            @error('duration')
                <div style="color:red">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-4">
            <label for="genre_id">Gênero</label>
            <select id="genre_id" class="form-control" name="genre_id">
                @if( $genres->count() )
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                @else
                    <option style="color:red">Não há gêneros de filmes cadastrados!</option>
                @endif
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-success" name="command">Salvar</button>
        <input type="reset" class="btn btn-secondary" value="Limpar">
      </form>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection