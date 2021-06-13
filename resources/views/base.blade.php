<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        html, body{
            overflow-x: hidden;
        }

        a.nav-link{
            color: white;
        }

        a.nav-link:hover{
            color: #999;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="container">
        <header class="container">
            <div class="row">
                <div class="col">
                <h1>FLIXTRON</h1>
                </div>
                @if (Auth::check())
                    <div class="col-auto">
                        <h4>Usuário conectado: {{ Auth::user()->name }}</h4>
                    </div>
                @endif
            </div>
        </header>

        <nav class="nav nav-pills nav-fill bg-dark mb-5 ">
        @if (Auth::check())
            <h2 class="text-white">Gerenciar Filmes:</h2>
            <a class="nav-item nav-link" href=" {{ route('movie.index') }} ">Filmes</a>
            <a class="nav-item nav-link" href=" {{ route('movie.create') }} ">Cadastrar</a>
            <a class="nav-item nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Desconectar') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <form class="row ms-auto mt-1" method="post" action="{{ route('genre.store') }}">
                @csrf
                <div class="col">
                    <input class="form-control mr-sm-2" type='text' name='name' id='name' placeholder="Novo gênero de filme">
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="command">Adicionar Gênero</button>
                </div>
            </form>
        @else
            <a class="nav-item nav-link" href=" {{ route('login') }} ">Entrar</a>
            <a class="nav-item nav-link" href=" {{ route('register') }} ">Registrar</a>
        @endif
        </nav>

        <div class="content container">
            @yield('content') 
        </div>

        <footer class="footer text-center text-lg-start bg-light text-muted">
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="#">{{ env('APP_NAME') }}</a>
            </div>
        </footer>
    </div>    
</body>
</html>