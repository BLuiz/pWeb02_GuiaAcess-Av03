@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Início')
<div class="col" style="padding: 5%">

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
            <img src="../assets/img/hero2-img.png" class="img-fluid animated" alt="">
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
            <img src="../assets/img/undraw_acessbility.png" class="img-fluid" alt="">
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
            <p>Usuários Satisfeitos</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Locais Catalogados</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
            <p>Avaliações positivas</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
            <p>Equipe</p>
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
            <img src="../assets/img/details-1.png" class="img-fluid sizeimg" alt="">
        </div>
        <div id="origem" class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Quem somos e como o projeto teve início?</h3>
            <p class="fst-italic">
            Somos alunos da turma 2019/2 do Ensino Médio Integrado do IFSC Câmpus Chapecó, esse site foi um projeto desenvolvido durante as matérias de Oficina de Integração 4 e Tecnologia Assistivas no sétimo semestre do curso, onde foi nos apresentado as propostas de projeto das próprias matérias, qual teríamos que propor uma solução para algum problema na sociedade e criar uma tecnologia para auxiliar Pcd 's. <br><br> Para a consolidação da ideia, decidimos que uma conversa com uma pessoa que passa por esse tipo de situação poderia ser de grande ajuda, e de fato, ao ouvir algumas reclamações de más-experiências em viagens, a ideia de fazer um website catálogo dos lugares com acessibilidade surgiu rapidamente. <br> <br>
            Nosso website tem um grupo principal de 4 pessoas: Bernardo Augusto Picoli, João Vitor de Carvalho, Luiz Gustavo Piuco Bazzotti e Mariana Matoso Gielda, onde nós separamos para cada um várias atividades para a existência e a funcionalidade do projeto (separando, inicialmente, por pesquisa e manutenção do site).

            </p>
        </div>
        </div>

        <div class="row content" id="publico">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="../assets/img/details-4.png" class="img-fluid" alt="" width="80%">
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
            <img src="../assets/img/details-3.png" class="img-fluid" alt="">
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
        <h2>Equipe</h2>
        <p>Nossa Equipe</p>
        </div>

        <div class="row" data-aos="fade-left">

        <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="../assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Bernardo Augusto Picoli</h4>
                <span>Programador e Desenvolvedor</span>
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
            <div class="pic"><img src="../assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>João Vitor de Carvalho</h4>
                <span>Pesquisador</span>
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
            <div class="pic"><img src="../assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Luiz Gustavo Piuco Bazzotti</h4>
                <span>Programador e Desenvolvedor</span>
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
            <div class="pic"><img src="../assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Mariana Matoso Gielda</h4>
                <span>Pesquisadora</span>
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

    </main><!-- End #main -->
</div>

@endsection
