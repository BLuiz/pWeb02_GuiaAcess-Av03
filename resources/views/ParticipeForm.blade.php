@extends('base.app')

@section('conteudo')
    @php
        if (!empty($local->id)) {
            $route = route('local.update', $local->id);
        } else {
            $route = route('local.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Participe')
<h1>Formulário da Empresa</h1>


<div class="col">
    <div class="row">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($local->id))
                @method('PUT')
            @endif

            <div id="problema" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                <h3>Formulário Estabelecimentos Guia Acessível</h3>
                <p>Este formulário tem a intenção de integrar pessoas com algum tipo de necessidade especial (PCD's, idosos, gestantes, etc) em locais públicos das ruas de Chapecó, também vale ressaltar que esse é um projeto em conjunto com o IFSC Câmpus Chapecó, feito na matéria de OI 4 e Tecnologia Assistivas no sétimo semestre do EMI.
                    Com auxílio dos professores: ADALBERTO TEODOSIO TABALIPA, EDER FERRARI, EMY FRANCIELLI LUNARDI, FERNANDO ROSSETTO GALLEGO CAMPOS, FLAVIO FERNANDES, LEONARDO CAMILO VALENZA, LORRAYNE HEWELLEN CRISTINO RIBEIRO, MIGUEL DEBARBA e PAULO JOSE FURTADO.
                    Realizado pelos alunos: BERNARDO AUGUSTO PICOLI, JOAO VITOR DE CARVALHO, LUIZ GUSTAVO PIUCO BAZZOTTI e MARIANA MATOSO GIELDA.
                    É um projeto que condiz com um site chamado Guia Acessível que irá mostrar o quanto os lugares são acessíveis para cada tipo de necessidade na cidade de Chapecó, acessibilidade segundo a NBR 9050: 2015 define é "como a possibilidade de utilização segura e de forma mais autônoma possível de uma edificação, espaço, mobiliário ou serviço, ainda com a ausência de barreiras de modo a facilitar o acesso de pessoas portadoras de deficiências ou com menor mobilidade." e exatamente isso que queremos inspirar e auxíliar nos estabalecimentos de Chapecó.
                    Respondendo esse formulário você e sua empresa vão:
                    Autorizar o uso do nome e informações da empresa para serem postas no site;
                    Autorizar o uso de fotos do estabelecimento para serem postas no site.</p>
            </div>

            <div id="problema" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                <h3>Responda os dados da empresa</h3>
            </div>
            <label class="form-label">Assinale:</label><br>

            <input type="radio" name="contact" id="contact_autorizo" value="autorizo" required/>
            <label for="contact_email">Eu concordo com a premissa do projeto e autoriza todas as suas diretrizes.</label>

            <input type="hidden" name="id"
            value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($local->id)) {{ $local->id }} @else {{ '' }} @endif" /><br>
        <div class="col-3">
            <label class="form-label">Nome da Empresa</label><br>
            <input type="text" class="form-control" name="nomeempresa"
                value="@if (!empty(old('nomeempresa'))) {{ old('nomeempresa') }} @elseif(!empty($local->nomeempresa)) {{ $local->nomeempresa }} @else {{ '' }} @endif" /><br>
        </div>
        <div class="col-3">
            <label class="form-label">Telefone da Empresa</label><br>
            <input type="text" class="form-control" name="telefoneempresa"
                value="@if (!empty(old('telefoneempresa'))) {{ old('telefoneempresa') }} @elseif(!empty($local->telefoneempresa)) {{ $local->telefoneempresa }} @else {{ '' }} @endif" /><br>
        </div>
        <div class="col-3">
            <label class="form-label">E-mail da Empresa</label><br>
            <input type="email" class="form-control" name="emailempresa"
                value="@if (!empty(old('emailempresa'))) {{ old('emailempresa') }} @elseif(!empty($local->emailempresa)) {{ $local->emailempresa }} @else {{ '' }} @endif" /><br>
        </div>
        
        @php
            $nome_imagem = !empty($local->imagem) ? $local->imagem : 'sem_imagem.jpg';
        @endphp
        <div class="col-6">
            <br>
            <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" width="300px" />
            <br><br>
            <input type="file" class="form-control" name="imagem" /><br>
        </div>
        <button class="btn btn-success" type="submit">
            <i class="fa-solid fa-save"></i> Salvar
        </button>

            <a href='{{ route('local.index') }}' class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                Voltar</a> <br><br>
        </form>
    </div>
</div>
</div>
@endsection
