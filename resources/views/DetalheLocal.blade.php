@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'Local')

<div class="container" style="margin-top: 8rem">

    <div class="section-title section-title1" data-aos="fade-up">
        <h2>DETALHES DO LOCAL</h2>
        <p>{{ $local->nome }}</p>
    </div>

    <br>

    <!--Início Listagem-->
    <div class="principal container">
        <div class="card">
            <div  class="card-body">

                @php
                    $nome_imagem = !empty($local->imagem) ? $local->imagem : 'sem_imagem.jpg';
                    $acessibilidade = json_decode($local->acessibilidade);
                @endphp

                <div id="informacoes" class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center">
                            <img style="width:400px; height:400px; border-radius:10px; margin-left:-25px"src="/storage/{{ $nome_imagem }}" width="100px" class="" />
                        </div>
                    </div>
                    <div id="descricao" class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5" style="text-align:center">Dados do local</h4>
                        <p style="text-align:center">{{ $local->descricao }}</p>
                        <p style="text-align:center"><b>Endereço:</b>
                          <br/>{{ $local->coordenada }}
                        </p>
                        <p style="text-align:center"><b>Telefone:</b>
                            <br/>{{ $local->telefone }}
                        </p>
                    </div>
                    <div id="descricao" class="col-lg-7 col-md-7 col-sm-6">
                        <h3 class="box-title mt-5">Acessibilidade: </h3>
                        <ul class="list-unstyled">
                        @foreach ($acessibilidade as $chave => $valor)
                        @if (boolval($valor))
                            <li><i class="fa fa-check text-success"></i> {{ $chave }}</li><br>
                        @elseif (!boolval($valor))
                            <li><i class="fa fa-times text-danger" aria-hidden="true"></i> {{ $chave }}</li><br>
                        @endif
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Listagem-->

</div>

@endsection
