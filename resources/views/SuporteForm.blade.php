@extends('base.app')

@section('conteudo')
    @php
        if (!empty($suporte->id)) {
            $route = route('suporte.update', $suporte->id);
        } else {
            $route = route('suporte.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Participe')

<!--Começo da sessão-->
<section id="contact" class="contact">
    <!--Começo do container-->
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contato</h2>
        <p>Contate-nos</p>
      </div>
      <!--Começo da sessão de cadastro-->
      <div class="row">
            <!--começo da div de contato-->
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                <div class="info">
                    <!--Dados de contato-->
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Localização:</h4>
                        <p>Av. Nereu Ramos, 3450 D - Seminário, Chapecó - SC, 89813-000</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>guiaacessivel@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telefone:</h4>
                        <p>+49 99108-1748</p>
                        <p>+49 98414-9050</p>
                    </div>

                </div>
            </div>
            <!--Final da div de contato-->

            <!--Começo da div de cadastro-->
            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                <!--Começo do formulario-->
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <!--Div de dois rows, nome e email-->
                    <div class="row">
                        <input type="hidden" name="id"
                        value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($suporte->id)) {{ $suporte->id }} @else {{ '' }} @endif" /><br>

                        <div class="col-md-6 form-group">
                        <input type="text" name="nome" id="name" class="form-control" placeholder="Seu Nome"
                        value="@if (!empty(old(''))) {{ old('nome') }} @elseif(!empty($suporte->nome)) {{ $suporte->nome }} @else {{ '' }} @endif" /><br>
                        </div>

                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Seu Email"
                            value="@if (!empty(old(''))) {{ old('email') }} @elseif(!empty($suporte->email)) {{ $suporte->email }} @else {{ '' }} @endif" /><br>
                        </div>

                    </div>
                    <!--Div do assunto-->
                    <div class="form-group mt-3">
                        <input type="text" name="assunto" class="form-control" id="subject" placeholder="Assunto"
                        value="@if (!empty(old(''))) {{ old('assunto') }} @elseif(!empty($suporte->assunto)) {{ $suporte->assunto }} @else {{ '' }} @endif" /><br>
                    </div>
                    <!--Div da mensagem-->
                    <div class="form-group mt-3">
                        <input type="text" name="mensagem" class="form-control" rows="5" placeholder="Mensagem"
                        value="@if (!empty(old(''))) {{ old('mensagem') }} @elseif(!empty($suporte->mensagem)) {{ $suporte->mensagem }} @else {{ '' }} @endif" /><br>
                    </div>
                    <!--Botão-->
                    </button>
                        <a href='{{ route('suporte.index') }}' class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                        Voltar</a> <br><br>
                </form>
                <!--Final do formulario-->

            </div>
            <!--Final da div de cadastro-->
        </div>
        <!--Final do container-->
    </div>
</section>
  <!-- Final da sessão -->

@endsection
