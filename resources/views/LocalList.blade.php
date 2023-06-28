@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'Listagem de Locais')

<div class="container" style="margin-top: 8rem">
    <div class="section-title section-title1" data-aos="fade-up">
        <h2>Locais disponíveis</h2>
        <p>Catálogo</p>
    </div>

    <!--Início Busca-->
    <form action="{{ route('local.search') }}" method="post">
        @csrf
        <div class="row">

                <div class="col-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="campo" value="nome">
                        <label class="form-check-label" for="campo">Nome</label><br>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="campo" value="telefone">
                        <label class="form-check-label" for="campo">Telefone</label><br>
                    </div>
                </div>

            <div class="col-5">
            <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
            </div>
            <div class="col-4">
                <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
                </button>
                <a class="btn btn-success" href="{{ action('App\Http\Controllers\LocalController@create') }}"><i
                    class="fa-solid fa-plus"></i> Cadastrar</a>
            </div>
        </div>
    </form>
    <!--Fim Busca-->
    <br>

<section id="service" class="services pt-0">

      <div class="row gy-4">
        <!--Início Listagem-->
        @foreach ($locals as $item)
        @php
        $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
        @endphp
        <div class="col-lg-4 col-md-6 cardLugar" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-img">
              <img src="/storage/{{ $nome_imagem }}" alt="" class="img-fluid">
            </div>
            <h3><a href="{{ action('App\Http\Controllers\LocalController@detalhe', $item->id) }}" class="stretched-link">{{ $item->nome }}</a></h3>
            <p>{{ $item->descricao }} <br><br>
             <strong>Endereço:</strong> {{ $item->coordenada }}</p>
          </div>
        </div><!-- End Card Item -->
        @endforeach

    </div>
  </section><!-- End Services Section -->

</div>

@endsection
