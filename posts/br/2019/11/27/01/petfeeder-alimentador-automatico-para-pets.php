<html>
    <head>
        <?php
            include_once("../../../../../../init.php");       
            include_once($rootDirectory."/templates/head.php");  
            $str = file_get_contents("post.json");
            $post = json_decode($str, true);
        ?>

        <link rel="stylesheet" href="<?php echo($rootDirectory) ?>/assets/css/archive.css">
        <link rel="stylesheet" href="<?php echo($rootDirectory) ?>/assets/css/post.css">

        <script src="<?php echo($rootDirectory) ?>/assets/js/code-prettify/run_prettify.js"></script>

    </head>

    <?php include_once($rootDirectory."/widgets/navbar.php"); ?>

    <body>
        <div class="container-fluid">
            
            <!-- CABECALHO -->
            <div id="cabecalho" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content">
                        <div class="row mb-2">
                            <div class="col-12">
                                <img class="avatar-img" src="https://picsum.photos/1920/300">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <span class="title"><?php echo($post['title']) ?></span>
                                <hr>
                                <span class="text"><?php echo($post['subtitle']) ?></span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 date-archive">
                                <span><b><?php echo(getDateFromPostUrl(dirname($_SERVER[REQUEST_URI]))); ?></b></span>
                            </div>
                            <div class="col-8 badges">
                                <?php 
                                    foreach($post['badges'] as $b){
                                        echo("<span class=\"badge badge-dark\">".$b."</span>");
                                    } 
                                ?>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <!-- CORPO POST -->
            <div id="corpo-post" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content">
                        <div class="row">

                            <!-- TABLE OF CONTENTS -->
                            <div class="col-sm-2 all-titles">
                                <!-- SERA INJETADO VIA JAVASCRIPT -->
                                <!-- Cada .title sera lista aqui, organizar como id=section-1, id=section-2, ... -->
                            </div>

                            <!-- POST -->
                            
                            <div class="col-12 col-sm-10 post-article">
                                <article>
                                    <p class="text">Em resposta a este problema surge a oportunidade de fornecer um equipamento que seja 
                                    capaz de controlar e avaliar a alimentação dos animais domésticos, o qual é o objetivo deste trabalho</p>    

                                    <p id="section-1" class="title">Introdução</p>
                                    <hr>

                                    <p class="text">O ser humano sempre viveu rodeado de animais, adaptando-se a estes e vice-versa, consoante
                                         as suas necessidades. Atualmente e mais do que nunca, os animais de companhia têm exercido uma função 
                                         de extrema importância na sociedade, ajudando a preencher lacunas que a própria sociedade criou.</p>

                                    <p class="text">Pets em geral são como que uma terapia para problemas de solidão, por exemplo: as pessoas 
                                        idosas buscam alguém de quem possam cuidar e trocar afeto, já as pessoas residentes em casas agregam a 
                                        presença de um animal à segurança e se sentem mais seguras com um cão por perto, buscando a companhia 
                                        de animais de médio e grande porte. Pelo fato de ficarem mais tempo em suas residências, um animal de 
                                        estimação ajuda a preencher o tempo, fazendo companhia, além de dar e receber atenção.</p>

                                    <p class="text">Contudo há um problema em garantir uma alimentação adequada aos pets, ocasionado pela 
                                        indisponibilidade de tempo de seus criadores, gerando desde doenças por falta de nutrientes até mesmo 
                                        o óbito do animal. Por esses e outros motivos surgiu-se a ideia de desenvolver de um dispositivo 
                                        automático que auxilie os donos de pets a garantir a alimentação adequada para seus animais, através 
                                        de um alimentador automatizado onde o processo de alimentar o pet é feito em períodos de tempo e 
                                        quantidade de alimento estabelecidos pelo criador. Podendo ainda unir a estes quesitos a geração de 
                                        relatórios de frequência e quantidade de alimento ingerida.</p>

                                    <p id="section-2" class="title">Análise de propostas no mesmo seguimento</p>
                                    <hr>

                                    <p class="text">Buscou-se no mercado por equipamentos que atendessem às seguintes premissas:</p>

                                    <ul class="text">
                                        <li>Dispensar comida em horários programados, de forma automática</li>
                                        <li>Fácil manipulação, manutenção e higienização</li>
                                        <li>Com pesagem de alimento</li>
                                        <li>Transmissão de vídeo ao vivo</li>
                                        <li>Conexão remota para programação e/ou dispensa de comida</li>
                                    </ul>

                                    <p class="text">Não houve um equipamento que atendesse a todos os requisitos supracitados, 
                                        mas houveram alguns que chamaram a atenção, como:</p>

                                    <img class="post-img rounded mx-auto d-block" src="img/kit-comedouro.png" alt="Kit Comedouro">
                                    <p class="subtitle-item">Kit Comedouro</p>

                                    <p class="text">Neste caso, o equipamento não possui nenhum tipo de controle de dispensa de alimento, 
                                        não possui nenhuma inteligência, porém se mostra ser de fácil instalação, uso, manutenção e 
                                        higienização.</p>

                                    <img class="post-img rounded mx-auto d-block" src="img/alimentador-18l.png" alt="Alimentador 18l">
                                    <p class="subtitle-item">Alimentador 18l</p>

                                    <p class="text">Este dispositivo nada mais seria que um tambor de comida com um timer (de mercado) 
                                        acoplado, o qual permite a programação da alimentação, sendo de fácil instalação e uso.</p>
                                    
                                    <img class="post-img rounded mx-auto d-block" src="img/alimentador-digital.png" alt="Alimentador Digital">
                                    <p class="subtitle-item">Alimentador Digital</p>

                                    <p class="text">Alimentador digital automático sofisticado com todos os itens necessários citados,
                                         excluindo a pesagem do alimento.</p>

                                    <p class="text">Esta pesquisa possibilitou o melhor entendimento do mercado e levou a equipe a 
                                        discussão de qual seria a melhor forma de entregar esta experiência ao usuário. Por unanimidade, 
                                        a equipe optou por criar um design mecânico que fosse imprimível em qualquer impressora 3D e 
                                        utilizasse material de fácil aquisição no mercado para acabamento do dispositivo, tudo isso 
                                        seria entregue de forma digital para entusiastas que quisessem construir o dispositivo em 
                                        casa/ou peças impressas para aqueles com nem tanta curiosidade, ficando apenas como parte 
                                        comercializável (de fato) a eletrônica e o acesso ao aplicativo/portal.</p>

                                    <p id="section-3" class="title">Métodos e Ferramentas</p>
                                    <hr>

                                    <p class="text">A seguir a descrição do processo de criação do PetFeeder, alimentador automático para 
                                        pets.</p>

                                    <p class="header-lvl-2">Design Mecânico</p>

                                    <p class="text">Para a criação do alimentador, foi projetado com um design mecânico que 
                                    pudesse ser construído a partir de qualquer impressora 3D, que possa ser capaz de realizar a impressão de 
                                    todas as suas peças de fixação e que também o resto de seus componentes fossem encontrados facilmente no
                                    mercado.</p>

                                    <p class="text">O alimentador é constituído por 2 (dois) canos, 5 (cinco) elementos de fixação de 
                                        PVC, e 4 (quatro) peças de fixação impressas em impressora 3D.</p>

                                    <p class="text">Conta com balança acoplada ao dispenser de ração para rastrear a quantidade de comida 
                                        depositada. O protótipo possui um sensor de distância capaz de identificar se o nível de alimento 
                                        está alto ou baixo, possui um relógio para executar eventos agendados, conexão wireless e display 
                                        LCD para interação com usuário.</p>

                                    <p class="text">A forma básica da operação é através de um portal-web, onde é possível configurar os 
                                        horários para despejo de comida e também sua quantidade.</p>

                                    <p class="text">Localmente também é possível colocar comida através dos botões de acesso do dispositivo.</p>

                                    <img class="post-img rounded mx-auto d-block w-50" src="img/suporte-parede.png" alt="Suporte parede">
                                    <p class="subtitle-item">Suporte Parede</p>

                                    <img class="post-img rounded mx-auto d-block w-50" src="img/rosca-sem-fim.png" alt="Rosca sem fim">
                                    <p class="subtitle-item">Rosca sem fim</p>

                                    <img class="post-img rounded mx-auto d-block w-50" src="img/balanca.png" alt="Balança">
                                    <p class="subtitle-item">Balança</p>

                                    <p class="header-lvl-2">Componentes Eletrônicos</p>

                                    <p class="text">Os componentes eletrônicos a seguir constituem o PetFeeder:</p>
                                    <img class="post-img rounded mx-auto d-block" src="img/componentes-eletronicos.png" alt="Componentes eletrônicos">
                                    <p class="subtitle-item">Componentes eletrônicos</p>

                                    <ul class="text">
                                        <li><b>Arduino Uno:</b> responsável por controlar todos os outros componentes e também pela comunicação com o servidor.</li>
                                        <li><b>Display de cristal líquido:</b> pode exibir texto no formato 16 colunas x 2 linhas. Nele serão exibidas mensagens inerentes do processo do alimentador.</li>
                                        <li><b>Motor passo:</b> realiza o giro da rosca sem fim para ejetar comida.</li>
                                        <li><b>Modulo Wifi ESP01:</b> responsável pela conexão wireless com o Arduino, controlados por comandos AT.</li>
                                        <li><b>Conversor analógico digital de 24 bits:</b> transforma a tensão gerada pela célula de carga em dados digitais.</li>
                                        <li><b>Relógio tempo real:</b> para contagem de tempo, possui bateria externa para não perder dados ao ser desligado.</li>
                                        <li><b>Sensor Carga:</b> ao sofrer uma deformação ocasionada por um peso externo a célula de carga gera uma tensão proporcional ao peso, permitindo assim o arduino saber o quanto de comida tem no pote, por exemplo.</li>
                                        <li><b>Sensor Distância:</b> por ultrassom é capaz de medir distância entre dois pontos, proporcionando ao Arduino saber o quanto de comida tem no reservatório. </li>
                                        <li><b>Botões:</b> utilizados para interação local com o alimentador.</li>
                                    </ul>

                                    <p class="header-lvl-2">Topologia</p>

                                    <p class="text">O alimentador se reporta a um servidor dedicado, o qual arquiva informações relevantes e também pede ao alimentador que 
                                        execute alguns comandos, como por exemplo: colocar comida, alterar horário alimentação, etc. Por fim, os usuários podem interagir com 
                                        o alimentador remotamente através de um site ou localmente através dos botões do alimentador.</p>

                                    <img class="post-img rounded mx-auto d-block" src="img/topologia.png" alt="Topologia alimentador">
                                    <p class="subtitle-item">Topologia alimentador</p>

                                    <p class="header-lvl-2">Protocolo Comunicação</p>

                                    <p class="text">A comunicação entre alimentador e servidor é via sockets UDP (User Datagram Protocol) podendo ser criptografada ou não. 
                                        Tanto o programa que roda no servidor e o programa que roda no Arduino foram feitos em C++. A comunicação se faz da 
                                        seguinte maneira:</p>

                                    <img class="post-img rounded mx-auto d-block" src="img/protocolo-comunicacao.png" alt="Protocolo comunicação">
                                    <p class="subtitle-item">Protocolo comunicação</p>

                                    <p class="title">Comunicação Alimentador - Servidor</p>

                                    <p class="text">A cada 5 minutos o alimentador envia um PACKET REPORT ao servidor, o qual contém a estrutura pré-definida:</p>

