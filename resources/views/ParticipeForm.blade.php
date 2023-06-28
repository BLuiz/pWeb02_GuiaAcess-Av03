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

<div class="container" style="margin-top: 8rem">
    <div class="section-title section-title1" data-aos="fade-up">
        <h2>Formulário de Local</h2>
        <p>Participe do Projeto</p>
    </div>

    <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
        @csrf
        @if (!empty($local->id))
            @method('PUT')
        @endif

        <!--Início Termos-->

        <div data-aos="fade-up">
            <h2>Termos de Uso</h2>
            <p>Este formulário tem a intenção de integrar pessoas com algum tipo de necessidade especial (PCD's, idosos, gestantes, etc) em locais públicos das ruas de Chapecó, também vale ressaltar que esse é um projeto em conjunto com o IFSC Câmpus Chapecó, feito na matéria de OI 4 e Tecnologia Assistivas no sétimo semestre do EMI.</p>
            <p>Com auxílio dos professores: ADALBERTO TEODOSIO TABALIPA, EDER FERRARI, EMY FRANCIELLI LUNARDI, FERNANDO ROSSETTO GALLEGO CAMPOS, FLAVIO FERNANDES, LEONARDO CAMILO VALENZA, LORRAYNE HEWELLEN CRISTINO RIBEIRO, MIGUEL DEBARBA e PAULO JOSE FURTADO.</p>
            <p>Realizado pelos alunos: BERNARDO AUGUSTO PICOLI, JOAO VITOR DE CARVALHO, LUIZ GUSTAVO PIUCO BAZZOTTI e MARIANA MATOSO GIELDA.</p>
            <p>É um projeto que condiz com um site chamado Guia Acessível que irá mostrar o quanto os lugares são acessíveis para cada tipo de necessidade na cidade de Chapecó, acessibilidade segundo a NBR 9050: 2015 define é "como a possibilidade de utilização segura e de forma mais autônoma possível de uma edificação, espaço, mobiliário ou serviço, ainda com a ausência de barreiras de modo a facilitar o acesso de pessoas portadoras de deficiências ou com menor mobilidade." e exatamente isso que queremos inspirar e auxíliar nos estabalecimentos de Chapecó.</p>
            </p>Respondendo esse formulário você e sua empresa vão: Autorizar o uso de dados fornecidos para utilização no site.</p>
            <div class="contact-part">
                <div class="info-part">
                    <h4>Assinale:</h4>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="autorizacao" value="acesso" required/>
                <label class="form-check-label">Eu concordo com a premissa do projeto e autorizo todas as suas diretrizes.</label>
            </div>
        </div>
        <!--Fim Termos-->

        <br/>
        <hr data-aos="fade-up">
        <br/>

        <!--Início Dados do Local-->
        <div data-aos="fade-up">
            <br/>
            <div class="section-title section-title1" data-aos="fade-up">
                <h2>Nos conte mais sobre</h2>
                <p>Dados do Local</p>
            </div>

            <div> <!--ID-->
                <input type="hidden" name="id" value=
                "@if(!empty(old('id'))){{ old('id') }}@elseif(!empty($local->id)){{ $local->id }}@else {{ '' }}@endif"/>
            </div>

            <div class="row">
                <div class="col-6"> <!--Nome, Descrição, Telefone e Coordenadas-->
                    <div class="row p-3">
                        <label class="form-label">Nome: </label><br>
                        <input type="text" class="form-control" name="nome" placeholder="Parque das Palmeiras" value=
                        "@if(!empty(old('nome'))){{old('nome')}}@elseif(!empty($local->nome)){{$local->nome}}@else{{''}}@endif"/><br>
                    </div>
                    <div class="row p-3">
                        <label class="form-label">Descrição: </label><br>
                        <input type="text" class="form-control" name="descricao" placeholder="Local arborizado, com diversos assentos espalhados e uma ótima vista para o pôr do sol." value=
                        "@if(!empty(old('descricao'))){{old('descricao')}}@elseif(!empty($local->descricao)){{$local->descricao}}@else{{''}}@endif"/><br>
                    </div>
                    <div class="row p-3">
                        <label class="form-label">Coordenadas: </label><br>
                        <input type="text" class="form-control" name="coordenada" placeholder="15°47' Sul; 48°8' Oeste" value=
                        "@if(!empty(old('coordenada'))){{old('coordenada')}}@elseif(!empty($local->coordenada)){{$local->coordenada}}@else{{''}}@endif"/><br>
                    </div>
                    <div class="row p-3">
                        <label class="form-label">Telefone: </label><br>
                        <input type="text" class="form-control" name="telefone" placeholder="(49) 99999-9999" value=
                        "@if(!empty(old('telefone'))){{old('telefone')}}@elseif(!empty($local->telefone)){{$local->telefone}}@else{{''}}@endif"/><br>
                    </div>
                </div>

                <div class="col-6"> <!--Imagem-->
                    @php
                        $nome_imagem = !empty($local->imagem) ? $local->imagem : 'sem_imagem.jpg';
                    @endphp

                    <div class="row p-3">
                        <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" />
                    </div><br>
                    <div class="row p-3">
                        <input type="file" class="form-control" name="imagem" /><br>
                    </div>
                </div>
            </div>
        </div><br><hr data-aos="fade-up"><br>
        <!--Fim Dados do Local-->

        <!--Início Acessibilidade-->

        <div data-aos="fade-up">
            <!--Fonte de Pesquisa-->
            <div class="section-title section-title1" data-aos="fade-up">
                <h2>Normas da ABNT</h2>
                <p>Avaliação de acessibilidade</p>
            </div>
            <h5>A partir daqui, você e/ou sua empresa vão responder uma série de perguntas sobre a acessibilidade do seu estabelecimento segundo as leis do Estado e município, o códigos de obra, plano diretor e as normas da ABNT.</h5>
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

        <br>
        <hr data-aos="fade-up">
        <br>

        <!--Questionário-->
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="cor-fonte">
                    <h4><b>Cão-guia</b></h4>
                </div>
                <h6>A Lei no 11.126, Art. 1o, diz que a pessoa com deficiência visual usuária de cão-guia tem o direito de ingressar e permanecer com o animal em todos os locais públicos ou privados de uso coletivo.  Assinale o que condiz com seu estabelecimento.</h6><br>
                <br>
                <div class="contact-part">
                    <div class="info-part">
                        <h4>Assinale:</h4>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="caoGuia" value="iCaoGuia" checked/>
                    <label class="form-check-label">Meu estabelecimento não tem acesso a cão-guia ou tem mas não segue nenhuma norma.</label>
                    <br>
                    <input class="form-check-input" type="radio" name="caoGuia" value="aCaoGuia" />
                    <label class="form-check-label">Meu estabelecimento tem acesso a cão-guia e segue as normas.</label>
                    <br>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="cor-fonte">
                    <h4><b>Lavabo</b></h4>
                </div>
                <h6>A  Lei no 11.126, Art. 11o , Inciso IV, diz que os edifícios deverão dispor, pelo menos, de um banheiro acessível, segundo as seguintes normas da ABNT. Assinale as normas que são cumpridas pelo seu estabelecimento.
                    <br><br><p>Normas:</p>
                    <p>3.1.12 banheiro cômodo que dispõe de chuveiro, banheira, bacia sanitária, lavatório, espelho e demais acessórios;</p>
                    <p>5.6.4.1 Alarme de emergência para sanitário Deve ser instalado dispositivo de alarme de emergência próximo à bacia, no boxe do chuveiro e na banheira para acionamento por uma pessoa sentada ou em caso de queda nos sanitários, banheiros e vestiários acessíveis. Recomenda-se a instalação de dispositivos adicionais em posições estratégicas, como lavatórios e portas, entre outros. A altura de instalação deve ser de 40 cm do piso;</p>
                    <p>7.1 Os sanitários, banheiros e vestiários acessíveis devem obedecer aos parâmetros desta Norma quanto às quantidades mínimas necessárias, localização, dimensões dos boxes, posicionamento e características das peças, acessórios barras de apoio, comandos e características de pisos e desnível. Os espaços, peças e acessórios devem atender aos conceitos de acessibilidade, como as áreas mínimas de circulação, de transferência e de aproximação, alcance manual, empunhadura e ângulo visual;</p>
                    <p>7.9 Sanitários e banheiros com trocador para criança e adulto – Sanitário familiar Em edifícios de uso público ou coletivo, dependendo da sua especifcidade ou natureza do seu uso, recomenda-se ter sanitários ou banheiros familiar com entrada independente, providos de boxes com bacias sanitárias para adulto (7.7.2.1) e outro com bacia infantil, além de boxe com superfície para troca de roupas na posição deitada, com dimensões mínimas de 0,70 m de largura por 1,80 m de comprimento e 0,46 m de altura, devendo suportar no mínimo 150 kg, e providos de barras de apoio, conforme 7.14.1;</p>
                    <p>7.12.1 Boxe para chuveiro e ducha Banheiros acessíveis e vestiários com banheiros conjugados devem prever área de manobra para rotação de 360° para circulação de pessoa em cadeira de rodas.</p>
                </h6>
                <br>
                <div class="contact-part">
                    <div class="info-part">
                        <h4>Assinale:</h4>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lavabo" value="iLavabo" checked/>
                    <label class="form-check-label">Meu estabelecimento não tem banheiro acessível ou tem mas não segue nenhuma norma.</label>
                    <br>
                    <input class="form-check-input" type="radio" name="lavabo" value="aLavabo" />
                    <label class="form-check-label">Meu estabelecimento tem banheiro acessível e segue as normas.</label>
                    <br>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="col-5" style="border-right: 2px solid lightgrey;">
                    <div class="cor-fonte">
                        <h4><b>Prioridade</b></h4>
                    </div>
                    <h6>Meu estabelecimento segue a lei nº 13.146, Art. 9º que diz que a pessoa com deficiência tem direito a receber atendimento prioritário, sobretudo com a finalidade de:
                        <br><br><p>Sugues as restrições de:</p>
                        <p>I - proteção e socorro em quaisquer circunstâncias;</p>
                        <p>II - atendimento em todas as instituições e serviços de atendimento ao público;</p>
                        <p>III - disponibilização de recursos, tanto humanos quanto tecnológicos, que garantam atendimento em igualdade de condições com as demais pessoas.</p>
                        <p>Seu estabelecimente tem uma pessoa preparada para atender uma pessoa com deficiência?</p>
                    </h6>
                    <br>
                    <div class="contact-part">
                        <div class="info-part">
                            <h4>Assinale:</h4>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="prioridade" value="iPrioridade" checked/>
                        <label class="form-check-label">Meu estabelecimento não tem atendimento prioritário ou tem mas não segue nenhuma norma.</label>
                        <br>
                        <input class="form-check-input" type="radio" name="prioridade" value="aPrioridade" />
                        <label class="form-check-label">Meu estabelecimento tem atendimento prioritário e segue as normas.</label>
                        <br>
                    </div>
                </div>

                <div class="col-7">
                    <div class="cor-fonte">
                        <h4><b>Palco</b></h4>
                    </div>
                    <h6>Seu estabelecimento tem palco?
                        <br><br><p>E segue com as normas abaixo:</p>
                        <p>10.4.5 O local no palco destinado a intérprete de Libras deve atender ao descrito.</p>
                        <p>10.3.2.3 A localização dos espaços deve ser calculada traçando-se um ângulo visual de 30° a partir do limite superior da boca de cena até a linha do horizonte visual (L.H.), com a altura de 1,15 m do piso. A altura do piso do palco deve ser inferior à L.H. visual, com altura de 1,15 m do piso da localização do espaço para P.C.R. e assentos para P.M.R.</p>
                        <p>10.3.2.4 Quando existir anteparo em frente aos espaços para P.C.R., sua altura e distância não podem bloquear o ângulo visual de 30°, medido a partir da linha visual padrão, com altura de 1,15 m do piso até o limite inferior da tela ou local do palco onde a atividade é desenvolvida, conforme Figura 139. Quando, por questões de segurança, o anteparo obstruir o ângulo visual, este deve ser executado de forma a permitir a visualização.</p>
                        <p>10.4.2 Uma rota acessível deve interligar os espaços para P.C.R. ao palco e aos bastidores.</p>
                    </h6>
                    <br>
                    <div class="contact-part">
                        <div class="info-part">
                            <h4>Assinale:</h4>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="palco" value="iPalco" checked/>
                        <label class="form-check-label">Meu estabelecimento não tem palco ou tem mas não segue nenhuma norma.</label>
                        <br>
                        <input class="form-check-input" type="radio" name="palco" value="aPalco" />
                        <label class="form-check-label">Meu estabelecimento tem palco e segue as normas.</label>
                        <br>
                    </div>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="cor-fonte">
                    <h4><b>Balcão</b></h4>
                </div>
                <h6>Seu estabelecimento tem balcão, bilheterias e balcões de informação?
                    <br><br><p>E ele segue essas normas:</p>
                    <p>9.2.1.1 Balcões de atendimento acessíveis devem ser facilmente identifcados e localizados</p>
                    <p>9.2.1.2 Balcões de atendimento acessíveis devem garantir um M.R. posicionado para a aproximação frontal. Devem garantir ainda circulação adjacente que permita giro de 180° à P.C.R.</p>
                    <p>9.2.1.3 O projeto de iluminação deve assegurar que a face do atendente seja uniformemente iluminada.</p>
                    <p>9.2.1.4 Balcões de atendimento acessíveis devem possuir superfície com largura mínima de 0,90 m e altura entre 0,75 m a 0,85 m do piso acabado, assegurando-se largura livre mínima sob a superfície de 0,80 m.</p>
                    <p>9.2.1.5 Devem ser asseguradas altura livre sob o tampo de no mínimo 0,73 m e profundidade livre mínima de 0,30 m, de modo que a P.C.R. tenha a possibilidade de avançar sob o balcão.</p>
                    <p>9.2.1.6 Quando houver um conjunto com número superior a seis postos de atendimento, deve ser previsto um posto acessível para atendente em cadeira de rodas (P.C.R.), que apresente áreas para aproximação frontal e circulação adjacente, que permita giro de 180°.</p>
                    <p>9.2.1.7 Em balcões de atendimento e de caixa bancário localizados em ambientes ruidosos, em locais de grande fuxo de pessoas (rodoviárias, aeroportos) ou nos casos de separação do atendente com o usuário por uma divisória de segurança, deve ser previsto sistema de amplifcação de voz.</p>
                    <p>9.2.2.1 Caixas de pagamento devem ser facilmente identifcadas e localizadas em rotas acessíveis.</p>
                    <p>9.3.1.3 As mesas ou superfícies de trabalho acessíveis devem possuir tampo com largura mínima de 0,90 m e altura entre 0,75 m e 0,85 m do piso acabado, assegurando-se largura livre mínima sob a superfície de 0,80 m.</p>
                    <p>9.2.3.5 Deve ser assegurada altura livre sob a superfície de no mínimo 0,73 m, com profundidade livre mínima de 0,30 m para permitir a aproximação frontal ou lateral.</p>
                    <p>9.3.1.4 Deve ser assegurada altura livre sob o tampo de no mínimo 0,73 m, com profundidade livre mínima de 0,50 m, de modo que a P.C.R. tenha a possibilidade de avançar sob a mesa ou superfície.</p>
                </h6>
                <br>
                <div class="contact-part">
                    <div class="info-part">
                        <h4>Assinale:</h4>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="balcao" value="iBalcao" checked/>
                    <label class="form-check-label">Meu estabelecimento não tem balcão, bilheterias e balcões de informação ou tem mas não segue nenhuma norma.</label>
                    <br>
                    <input class="form-check-input" type="radio" name="balcao" value="aBalcao" />
                    <label class="form-check-label">Meu estabelecimento tem balcão, bilheterias e balcões de informação e segue as normas.</label>
                    <br>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="col-6" style="border-right: 2px solid lightgrey;">
                    <div class="cor-fonte">
                        <h4><b>Elevador</b></h4>
                    </div>
                    <h6>Segundo o código de obras Art. 36 Será obrigatória a instalação de, no mínimo, 01 (um) elevador nas edificações, nas seguintes condições:
                        <br><br><p>Seu estabelecimento segue as condições descritas abaixo sobre o elevador:</p>
                        <p>I - nas edificações de até quatro pavimentos, de acordo com o Anexo I desta Lei Complementar, é obrigatório o uso de rampa, elevador ou plataforma elevatória, conforme normas técnicas de acessibilidade da ABNT;</p>
                        <p>II - nas Edificações de mais de quatro pavimentos, ou cuja distância vertical do piso do pavimento de menor cota ao piso do pavimento de maior cota, for superior a 11, 00 metros.</p>
                        <p>§ 1º Nas edificações de uso público será garantido o acesso em todos os pavimentos às pessoas com necessidades especiais através de rampas e/ou elevador a partir do 1º pavimento - Conforme NBR 9050 e NBR 13.994;</p>
                        <p>§ 2º Nas edificações de uso coletivo, conforme regulamentação do Decreto Federal 5.296/2004 e Anexo I desta Lei Complementar, será garantido o acesso em todos os pavimentos às pessoas com deficiência física a partir do primeiro pavimento de acordo com a NBR 9050 e NBR 13.944;</p>
                        <p>§ 4º No caso da instalação de elevadores novos ou da troca dos já existentes, qualquer que seja o número de elevadores da edificação de uso público ou de uso coletivo, pelo menos um deles terá cabine que permita acesso e movimentação cômoda de pessoa portadora de deficiência ou com mobilidade reduzida, de acordo com o que especifica as normas técnicas de acessibilidade da ABNT;</p>
                        <p>§ 5º Junto às botoeiras externas do elevador, deverá estar identificado, em braile, em qual andar da edificação a pessoa se encontra</p>
                    </h6>
                    <br>
                    <div class="contact-part">
                        <div class="info-part">
                            <h4>Assinale:</h4>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="elevador" value="iElevador" checked/>
                        <label class="form-check-label">Meu estabelecimento não tem elevador ou tem mas não segue nenhuma norma.</label>
                        <br>
                        <input class="form-check-input" type="radio" name="elevador" value="aElevador" />
                        <label class="form-check-label">Meu estabelecimento tem elevador e segue as normas.</label>
                        <br>
                    </div>
                </div>

                <div class="col-6">
                    <div class="cor-fonte">
                        <h4><b>Refeitório</b></h4>
                    </div>
                    <h6>Você tem um  bar, café, restaurante, lanchonete ou similares?
                        <br><br><p>Seu estabelecimento segue as condições descritas abaixo sobre o elevador:</p>
                        <p>Art. 86 III - ter instalações sanitárias, separadas por sexo, conforme tabela específica, e que permita o acesso às pessoas com deficiência física (PCR), conforme prevê as normas da NBR 9050, incluindo nas instalações sanitárias lavatórios, bebedouros e vasos;</p>
                        <p>Art. 86 V - os estabelecimentos previstos no caput deste artigo deverão observar o acesso à pessoas com deficiência física (PCR), sendo tais acessos construídos em conformidade com o que prevê a NBR 9050 da A.B.N.T.</p>
                        <p>Art. 87 do Código de obras A construção ou reforma de bares, cafés, restaurantes, lanchonetes e similares, deve atender aos preceitos da acessibilidade na interligação de todas as partes de uso comum ou abertas ao público, conforme os padrões das normas técnicas de acessibilidade da ABNT.</p>
                        <p>ABNT 10.8.1 Os restaurantes, refeitórios e bares devem possuir pelo menos 5 % do total de mesas;</p>
                        <p>ABNT 10.8.1 Os restaurantes, refeitórios e bares devem possuir pelo menos 5 % do total de mesas, com no mínimo uma, acessíveis à P.C.R. Estas mesas devem ser interligadas a uma rota acessível e atender ao descrito em 9.3.2. A rota acessível deve incluir o acesso ao sanitário acessível.</p>
                        <p>ABNT 10.8.2 As mesas devem ser distribuídas de forma a estar integradas às demais e em locais onde sejam oferecidos todos os serviços e comodidades disponíveis no estabelecimento.</p>
                        <p>ABNT 10.8.2.3 Quando o local possuir cardápio, ao menos um exemplar deve estar em Braille e em texto com caracteres ampliados.</p>
                    </h6>
                    <br>
                    <div class="contact-part">
                        <div class="info-part">
                            <h4>Assinale:</h4>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="refeitorio" value="iRefeitorio" checked/>
                        <label class="form-check-label">Meu estabelecimento não é um bar, café, restaurante, lanchonete ou similares ou é mas não segue nenhuma norma.</label>
                        <br>
                        <input class="form-check-input" type="radio" name="refeitorio" value="aRefeitorio" />
                        <label class="form-check-label">Meu estabelecimento é um bar, café, restaurante, lanchonete ou similares e segue as normas.</label>
                        <br>
                    </div>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="cor-fonte">
                    <h4><b>Sinalização</b></h4>
                </div>
                <h6>Sobre o seu estabelecimento..
                    <br><br><p>Seu estabelecimento segue nas condições descritas no código de obras de Chapecó:</p>
                    <p>Art. 43 Nas edificações de uso público ou de uso coletivo é obrigatória a existência de sinalização visual e tátil para orientação de pessoas portadoras de deficiência auditiva e visual, em conformidade com as normas técnicas de acessibilidade da ABNT.</p>
                </h6>
                <br>
                <div class="contact-part">
                    <div class="info-part">
                        <h4>Assinale:</h4>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sinalizacao" value="iSinalizacao" checked/>
                    <label class="form-check-label">Meu estabelecimento não tem sinalização visual e tátil ou tem mas não segue nenhuma norma.</label>
                    <br>
                    <input class="form-check-input" type="radio" name="sinalizacao" value="aSinalizacao" />
                    <label class="form-check-label">Meu estabelecimento tem sinalização visual e tátil e segue as normas.</label>
                    <br>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="col-7" style="border-right: 2px solid lightgrey;">
                    <div class="cor-fonte">
                        <h4><b>Rampa</b></h4>
                    </div>
                    <h6>Segundo a lei nº 7.853, de 1989 Art 2º - Só é permitida a colocação do símbolo em edificações que ofereçam condições de acesso natural ou por meio de rampas construídas com as especificações contidas nesta Lei;
                        <br><br><p>As rampas do seu estabelecimento, seguem essas normas:</p>
                        <p>I - serem construídas de material resistente e incombustível;</p>
                        <p>II - ter piso revestido em material adequado a sua finalidade;</p>
                        <p>III - as rampas de acesso deverão ser construídas dentro dos limites do lote;</p>
                        <p>IV - declividade máxima será de 8,33 % (1:12), considerando patamares de descanso e distâncias máximas a serem percorridas, conforme especificações da NBR 9050, quando para acesso de pedestres e 30% para acesso de veículos;</p>
                        <p>V - as rampas para pedestres deverão ter balaustrada ou corrimão com altura entre de 0,80 a 0,92m e que atenda a NBR 9050;</p>
                        <p>VI - quando destinadas ao acesso de veículos, as rampas em linha reta deverão ter largura mínima de 3,00 m e, quando em curva o raio não poderá ser menor que 5,00 m do eixo da mesma.</p>
                    </h6>
                    <br>
                    <div class="contact-part">
                        <div class="info-part">
                            <h4>Assinale:</h4>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rampa" value="iRampa" checked/>
                        <label class="form-check-label">Meu estabelecimento não tem rampa ou tem mas não segue nenhuma norma.</label>
                        <br>
                        <input class="form-check-input" type="radio" name="rampa" value="aRampa" />
                        <label class="form-check-label">Meu estabelecimento tem rampa e segue as normas.</label>
                        <br>
                    </div>
                </div>

                <div class="col-5">
                    <div class="cor-fonte">
                        <h4><b>Escada</b></h4>
                    </div>
                    <h6>Se seu estabelecimento tem escada:
                        <br><br><p>Assinale se seu estabelecimento segue nas condições descritas no código de obras de Chapecó sobre as escadas</p>
                        <p>Art. 31 I - largura dos degraus entre 28 e 32cm, e altura entre 16 e 18 cm, em conformidade com a fórmula de Blondel (63 = (2h+b) = 64) em centímetros;</p>
                        <p>Art. 31 II - lance máximo, sem patamar, de 16 degraus;</p>
                        <p>Art. 31 IV - nos trechos circulares em leque ou em caracol das escadas, os pisos dos degraus deverão ter profundidade mínima de 0,06 m, nos bordos internos e 0,25 m no centro do vão;</p>
                        <p>Art. 31 V - ter balaustrada ou corrimão fixado a altura entre 0,80 a 0,92cm e que atenda à NBR 9050 da ABNT;</p>
                    </h6>
                    <br>
                    <div class="contact-part">
                        <div class="info-part">
                            <h4>Assinale:</h4>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escada" value="iEscada" checked/>
                        <label class="form-check-label">Meu estabelecimento não tem escadas ou tem mas não segue nenhuma norma.</label>
                        <br>
                        <input class="form-check-input" type="radio" name="escada" value="aEscada" />
                        <label class="form-check-label">Meu estabelecimento tem escadas e segue as normas.</label>
                        <br>
                    </div>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row" data-aos="fade-up">
                <div class="cor-fonte">
                    <h4><b>Apoiadores</b></h4>
                </div>
                <h6>Se seu estabelecimento tem maçanetas, barras antipânico e puxadores:
                    <br><br><p>Assinale se seu estabelecimento segue nas condições descritas nas normas da ABNT referente ao palco</p>
                    <p>4.6.6.1 As maçanetas devem preferencialmente ser do tipo alavanca, possuir pelo menos 100 mm de comprimento e acabamento sem arestas e recurvado na extremidade, apresentando uma distância mínima de 40 mm da superfície da porta. Devem ser instaladas a uma altura que pode variar entre 0,80 m e 1,10 m do piso acabado</p>
                    <p>4.6.6.2 Os puxadores verticais para portas devem ter diâmetro entre 25 mm e 45 mm, com afastamento de no mínimo 40 mm entre o puxador e a superfície da porta. O puxador vertical deve ter comprimento mínimo de 0,30 m. Devem ser instalados a uma altura que pode variar entre 0,80 m e 1,10 m do piso acabado</p>
                    <p>4.6.6.3 Os puxadores horizontais para portas devem ter diâmetro entre 25 mm e 45 mm, com afastamento de no mínimo 40 mm. Devem ser instalados a uma altura que pode variar entre 0,80 m e 1,10 m do piso acabado</p>
                    <p>4.6.6.4 As barras antipânico devem ser apropriadas ao tipo de porta em que são instaladas e devem atender integralmente ao disposto na ABNT NBR 11785. Se instaladas em portas corta-fogo, devem apresentar tempo requerido de resistência ao fogo compatível com a resistência ao fogo destas portas. Devem ser instaladas a uma altura de 0,90 m do piso acabado.</p>
                </h6>
                <br>
                <div class="contact-part">
                    <div class="info-part">
                        <h4>Assinale:</h4>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="apoiador" value="iApoiador" checked/>
                    <label class="form-check-label">Meu estabelecimento não tem maçanetas, barras antipânico e puxadores ou tem mas não segue nenhuma norma.</label>
                    <br>
                    <input class="form-check-input" type="radio" name="apoiador" value="aApoiador" />
                    <label class="form-check-label">Meu estabelecimento tem maçanetas, barras antipânico e puxadores e segue as normas.</label>
                    <br>
                </div>
            </div>

            <br>
            <hr data-aos="fade-up">
            <br>

            <div class="row p-3" data-aos="fade-up">
                <div class="info-part cor-fonte">
                    <h4><b>Descreva:</b></h4>
                </div>
                <label class="form-label">Seu estabelecimento tem mais acessibilidade do que a o código de obras e o plano diretor da cidade de Chapecó pedem? Se sim quais?</label><br>
                <!--<input type="text" class="form-control" name="descricao" value=
                "@if(!empty(old('descricao'))){{ old('descricao') }}@elseif(!empty($local->descricao)){{ $local->descricao }}@else {{ '' }}@endif"/><br>-->
                <textarea type="text" name="outro" class="form-control" rows="5" wrap="hard" placeholder="Mensagem"></textarea><br>
            </div>
            <!--Fim do Questionário-->
        </div>

        <br>
        <!--Fim Acessibilidade-->

        <!--Início Botões-->
        <div class="container">
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Enviar
            </button>
            <a class="btn btn-primary" href="{{ url('/local') }}">
                <i class="fa-solid fa-arrow-left"></i> Voltar
            </a>
        </div>
        <!--Fim Botões-->
        <br><br>
    </form>
</div>
@endsection
