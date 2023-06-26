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
    <!--Início Listagem-->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Telefone</th>
                <th scope="col">Coordenadas</th>
                <th scope="col">Imagem</th>
                <th scope="col">Acessibilidade</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locals as $item)
                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                @endphp
                <tr>
                    <td scope='row'>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->descricao }}</td>
                    <td>{{ $item->telefone }}</td>
                    <td>{{ $item->coordenadas }}</td>
                    <td><img src="/storage/{{ $nome_imagem }}" width="100px" class="img-thumbnail" /> </td>
                    <td>{{ $item->acessibilidade }}</td>
                    <td> <!--Editar-->
                        <a href="{{ action('App\Http\Controllers\LocalController@edit', $item->id) }}">
                            <i class='fa-solid fa-pen-to-square' style='color:orange;'></i>
                        </a>
                    </td>
                    <td> <!--Excluir-->
                        <form method="POST" action="
                        {{ action('App\Http\Controllers\LocalController@destroy', $item->id) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button type="submit" onclick='return confirm("Deseja Excluir?")' style='all: unset;'>
                                <i class='fa-solid fa-trash' style='color:red;'></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!--Fim Listagem-->

</div>

@endsection