<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
typedef struct{
    unsigned char iniciador; // Os pacotes sempre se iniciam com STX
    unsigned char modo; // 0: plaintext 1: criptografado
}TPacketInit;

typedef struct{
    char sign[10]; // Assinatura do pacote, conhecido pelo cliente e servidor
    unsigned char id; // Tipo do pacote sendo enviado
    unsigned long seq; // Sequencia do pacote
    unsigned char st; // Status do alimentador 0: OK, 1: em erro
    char sn[10]; // Numero de serie do alimentador
}TPacketID;

typedef struct{
    TPacketInit init;
    TPacketID pid;
    unsigned long uptime; // Tempo que alimentador esta ligado
    unsigned short nivel_alm; // Nivel de alimento disponivel
    unsigned short peso; // Peso do pote de comida
    char horario_alm[24]; // Horarios de alimentação, no maximo 4
    unsigned short qtde_alm; // Quantidade de alimento a ser colocado no evento
    unsigned short crc; // Bytes de validação do pacote
}TPacketReport;
</pre>
</div>

                                    <p class="text">Estes dados são gravados no banco de dados, na tabela incoming, sendo que para toda inserção é gerado um  
                                        timestamp no campo <b>datahora</b>.</p>                                  

<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
CREATE TABLE `incoming` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`token` INT(10) UNSIGNED NOT NULL,
	`datahora` DATETIME NOT NULL,
	`pid` INT(11) NOT NULL,
	`seq` INT(10) UNSIGNED NOT NULL,
	`st` INT(11) NOT NULL,
	`uptime` INT(10) UNSIGNED NOT NULL,
	`sn` VARCHAR(10) NOT NULL,
	`nivel_alm` INT(11) NOT NULL,
	`peso` INT(11) NOT NULL,
	`horario_alm` VARCHAR(23) NOT NULL,
	`qtde_alm` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);
