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


    <!-- Vendor2 CSS Files -->
    <link href="{{ url ('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets2/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ url ('assets2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets2/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets2/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets2/vendor/aos/aos.css')}}" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ url ('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url ('assets/css/indexstyle.css') }}" rel="stylesheet">
    
</head>



<body class="d-flex flex-column min-vh-100">
    @include('base.menu') <!--NavBar-->

    <div>
        @include('base.flash-message')
        @yield('conteudo')
    </div>

    @include('base.footer') <!--Footer-->



    <!-------Scripts utilizados------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <!--Scripts do site original-->
    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>


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
