@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Início')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
                <h1>Lugar com acessibilidade? Ache no <span>Guia Acessível</span></h1>
                <h2>O melhor sistema para encontrar os melhores locais com acessibilidade!</h2>

                <!-- ======= SearchBt ======= -->
                <form action="#" class="form-search d-flex align-items-stretch mb-3 teste1" data-aos="fade-up" data-aos-delay="200">
                <input type="text" class="form-control" placeholder="Onde você quer ir?">
                <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
                <!-- ======= End SearchBt ======= -->

            </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <img src="{{ url('assets/img/hero2-img.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
    </svg>

    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= About Section ======= -->
    <section class="about">
    <div class="container-fluid">

        <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=-oWsAMwJ-ks" class="glightbox play-btn mb-4"></a>
        </div>

        <div id="problema" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Como podemos facilitar o acesso de pessoas que necessitam de acessibilidade em locais públicos? </h3>
            <p>	Para responder essa pergunta, tivemos a ideia de desenvolver um site que catalogue e avalie locais na cidade de Chapecó com base em sua acessibilidade auditiva, visual e de mobilidade, para facilitar o acesso de pessoas que necessitam de acessibilidade. Onde procuramos um resultado que os lugares acessíveis sejam mais frequentados e os lugares menos acessíveis comecem respeitar as lei municipais e estaduais que dizem que a acessibilidade é obrigatória em todo estabelecimento. </p>


            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="bi bi-search"></i></div>
            <h4 class="title"><a>Pesquisa </a></h4>
            <p class="description">O catálogo foi uma parte essencial para a base do site, já que ele surgiu de pesquisas nas normas da ABNT, código de obras, plano diretor, leis de Estado e Município, etc.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bi bi-code-square"></i></div>
            <h4 class="title"><a>Desenvolvimento</a></h4>
            <p class="description">Esse foi um projeto desenvolvido inteiramente no IFSC com auxílio dos professores das matérias de OI 4 e Tecnologias Assistivas.</p>
            </div>

        </div>
        </div>

    </div>
    </section><!-- End About Section -->

    <section class="details">
    <div class="container">

        <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ url('assets/img/undraw_acessbility.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>A importância da Acessibilidade nas ruas de Chapecó</h3>
            <p class="fst-italic">
            Segundo o dicionário, a palavra “Acessibilidade” é um substantivo que significa facilidade de acesso; qualidade do que é acessível. <br>
            Ou seja, a possibilidade de acesso a algum local, serviço, produto ou informação de forma autônoma, sem nenhum tipo de barreira para facilitar a vida de pessoas com e sem deficiência. <br>
            A acessibilidade não é exclusão, muito menos segregação e não é apenas integrar, acessibilidade é incluir, não deixar ninguém de fora para vivermos em conjunto de sociedade e na cidade de Chapecó precisa ter mais inclusão de pessoas que têm algum tipo de necessidade especial nos espaços públicos e privados.
            </p>
        </div>
        </div>

    </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
    <div class="container">

        <div class="row" data-aos="fade-up">

        <div class="col-lg-3 col-md-6">
            <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1" class="purecounter"></span>
            <p class="text-center">Usuários Satisfeitos</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p class="text-center">Locais Catalogados</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
            <p class="text-center">Avaliações positivas</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p class="text-center">Equipe</p>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section class="details">
    <div class="container">

        <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
            <img src="{{ url('assets/img/details-1.png') }}" class="img-fluid" alt="">
        </div>
        <div id="origem" class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Quem somos e como o projeto teve início?</h3>
            <p class="fst-italic">
            Somos alunos da turma 2019/2 do Ensino Médio Integrado do IFSC Câmpus Chapecó, esse site foi um projeto desenvolvido durante as matérias de Oficina de Integração 4 e Tecnologia Assistivas no sétimo semestre do curso, onde foi nos apresentado as propostas de projeto das próprias matérias, qual teríamos que propor uma solução para algum problema na sociedade e criar uma tecnologia para auxiliar Pcd 's. <br><br> Para a consolidação da ideia, decidimos que uma conversa com uma pessoa que passa por esse tipo de situação poderia ser de grande ajuda, e de fato, ao ouvir algumas reclamações de más-experiências em viagens, a ideia de fazer um website catálogo dos lugares com acessibilidade surgiu rapidamente. <br> <br>
            Nosso website tem um grupo principal de 4 pessoas: Bernardo Augusto Picoli, João Vitor de Carvalho, Luiz Gustavo Piuco Bazzotti e Mariana Matoso Gielda, onde nós separamos para cada um várias atividades para a existência e a funcionalidade do projeto (separando, inicialmente, por pesquisa e manutenção do site).

            </p>
        </div>
        </div>

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title section-title1" data-aos="fade-up">
                    <h2>Equipe</h2>
                    <p>Nossa Equipe</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="{{ url('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Bernardo Augusto Picoli</h4>
                            <span>Programador Front-end</span>
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/picoli_bernardo/"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{ url('assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>João Vitor de Carvalho</h4>
                            <span>Programador Back-end</span>
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/joaovdec/"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="{{ url('assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Luiz Gustavo Piuco Bazzotti</h4>
                            <span>Programador Back-end</span>
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/majzzena/"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic"><img src="{{ url('assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Mariana Matoso Gielda</h4>
                            <span>Programador Front-end</span>
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/marim0.2/"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Team Section -->


        <div class="row content" id="publico">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ url('assets/img/details-4.png')}}" class="img-fluid" alt="" width="80%">
        </div>
        <div id="desenvolvimento" class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Para quem esse site foi desenvolvido?</h3>
            <p class="fst-italic">
            O grupo iniciou o projeto com várias ideias querendo acima de tudo incluir tudo e todos, passando por várias dificuldades que é entender o que todas essas pessoas passam.
            <br><br>
            Na matéria de tecnologias assistivas tivemos a oportunidade de testar em um dia, um pouco de como é a vida de alguns pcd’s, com cadeira de rodas, bengala e venda para os olhos, futebol para cego e vôlei sentado. Fora, as várias palestras sobre a acessibilidade em sites, uso da língua de sinais e dispositivos de auxílio.
            <br><br>
            Esse site foi desenvolvido para pessoas que necessitam de acessibilidade, onde vamos enquadrar os pcd’s, os idosos, as gestantes, etc. Assim sendo, queremos incluir essas pessoas em estabelecimentos que estejam preparados para atendê-los.

            </p>

        </div>
        </div>

        <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
            <img src="{{ url('assets/img/details-3.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sobre o desenvolvimento do projeto </h3>
            <p>O projeto foi desenvolvido através de etapas, sendo as mesmas, desenvolvimento da ideia, produção do esqueleto e desenvolvimento do sistema.
            <br><br>
            Na etapa de Desenvolvimento da Ideia, foi realizada a pesquisa para o aprofundamento e viabilização do sistema. Ela foi realizada através de pesquisas de campo, onde entrevistamos determinadas pessoas que detinham dessa dificuldade e de pesquisas online, onde realizamos as pesquisas sobre as leis e decretos que garantiam os direitos desses cidadãos.
            </p>
            <p>Na Produção do Esqueleto, foi realizada a montagem e idealização básica da estrutura do site e suas funcionalidades. Foi realizado previamente uma discussão para traçar um caminho de com que o sistema deveria contar para garantir a devida facilidade no que se propõe.
            <br><br>
            Ao chegar na última etapa, o Desenvolvimento do Sistema, foi onde implementamos tudo que foi pesquisado e discutido, com as devidas alterações nas ideias para o melhor encaixe no tempo de entrega e sem perder a qualidade do mesmo.
            </p>
        </div>

        </div>

    </div>
    </section><!-- End Details Section -->

    </main><!-- End #main -->
</div>


@endsection