</pre>
</div>

                                    <p class="text">Logo o servidor pesquisa na tabela outgoing, se há algum comando para ser retornado ao alimentador.</p>

<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
CREATE TABLE `outgoing` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`sn_device` VARCHAR(10) NOT NULL,
	`datahora_insert` DATETIME NOT NULL,
	`cmd` INT(11) NOT NULL,
	`valor` VARCHAR(30) NOT NULL,
	`datahora_realizado` DATETIME NULL DEFAULT NULL,
	`realizado` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `FK_SN_DEVICE` (`sn_device`),
	CONSTRAINT `FK_SN_DEVICE` FOREIGN KEY (`sn_device`) REFERENCES `device` (`sn`)
);
</pre>
</div>

                                    <p class="text">O servidor então retorna uma mensagem ao alimentador do tipo PACKET RESPONSE:</p>

<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
typedef struct{
	TPacketInit init;
	TPacketID pid;
	unsigned long int idCmd; // Chave primária da linha em que foi gerado o comando no banco de dados
	int cmd; // Comando a ser executado
	char valor[30]; // Valor do comando
	unsigned short crc; // Bytes de validação do pacote
}TPacketResponse;
</pre>
</div>

                                    <p class="text">O alimentador recebendo este pacote, o trata e realiza ou não o comando. Então 
                                        retorna ao servidor um PACKET CMD RESPONSE, o qual levará as informações inerentes do 
                                        comando recebido.</p>

