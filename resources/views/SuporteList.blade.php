@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'FAQ')

<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Questões frequentemente perguntadas</h2></h2>
        <p>Suporte</p>
    </div>
    

    <!--Início da Busca-->
    <form action="{{ route('suporte.search') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-2">
                <select name="campo" class="form-select">
                    <option value="nome">Nome</option>
                    <option value="email">Email</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
            </div>
            <div class="col-6">
                <button class="btn btn-primary" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i> Buscar
                </button>
                <a class="btn btn-success" href="{{ action('App\Http\Controllers\SuporteController@create') }}"><i
                        class="fa-solid fa-plus"></i> Cadastrar</a>
            </div>
        </div>
    </form>
    <!--Fim da Busca-->

    <!--Início da Listagem-->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Assunto</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($suportes as $item)
                <tr>
                    <td scope='row'>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->assunto }}</td>
                    <td>{{ $item->mensagem }}</td>
                    <td> <!--Editar-->
                        <a href="{{ action('App\Http\Controllers\SuporteController@edit', $item->id) }}">
                            <i class='fa-solid fa-pen-to-square' style='color:orange;'></i>
                        </a>
                    </td>
                    <td> <!--Excluir-->
                        <form method="POST" action="
                        {{ action('App\Http\Controllers\SuporteController@destroy', $item->id) }}">
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
    <!--Final da Listagem-->
</div>

@endsection
