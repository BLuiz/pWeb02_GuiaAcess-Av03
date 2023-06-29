@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'FEEDBACK')

<div class="container" style="margin-top: 8rem">
    <div class="section-title section-title1" data-aos="fade-up">
        <h2>FEEDBACK DOS USUÁRIOS</h2></h2>
        <p>Avaliações</p>
    </div>


    <!--Início da Busca-->
    <form action="{{ route('feedback.search') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-2">
                <select name="campo" class="form-select">
                    <option value="nome">Nota</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
            </div>
            <div class="col-6">
                <button class="btn btn-primary" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i> Buscar
                </button>
                <a class="btn btn-success" href="{{ action('App\Http\Controllers\FeedbackController@create') }}"><i
                        class="fa-solid fa-plus"></i> Cadastrar</a>
            </div>
        </div>
    </form>
    <!--Fim da Busca-->
    <br>
    <!--Início da Listagem-->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nota</th>
                <th scope="col">Avaliação</th>
                <th scope="col">Nome do Local</th>
                <th scope="col">Nome do Usuario</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($feedbacks as $item)
                <tr>
                    <td scope='row'>{{ $item->id }}</td>
                    <td>{{ $item->nota }}</td>
                    <td>{{ $item->avaliacao }}</td>
                    <td>{{ $item->local->nome }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td> <!--Editar-->
                        <a href="{{ action('App\Http\Controllers\FeedbackController@edit', $item->id) }}">
                            <i class='fa-solid fa-pen-to-square' style='color:orange;'></i>
                        </a>
                    </td>
                    <td> <!--Excluir-->
                        <form method="POST" action="
                        {{ action('App\Http\Controllers\FeedbackController@destroy', $item->id) }}">
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