<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
typedef struct{
	TPacketInit init;
	TPacketID pid;
	unsigned long int idCmd; // Rertorna a chave primaria recebida
	int cmd; // Retorna o comando recebido
	int cmdStatus; // 0: Comando executado 1: Comando não executado
	unsigned short crc; // Bytes de validação do pacote
}TPacketCmdResponse;
</pre>
</div>

                                    <p class="text">O servidor recebendo este pacote, atualiza a tabela outgoing, gerando um timestamp para esta ação.</p>

                                    <p class="header-lvl-3">Registro Usuário</p>

                                    <p class="text">Para se registrar no site o usuário deverá possuir um SERIAL NUMBER válido de um alimentador que não 
                                        tenha sido cadastrado. Estes dados são guardados na tabela <b>devices</b>:</p>

<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
CREATE TABLE `device` (
	`sn` VARCHAR(10) NOT NULL,
	`id_usuario` INT(11) NOT NULL,
	`datahora` DATETIME NOT NULL,
	PRIMARY KEY (`sn`)
);
</pre>
</div>

                                    <p class="header-lvl-3">Usuário solicita informações do alimentador</p>

                                    <p class="text">Ao logar no site, o usuário é direcionado para um dashboard, onde terá diversas informações sobre o 
                                        alimentador. Estas informações são provenientes da tabela incoming, sempre solicitando o último registro do banco
                                         de dados do seu alimentador.</p>

                                    <p class="header-lvl-3">Usuário envia informações ao alimentador</p>

                                    <p class="text">O usuário, percebendo a necessidade, pode pedir para que o alimentador execute 2 tipos de ação: 
                                        colocar comida e alterar horário alimentação. Estes comandos são gravados na tabela outgoing, que periodicamente 
                                        é inspecionada pelo servidor e faz a transmissão ao alimentador.</p>

                                    <p class="header-lvl-2">Síntese do Código Arduino</p>

                                    <p class="text">O código do alimentador foi projetado para ter espaços de tempos pré-definidos para executar ações rotineiras:</p>

                                    <ul class="text">
                                        <li>A cada 10ms: faz a leitura dos botões, atualiza valor quantidade ração disponível, atualiza balança e monta menus localmente quando necessário</li>
                                        <li>A cada 1s: atualiza no display porcentagem ração disponível e peso balança</li>
                                        <li>A cada 1min: atualiza horário no display e verifica se está no horário para colocar comida</li>
                                        <li>A cada 5min: se reporta ao servidor e verifica se possui comandos a serem executados</li>
                                    </ul>

                                    <p class="text">Os horários de alimentação, quantidade de comida a ser colocada e número de sequência de pacote são
                                         gravados na memória EEPROM do Arduino para que as informações não se percam quando houver falta de energia.</p>

                                    




                                    <img class="post-img rounded mx-auto d-block" src="img/esquilo.jpg">
                                    <p class="subtitle-item">descricao imagem</p>

                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p id="section-1" class="title">Teste de titulo</p>
                                    <hr>

                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>
                                    
