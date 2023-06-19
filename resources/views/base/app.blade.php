<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tituloPagina') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{-- asset('css/app.css') --}}" rel="stylesheet">



    <!--Importações utilizadas no primeiro projeto-->
    <!-- Favicons -->
    <link href="../assets/img/favico-icon/icons8.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/indexstyle.css" rel="stylesheet">
    <link href="../assets/css/addLugarstyle.css" rel="stylesheet">
    <link href="../assets/css/buscastyle.css" rel="stylesheet">
    <link href="../assets/css/detalheStyle.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Bootslander - v4.9.1
    * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>



<body class="d-flex flex-column min-vh-100">
    @include('base.menu')

    <div class="container">
        <br>
        @include('base.flash-message')
        @yield('conteudo')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer mt-auto py-3">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                        <h3>Guia Acessível</h3>
                        <p class="pb-3"><em>Lugar com acessibilidade? Ache no Guia Acessível</em></p>
                        <p>
                            Av. Nereu Ramos, 3450 D - Seminário,<br>
                            Chapecó - SC, 89813-000 <br><br>
                            <strong>Telefone:</strong> +49 99104-1748<br>
                            <strong>Email:</strong> guiaacessivel@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        </div>
                    </div>

                    <!--
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Navegação</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/dashboard')}}">Início</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">Quem somos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="busca.html">Onde ir</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#service">Serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#team">Equipe</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
                        </ul>
                    </div>
                    -->

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>O que busca?</h4>
                        <ul>
                            <!--Ajustar uma pagina específica de local-->
                            <li><i class="bx bx-chevron-right"></i> <a href="to FIX">Restaurantes</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="to FIX">Hoteis</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="to FIX">Lazer</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="to FIX">Mercados</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="to FIX">Shoppings</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="to FIX">Aeroportos</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Virar apoiador</h4>
                        <p>Para catalogar seu espaço em nosso site, inscreva-se com seu e-mail e iremos contatar você!</p>
                        <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Inscrever-se">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <p class="text-center text-muted">
                    &copy; Copyright <strong><span>Guia Acessível</span></strong>. Todos os direitos reservados
                </p>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                <p class="text-center text-muted">
                    Design: <a href="https://bootstrapmade.com/">BootstrapMade</a>;
                    Desenvolvedores:
                    <a href="https://github.com/Picolii"    target="_blank">Picoli</a>,
                    <a href="https://github.com/JoaoBuiu"   target="_blank">João</a>,
                    <a href="https://github.com/BLuiz"      target="_blank">Luiz</a> e
                    <a href="https://github.com/mariwebs"   target="_blank">Mari</a>
                </p>
            </div>
        </div>
    </footer><!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <!--Scripts do site original-->
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

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
