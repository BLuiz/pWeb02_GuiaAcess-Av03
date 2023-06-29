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
        <div class="card p-5    ">
            <div  class="card-body">

                @php
                    $nome_imagem = !empty($local->imagem) ? $local->imagem : 'sem_imagem.jpg';
                    $acessibilidade = json_decode($local->acessibilidade);
                @endphp

                <div id="informacoes" class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center">
                            <img style="width:100%; height:300px; border-radius:10px;"src="/storage/{{ $nome_imagem }}" width="100px" class="" />
                        </div>
                    </div>
                    <div id="descricao" class="col-lg-7 col-md-7 col-sm-6">
                        <h4 class="box-title mt-5">Dados do local</h4>
                        <p>{{ $local->descricao }}</p>
                        <p><b>Endereço:</b>
                          <br/>{{ $local->coordenada }}
                        </p>
                        <p><b>Telefone:</b>
                            <br/>{{ $local->telefone }}
                        </p>
                        <div class="d-flex" style="gap: 20px">
                            <a class="btn btn-primary btn-sm" href="{{ action('App\Http\Controllers\LocalController@edit', $local->id) }}">
                                Editar
                            </a>
                            <form method="POST"action="{{ action('App\Http\Controllers\LocalController@destroy', $local->id) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick='return confirm("Deseja Excluir?")'>
                                    Excluir
                                </button>
                            </form>
                        </div>

                    </div>
                    <div id="descricao">
                        <h3 class="box-title mt-5">Acessibilidade: </h3>
                        <div class="row">
                        <div class="col-4">
                        @foreach($acessibilidade as $chave => $valor)
                        @if($chave=='Prioridade no atendimento')
                        </div>
                        <div class="col-4">
                        @elseif($chave=='Escada acessivel')
                        </div>
                        <div class="col-4">
                        @endif
                        @if(boolval($valor))
                            <p><i class="fa fa-check text-success"></i> {{ $chave }}</p><br>
                        @elseif(!boolval($valor))
                            <p><i class="fa fa-times text-danger" aria-hidden="true"></i> {{ $chave }}</p><br>
                        @endif
                        @endforeach
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fim Listagem-->

</div>

@endsection