<div>
<!-- https://github.com/google/code-prettify -->
<pre class="prettyprint linenums code-box">
class Voila {
public:
  // Voila
  static const string VOILA = "Voila";

  // will not interfere with embedded <a href="#voila2">tags</a>.
}</pre>
</div>
                                    <p class="subtitle-item">descricao codigo</p>

                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p id="section-2" class="title">Teste 2 de titulo maior e bem legal demais da conta</p>
                                    <hr>

                                    <p class="header-lvl-2">Header</p>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p class="header-lvl-2">Header</p>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <div class="table-responsive mt-4">
                                        <table class="table table-striped table-bordered shadow-sm">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p class="subtitle-item">descricao tabela</p>

                                    <p class="header-lvl-2">Header</p>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <div class="callout callout-default">
                                        <b>Callout</b>
                                        <br>This is a callout
                                    </div>

                                    <div class="callout callout-green">
                                        <b>Callout</b>
                                        <br>This is a callout
                                    </div>

                                    <div class="callout callout-red">
                                        <b>Callout</b>
                                        <br>This is a callout
                                    </div>

                                </article>
                            </div>

                        </div>
                    </div>
                </div>
            </div>        


        </div>

        <?php include_once($rootDirectory."/widgets/go_top_button.php"); ?>

    </body>

    <?php include_once($rootDirectory."/templates/footer.php"); ?>
    <script src="<?php echo($rootDirectory) ?>/assets/js/tableOfContent.js"></script>

</html>