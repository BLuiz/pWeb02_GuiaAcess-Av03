@extends('base.app')

@section('conteudo')
    @php
        if (!empty($suporte->id)) {
            $route = route('suporte.update', $suporte->id);
        } else {
            $route = route('suporte.store');
        }
    @endphp

@section('tituloPagina', 'Formulário Suporte')
<main id="main">
    <section id="contact" class="contact">    
    <div class="container" style="margin-top: 3rem"> 
    
      <div class="section-title section-title1" data-aos="fade-up">
        <h2>Contato</h2>
        <p>Contate-nos</p>
      </div>

      <div class="row">
            <!--Início Contato-->
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Localização:</h4>
                        <p>Av. Nereu Ramos, 3450 D - <br>Seminário, Chapecó - SC, 89813-000</p>
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
            <!--Fim Contato-->

            <!--Início Cadastro de Suporte-->
            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (!empty($suporte->id))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <!--ID-->
                        <input type="hidden" name="id"
                        value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($suporte->id)) {{ $suporte->id }} @else {{ '' }} @endif" /><br>

                        <!--Nome-->
                        <div class="col-md-6 form-group">
                            <input type="text" name="nome" placeholder="Seu nome" id="nome" class="form-control"
                            value="@if(!empty(old('nome'))){{old('nome')}}@elseif(!empty($suporte->nome)){{$suporte->nome}}@else{{''}}@endif" /><br>
                        </div>

                        <!--Email-->
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Seu Email"
                            value="@if (!empty(old('email'))) {{ old('email') }} @elseif(!empty($suporte->email)) {{ $suporte->email }} @else {{ '' }} @endif" /><br>
                        </div>
                    </div>

                    <div class="row">
                        <!--Assunto-->
                        <div class="form-group mt-3">
                            <input type="text" name="assunto" class="form-control" id="subject" placeholder="Assunto"
                            value="@if(!empty(old('assunto'))){{old('assunto')}}@elseif(!empty($suporte->assunto)){{$suporte->assunto}}@else{{''}}@endif"/><br>
                        </div>
                    </div>

                    <div class="row">
                        <!--Descrição-->
                        <div class="form-group mt-3">
                            <textarea type="text" name="mensagem" class="form-control" rows="5" placeholder="Mensagem"
                            value="@if(!empty(old('mensagem'))){{old('mensagem')}}@elseif(!empty($suporte->mensagem)){{$suporte->mensagem}}@else{{''}}@endif"></textarea><br>
                        </div>
                    </div>

                    <!--Início Botões-->
                    <button class="btn btn-success" type="submit">
                        <i class="fa-solid fa-save"></i> Enviar
                    </button>
                    <a href="{{ route('suporte.index') }}" class="btn btn-primary">
                        <i class="fa-solid fa-arrow-left"></i> Voltar
                    </a><br><br>
                    <!--Fim Botões-->

                </form>
            </div>
            <!--Fim Cadastro de Suporte-->

        </div>
    </div>
    </main>
@endsection
