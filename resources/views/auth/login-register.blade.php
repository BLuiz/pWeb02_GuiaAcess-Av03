<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Guia Acessível</title>


    <!-- Favicons -->
    <link href="{{ url ('assets/img/favico-icon/icons8.png')}}" rel="icon">
    <link href="{{ url ('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url ('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/buscastyle.css')}}" rel="stylesheet">
    <link href="{{ url('assets/login/login.css')}}" rel="stylesheet">
    <link href="{{ url('assets/login/snackbar.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Bootslander - v4.9.1
    * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body style="background: rgb(231, 230, 230)">
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
      <div class="logo" style="margin-left: 4.5rem">
        <h1><a href="{{ url('/dashboard') }}"><span>Guia Acessível</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
  </header><!-- End Header -->

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo de volta!</h2>
                <p class="description description-primary">Se já possui uma conta conosco <br>faça seu login pressionando o botão abaixo!</p</p>
                <button id="signin" class="btn btn-primary">Fazer login</button>
            </div>

            <!-- REGISTRAR -->
            <div class="second-column">
                <h2 class="title title-second">Crie uma conta para entrar</h2>
                <form class="form align-center" method="POST" action="{{ route('register') }}">

                    @csrf

                    <!-- Name -->
                    <label class="label-input">
                        <i class="far fa-user icon-modify"></i>
                        <input placeholder="Nome" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label>

                    <!-- Email Address -->
                    <label class="label-input">
                        <i class="far fa-envelope icon-modify"></i>
                        <input placeholder="Email" id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </label>

                    <!-- Password -->
                    <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input placeholder="Senha" id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </label>

                    <!-- Confirm Password -->
                    <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input placeholder="Confirmar senha" id="password_confirmation"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </label>

                    <div class="flex items-center justify-end ">
                    <button class="btn btn-second">{{ __('Criar') }}</button>
                    </div>
                </form>
            </div>\
        </div>

        <!-- LOGIN -->
        <div class="content second-content mt-5">
            <div class="first-column">
                <h2 class="title title-primary">Olá, Cliente!</h2>
                <p class="description description-primary">Crie sua conta e navegue conosco!</p>
                <button id="signup" class="btn btn-primary">Criar conta</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Faça o login para entrar</h2>
                <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <label class="label-input" id="testeind">
            <i class="far fa-envelope icon-modify"></i>
            <input placeholder="Email" id="email" class="block mt-1 w-full" 
            type="email" 
            name="email" :value="old('email')" 
            required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </label>

        <!-- Password -->
        <label class="label-input" >
            <i class="fas fa-lock icon-modify"></i>
            <input placeholder="Senha" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </label>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="password" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif
            <br>
            <button class="btn btn-second">{{ __('Entrar') }}</button>

        </div>
    </form>
            </div>
        </div>
    </div>
    <div id="snackbar"></div>
    <script src="{{ url('assets/login/login.js')}}"></script>
    <script src="{{ url('assets/login/snackbar.js')}}"></script>

    <!-- VLIBRAS PLUGIN -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <!-- END VLIBRAS PLUGIN -->
</body>

</html>
