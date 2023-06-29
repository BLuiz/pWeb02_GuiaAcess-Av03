@extends('base.app')

@section('conteudo')
    @php
        if (!empty($usuario->id)) {
            $route = route('usuario.update', $usuario->id);
        } else {
            $route = route('usuario.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Usuário')
<div class="container" style="margin-top: 8rem;">
<div class="section-title section-title1" data-aos="fade-up">
        <h2>CADASTRO DE USUÁRIO</h2>
        <p>Formulário Usuário</p>
    </div>

<div class="col">
    <div class="row">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($usuario->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id"
                value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($usuario->id)) {{ $usuario->id }} @else {{ '' }} @endif" /><br>
                <div class="row">
                <div class="col-6">
                <label class="form-label">Nome</label><br>
                <input type="text" class="form-control" name="nome"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($usuario->nome)) {{ $usuario->nome }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col">
                <label class="form-label">Telefone</label><br>
                <input type="text" class="form-control" name="telefone"
                    value="@if (!empty(old('telefone'))) {{ old('telefone') }} @elseif(!empty($usuario->telefone)) {{ $usuario->telefone }} @else {{ '' }} @endif" /><br>
            </div>
            </div>
            <div class="row">
            <div class="col-6">
                <label class="form-label">E-mail</label><br>
                <input type="email" class="form-control" name="email"
                    value="@if (!empty(old('email'))) {{ old('email') }} @elseif(!empty($usuario->email)) {{ $usuario->email }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col">
                <label class="form-label">Categoria</label><br>
                <select name="categoria_id" class="form-select">
                    @foreach ($categorias as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                    @endforeach
                </select>
            </div>
    </div>
            @php
                $nome_imagem = !empty($usuario->imagem) ? $usuario->imagem : 'sem_imagem.jpg';
            @endphp
            <div class="col-6">
                <br>
                <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" width="25%" />
                <br><br>
                <input type="file" class="form-control" name="imagem" /><br>
            </div>
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('usuario.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                Voltar</a> <br><br>
        </form>
    </div>
</div>
</div>
@endsection
