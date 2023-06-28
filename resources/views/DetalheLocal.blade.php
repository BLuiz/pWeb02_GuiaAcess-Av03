@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'Local')

<div class="container" style="margin-top: 8rem">
    <div class="section-title section-title1" data-aos="fade-up">
        <h2>Local</h2>
    </div>

    <!--Início Busca-->
    <!--Fim Busca-->
    <br>
    <!--Início Listagem-->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">{{ $local->nome }}</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nome_imagem = !empty($local->imagem) ? $local->imagem : 'sem_imagem.jpg';
            @endphp
                <tr>
                    <td><img src="/storage/{{ $nome_imagem }}" width="100px" class="img-thumbnail" />/td>
                    <td scope='row'>{{ $local->id }}</td>
                    <td></td>
                    <td>{{ $local->descricao }}</td>
                    <td>{{ $local->telefone }}</td>
                    <td>{{ $local->coordenada }}</td> <!--Se coordenada não mostrar é por causa disso-->
                    <td>
                    <td>{{ $local->acessibilidade }}</td>
                    <td> <!--Editar-->
                        <a href="{{ action('App\Http\Controllers\LocalController@edit', $local->id) }}">
                            <i class='fa-solid fa-pen-to-square' style='color:orange;'></i>
                        </a>
                    </td>
                    <td> <!--Excluir-->
                        <form method="POST" action="
                        {{ action('App\Http\Controllers\LocalController@destroy', $local->id) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button type="submit" onclick='return confirm("Deseja Excluir?")' style='all: unset;'>
                                <i class='fa-solid fa-trash' style='color:red;'></i>
                            </button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <!--Fim Listagem-->

</div>

@endsection
