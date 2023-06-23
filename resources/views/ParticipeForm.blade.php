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

<main id="main">
<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Formulário de Local</h2>
        <p>Participe do Projeto</p>
    </div>

    <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
        @csrf
        @if (!empty($local->id))
            @method('PUT')
        @endif
        
        <!--Início Termos-->

        <!--<div id="problema" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">-->
        <div data-aos="fade-up">
            <h3>Termos de Uso</h3>
            <p>Este formulário tem a intenção de integrar pessoas com algum tipo de necessidade especial (PCD's, idosos, gestantes, etc) em locais públicos das ruas de Chapecó, também vale ressaltar que esse é um projeto em conjunto com o IFSC Câmpus Chapecó, feito na matéria de OI 4 e Tecnologia Assistivas no sétimo semestre do EMI.</p>
            <p>Com auxílio dos professores: ADALBERTO TEODOSIO TABALIPA, EDER FERRARI, EMY FRANCIELLI LUNARDI, FERNANDO ROSSETTO GALLEGO CAMPOS, FLAVIO FERNANDES, LEONARDO CAMILO VALENZA, LORRAYNE HEWELLEN CRISTINO RIBEIRO, MIGUEL DEBARBA e PAULO JOSE FURTADO.</p>
            <p>Realizado pelos alunos: BERNARDO AUGUSTO PICOLI, JOAO VITOR DE CARVALHO, LUIZ GUSTAVO PIUCO BAZZOTTI e MARIANA MATOSO GIELDA.</p>
            <p>É um projeto que condiz com um site chamado Guia Acessível que irá mostrar o quanto os lugares são acessíveis para cada tipo de necessidade na cidade de Chapecó, acessibilidade segundo a NBR 9050: 2015 define é "como a possibilidade de utilização segura e de forma mais autônoma possível de uma edificação, espaço, mobiliário ou serviço, ainda com a ausência de barreiras de modo a facilitar o acesso de pessoas portadoras de deficiências ou com menor mobilidade." e exatamente isso que queremos inspirar e auxíliar nos estabalecimentos de Chapecó.</p>
            </p>Respondendo esse formulário você e sua empresa vão: Autorizar o uso de dados fornecidos para utilização no site.</p>
            <label class="form-label">Assinale:</label><br>
            <input type="radio" name="contact" id="contact_acesso" value="acesso" required/>    <!--Cuidar para não conflitar id iguais-->
            <label for="contact_email">Eu concordo com a premissa do projeto e autorizo todas as suas diretrizes.</label>
        </div>
        <!--Fim Termos-->

        <!--Início Dados do Local-->
        <div data-aos="fade-up">
            <h3>Dados do Local</h3>
            <div class="row"> <!--ID-->
                <input type="hidden" name="id" value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($local->id)) {{ $local->id }} @else {{ '' }} @endif" /><br>
            </div>

            <div class="row">
                <div class="col-6"> <!--Nome, Descrição, Telefone e Coordenadas-->   
                    <div class="row">
                        <label class="form-label">Nome: </label><br>
                        <input type="text" class="form-control" name="nome" value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($local->nome)) {{ $local->nome }} @else {{ '' }} @endif" /><br>
                    </div>
                    <div class="row">
                        <label class="form-label">Descrição: </label><br>
                        <input type="text" class="form-control" name="descricao" value="@if (!empty(old('descricao'))) {{ old('descricao') }} @elseif(!empty($local->descricao)) {{ $local->descricao }} @else {{ '' }} @endif" /><br>
                    </div>
                    <div class="row">
                        <label class="form-label">Coordenadas: </label><br>
                        <input type="text" class="form-control" name="coordenada" value="@if (!empty(old('coordenada'))) {{ old('coordenada') }} @elseif(!empty($local->coordenada)) {{ $local->coordenada }} @else {{ '' }} @endif" /><br>
                    </div>
                    <div class="row">
                        <label class="form-label">Telefone: </label><br>
                        <input type="text" class="form-control" name="telefone" value="@if (!empty(old('telefone'))) {{ old('telefone') }} @elseif(!empty($local->telefone)) {{ $local->telefone }} @else {{ '' }} @endif" /><br>
                    </div>
                </div>

                <div class="col-6"> <!--Imagem-->
                @php
                        $nome_imagem = !empty($local->imagem) ? $local->imagem : 'sem_imagem.jpg';
                    @endphp
                    <div class="col-6"><br>
                        <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" width="300px" /> <!--tentar com widht:100% quando a imagem estiver funcionando-->
                    <br><br>
                        <input type="file" class="form-control" name="imagem" /><br>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!--Fim Dados do Local-->

        <!--Início Acessibilidade-->
        <!--<div class="problema" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">-->
        <div data-aos="fade-up">
            <!--Fonte de Pesquisa-->
            <h3>Avaliação de acessibilidade:</h3>
            <p>A partir daqui, você e/ou sua empresa vão responder uma série de perguntas sobre a acessibilidade do seu estabelecimento segundo as leis do Estado e município, o códigos de obra, plano diretor e as normas da ABNT.</p>
            <ul>
                <li>
                    <a href="http://acessibilidade.unb.br/images/PDF/NORMA_NBR-9050.pdf">Normas da ABNT</a>
                </li>
                <li>
                    <a href="https://leismunicipais.com.br/codigo-de-obras-chapeco-sc">Código de obras</a>
                </li>
                <li>
                    <a href="https://leismunicipais.com.br/plano-diretor-chapeco-sc">Plano diretor</a>
                </li>
            </ul>
        </div>

        <!--Questionário-->
        <!--<div class="problema" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">-->
        <div data-aos="fade-up">
            <h6>A Lei no 11.126, Art. 1o, diz que a pessoa com deficiência visual usuária de cão-guia tem o direito de ingressar e permanecer com o animal em todos os locais públicos ou privados de uso coletivo.  Assinale o que condiz com seu estabelecimento. </h6>
            <label class="form-label">Assinale:</label>
            <input type="radio" name="contact" id="contact_acesso" value="0"/>
            <label for="contact_email">Meu estabelecimento não tem acesso a cão-guia.</label><br>
            <input type="radio" name="contact" id="contact_acesso" value="1"/> <!-- 1!=2?? -->
            <label for="contact_email">Meu estabelecimento tem acesso a cão-guia.</label><br>
            <input type="radio" name="contact" id="contact_acesso" value="2"/> <!-- 1!=2?? -->
            <label for="contact_email">Meu estabelecimento condiz com a norma 10.3.5 da ABNT, onde o espaço para o cão-guia - Deve ser previsto um espaço para cão-guia junto de um assento preferencial, com dimensões de 0,70 m de comprimento, 0,40 m de profundidade e 0,30 m de altura.</label><br> <!--Trocando tag Label por P arruma o ponto e o texto em linhas diferentes, mas não sei se é adequado-->
        </div> <br>
        <!--Fim Acessibilidade-->

        <!-- Exemplo do Prof para adicionar acessibilidade como vetor json; tenho que ver disso aqui como fazer-->
            <!--
            <div id ="adicionaJson">
                <label><strong>Select Category :</strong></label><br/>
                <select class="form-control" name="acessibilidade[]" multiple="">
                <option value="php">PHP</option>
                <option value="react">React</option>
                <option value="jquery">JQuery</option>
                <option value="javascript">Javascript</option>
                <option value="angular">Angular</option>
                <option value="vue">Vue</option>
                </select>
            </div>
            -->

        <!--Início Botões-->
        <button class="btn btn-success row-3" type="submit">
            <i class="fa-solid fa-save"></i> Enviar
        </button>
        <a class="btn btn-primary row-3" href="{{ route('local.index') }}">
            <i class="fa-solid fa-arrow-left"></i> Voltar
        </a><br>
        <!--Fim Botões-->

    </form>
</div>
</main>
@endsection
