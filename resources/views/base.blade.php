<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>FLIXTRON</h1>
        </header>
        <hr/>
        <nav>
            <h2>Cadastrar Filmes</h2>
            <ol>
                <li> <a href=" {{ route('movie.index') }} ">Início</a></li>
                <li> <a href=" {{ route('movie.create') }} ">Novo</a> </li>
            </ol>

            <form method="post" action="{{ route('genre.store') }}">
                @csrf
                <input type='text' name='name' id='name'>
                <input type='submit' name='command' value='Cadastrar novo gênero'>
            </form> 
            <br>
        </nav>
        <div class="content">
            @yield('content') 
        </div>
        <footer>
            <small>
                <p>{{ env('APP_NAME') }}</p>
            </small>            
        </footer>

    </div>    
</body>
</html>