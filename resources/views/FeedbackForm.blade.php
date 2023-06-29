@extends('base.app')

@section('conteudo')
    @php
        if (!empty($feedback->id)) {
            $route = route('feedback.update', $feedback->id);
        } else {
            $route = route('feedback.store');
        }
    @endphp


@section('tituloPagina', 'Formulário de Feedback')
<main id="main">
    <section id="contact" class="contact">
    <div class="container" style="margin-top: 3rem">

      <div class="section-title section-title1" data-aos="fade-up">
        <h2>FEEDBACK</h2>
        <p>Avaliem</p>
      </div>
            <!--Início Cadastro de Suporte-->
            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (!empty($feedback->id))
                        @method('PUT')
                    @endif

                    <div class="row">
                        <!--ID-->
                        <input type="hidden" name="id" value="
                        @if(!empty(old('id'))){{old('id')}}@elseif(!empty($feedback->id)){{$feedback->id}}@else{{''}}@endif"/><br>
                        <input type="hidden" name="user_id"
                        value="{{Auth::user()->id}}"/><br>

                        <!--Nome-->
                        <div class="col-md-6 form-group">
                            <label class="form-label">Local</label><br>
                                <select name="local_id" class="form-select">
                                    @foreach ($locals as $item)
                                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <!--Email-->
                    </div>

                    <div class="row">
                        <!--Assunto-->
                        <div class="form-group mt-3">
                            <input type="number" min="1" max="5" name="nota" class="form-control" id="subject" placeholder="Nota de 1 a 5"
                            value="@if(!empty(old('nota'))){{old('nota')}}@elseif(!empty($feedback->nota)){{$feedback->nota}}@else{{''}}@endif"/><br>
                        </div>
                    </div>

                    <div class="row">
                        <!--Descrição-->
                        <div class="form-group mt-3">
                            <input type="text" name="avaliacao" class="form-control" rows="5" placeholder="Avaliação" style="text-align:center; height:100px;"
                            value="@if(!empty(old('avaliacao'))){{old('avaliacao')}}@elseif(!empty($feedback->avaliacao)){{$feedback->avaliacao}}@else{{''}}@endif"><br>
                        </div>
                    </div>

                    <!--Início Botões-->
                    <button class="btn btn-success" type="submit">
                        <i class="fa-solid fa-save"></i> Enviar
                    </button>
                    <a href="{{ route('feedback.index') }}" class="btn btn-primary">
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
