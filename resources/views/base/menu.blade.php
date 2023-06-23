<header id="header">

    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container container-fluid">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">Guia Acessível</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container-fluid">
                <!--Início Links de Páginas-->
                <ul class="navbar-nav float-end">

                <li class="nav-item px-2 dropdown active">
                       <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projeto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/dashboard') }}"> Início</a></li>
                            <li><a class="dropdown-item" href="{{ url('/dashboard#problema') }}">Problema</a></li>
                            <li><a class="dropdown-item" href="{{ url('/dashboard#origem') }}">Origem</a></li>
                            <li><a class="dropdown-item" href="{{ url('/dashboard#publico') }}">Público alvo</a></li>
                            <li><a class="dropdown-item" href="{{ url('/dashboard#desenvolvimento') }}">Desenvolvimento</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2 dropdown active">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Locais
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/local') }}">Catálogo</a></li>
                            <li><a class="dropdown-item" href="{{ action('App\Http\Controllers\LocalController@create') }}">Participe</a></li>
                            <li><a class="dropdown-item disabled" href="#">Mapa?</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2 dropdown active">
                        <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Suporte
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/suporte') }}">FAQ</a></li>
                            <li><a class="dropdown-item" href="{{ action('App\Http\Controllers\SuporteController@create') }}"> Contato</a></li>
                        </ul>
                    </li>
                    <!--Fim Links de Páginas-->

                    <!--Início Botão de Perfil-->
                    <li class="nav-item px-2">
                        @guest
                            <li class="nav-item px-2">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Logar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                                </li>
                            @endif
                            @else
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class='fas fa-user'></i> {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"> <i class='fas fa-user-cog'></i> Perfil</a>   <!--Página de perfil?-->
                                    <a class="dropdown-item" href="#"><i class='fas fa-cog'></i> Configurações</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class='fas fa-sign-out-alt'></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        @endguest
                    </li>
                    <!--Fim Botão de Perfil-->
                </ul>

            </div>
        </div>
    </nav>

</head>
