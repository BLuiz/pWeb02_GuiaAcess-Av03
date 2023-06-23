<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
            <h1><a href="{{ url('/dashboard') }}"><span> Guia Acessível</span></a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#"  data-bs-toggle="dropdown">Projeto</a>
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
                <i class="bi bi-list mobile-nav-toggle"></i>
            </div>
        </div>
    </nav>
    </div>
</header>
