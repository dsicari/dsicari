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
                                    <p class="text">Este trabalho apresenta o desenvolvimento de um sistema para gerenciamento 
                                     e divulgação de eventos, com funcionalidades de confirmação de presença, geração de 
                                     certificados de participação, além da captação de leads para comunicação futura entre
                                     os participantes e os organizadores</p>    

                                    <p id="section-1" class="title">Introdução</p>
                                    <hr>

                                    <p class="text">Tal como todas as áreas do conhecimento, a área de tecnologia demanda uma constante 
                                    interação entre seus interessados. Essas interações geram desde pequenos insights até 
                                    novos negócios. Talvez por isso, eventos do tipo se tornam muito procurados e gerenciá-los 
                                    é uma tarefa complicada, pois:</p>

                                    <ul class="text">
                                        <li>Necessária página para divulgação</li>
                                        <li>Há o cadastro dos interessados</li>
                                        <li>Se não for gratuito, é preciso cobrar</li>
                                        <li>Em eventos com diversas atividades, com vagas limitadas e com atividades ocorrendo 
                                         em paralelo, é preciso coordenar a inscrição dos interessados</li>
                                        <li>Validar presença no evento para gerar certificado</li>
                                        <li>Entre muitas outras coisas</li>
                                    </ul>

                                    <p class="text">Neste ponto surge um problema: É possível criar um sistema que torne o 
                                     gerenciamento de inscrições e certificações mais eficiente?</p> 
                                    
                                    <p class="text">Baseado neste contexto, podemos destacar algumas necessidades:</p>
                                    
                                    <ul class="text">
                                        <li>Captação de público-alvo com página web</li>
                                        <li>Cadastro de usuário</li>
                                        <li>Gerenciamento de eventos, atividades, inscrições e geração de certificado</li>
                                    </ul>

                                    <p class="text">Estas considerações citadas se tornam ainda mais interessantes quando uma 
                                    faculdade se insere no contexto, a qual não possui somente a necessidade mas também a 
                                    obrigação de ofertar eventos de tecnologia para a comunidade envolvida. e é neste momento 
                                    que surge a oportunidade de desenvolvimento de um sistema para controle e gerenciamento
                                     de eventos. </p>

                                    <p id="section-2" class="title">Análise de propostas no mesmo seguimento</p>
                                    <hr>

                                    <p class="text">Buscou-se no mercado ferramentas para gestão de eventos que ofertasse pelo menos:</p>
                                    <ul class="text">
                                        <li>Inscrição usuário no sistema</li>
                                        <li>Inscrição usuário evento/atividade</li>
                                        <li>Geração de certificado</li>
                                    </ul>
                                    
                                    <p class="text">Dentre os que mais se destacaram podemos citar a Sympla, plataforma de 
                                    gerenciamento de eventos diversos que permite ao usuário criar, divulgar e cobrar 
                                    pelo evento, sem a necessidade da empresa intervir, ou seja, o próprio usuário cria 
                                    e gerencia seu próprio conteúdo. Embora muito personalizável, a Sympla oferece apenas 
                                    cadastro de evento como uma única instância, ou seja, o usuário se inscreve no evento, 
                                    mas não tem a possibilidade de se inscrever em atividades distintas dentro deste evento. 
                                    Outro ponto a se destacar é que a plataforma também não oferta a geração de certificado de 
                                    participação.</p>

                                    <a data-fancybox="gallery" href="img/sympla.png">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/sympla.png" alt="Tela inicial da empresa Sympla">
                                    </a>
                                    <p class="subtitle-item">Tela inicial da empresa Sympla</p>
                                   

                                    <p class="text">O Ingresso Rápido é outra plataforma de oferta de inscrição em eventos, 
                                    a qual é muito conhecida por gerenciar eventos de grande porte, bem como Tickets For 
                                    Fun e Livepass. Porém não aceita que o próprio usuário crie e gerencie seus próprios 
                                    eventos como a Sympla. </p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/ingresso-ponto-com.png" alt="Tela inicial da empresa Ingresso.com">
                                    <p class="subtitle-item">Tela inicial da empresa Ingresso.com</p>

                                    <p id="section-3" class="title">Métodos e ferramentas</p>
                                    <hr>

                                    <p class="text">A agilidade para produção e entrega do sistema fez necessário a utilização de
                                     padrões de projetos já consolidados, onde optou-se pelo MVC - Model View Controller, o qual é 
                                     representado pela figura a seguir. </p>
                                    
                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/modelo-mvc.png" alt="Modelo MVC">
                                    <p class="subtitle-item">Modelo MVC</p>
                                    
                                    <p class="text">Neste padrão de projeto: </p>

                                    <ul class="text">
                                        <li><b>MODEL:</b> tem ações sobre dados persistidos, como exemplo tem a responsabilidade de acessar o banco de dados para buscar informações </li>
                                        <li><b>VIEW:</b> apresenta ao usuário a tela do sistema </li>
                                        <li><b>CONTROLLER:</b> é responsável pela intermediação entre o VIEW e o MODEL, as regras de negócio estão definidas nele </li>
                                    </ul>

                                    <p class="text">Para execução do sistema foi escolhido o framework <a href="https://codeigniter.com/">CODEIGNITER</a>, 
                                    o qual é escrito na linguagem PHP (a qual será a linguagem padrão deste trabalho). </p>

                                    <p class="text">Em suma a topologia do sistema de eventos pode ser conferida pela imagem a seguir. </p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/topologia-eventos-fatec.png" alt="Topologia eventos fatec">
                                    <p class="subtitle-item">Topologia eventos Fatec</p>

                                    <p class="text">Onde:</p>

                                    <p class="text"><b>Administrador</b></p>
                                    <ul class="text">
                                        <li>Tem acesso às informações de todo o sistema e pode alterá-las</li>
                                        <li>Cria e manipula eventos e atividades</li>
                                        <li>Valida presença de usuário no evento e atividade</li>
                                        <li>Emite certificado</li>
                                    </ul>                                
                                                                 
                                    <p class="text"><b>Usuário</b></p>
                                    <ul class="text">
                                        <li>Faz cadastro no site</li>
                                        <li>Se inscreve em atividades</li>
                                        <li>Acessa certificados</li>
                                    </ul> 

                                    <p class="text"><b>Mobile</b></p>
                                    <ul class="text">
                                        <li>Faz a validação do usuário (controlada pelo administrador) através de um aplicativo que faz a leitura de QRCODE</li>
                                    </ul>
                                     

                                    <p class="text"><b>Webpage</b></p> 
                                    <ul class="text">
                                        <li>Fornece ao usuário acesso a eventos e atividades</li>
                                        <li>Fornece ao administrador acesso a página administrativa, eventos e atividades</li>
                                    </ul> 

                                    <p class="text"><b>Banco de dados</b></p>
                                    <ul class="text">
                                        <li>Persiste as informações do sistema </li>
                                    </ul>

                                    <p class="text">O banco de dados tem sua estrutura definida de acordo com o seguinte diagrama</p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/modelo-entidade-relacionamento.png" alt="Modelo Entidade Relacionamento">
                                    <p class="subtitle-item">Modelo Entidade Relacionamento</p>

                                    <p id="section-4" class="title">Relato do processo</p>
                                    <hr>

                                    <p class="text">Conforme os requisitos levantados e discutidos, a implantação aconteceu em partes e 
                                    algumas destas em paralelo, como pode ser conferido a seguir: </p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/grafico-entregas.png" alt="Gráfico de entregas do projeto Eventos Fatec">
                                    <p class="subtitle-item">Gráfico de entregas do projeto Eventos Fatec</p>
                                    
                                    <p class="text">Houveram quatro momentos importantes durante o desenvolvimento, os quais são discutidos a seguir</p>

                                    <ul class="text">
                                        <li>
                                            <b>Backend:</b> foi o item mais demorado para ser desenvolvido, não pela programação em si mas pela lógica de 
                                            funcionamento, onde a equipe testou diversas possibilidades até chegar a forma na qual o sistema foi entregue.
                                            O backend foi desenvolvido e mantido em uma máquina virtual, a qual está hospedada em um serviço 
                                            da empresa Digital Ocean.
                                            <ul class="text">
                                                <li><b>Criação do banco de dados:</b> em suma o banco de dados utilizado foi o MariaDB, em sua versão gratuita</li>
                                                <li><b>Tratamento da persistência dos dados:</b> elaborado todo o CRUD (criação, leitura, update e exclusão) 
                                                para todas as tabelas do sistema, utilizando a camada MODEL do MVC </li>
                                                <li><b>Regras de negócio:</b> definido como o sistema iria se comportar, quais regras deveriam existir 
                                                e etc, utilizando a camada CONTROLLER do MVC </li>
                                                <li><b>Certificados:</b> desenvolvimento do sistema de certificação automática de participação com validação através de QRCode</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Frontend:</b> seu desenvolvimento ocorreu em paralelo com o backend a partir da criação do banco de dados. 
                                            Para isto a equipe foi dividida em dois grupos e o que ficou a cargo do frontend, desenvolveu: 
                                            <ul class="text">
                                                <li><b>Prototipação?</b> fora realizado alguns protótipos para validação do layout, navegação e usabilidade do sistema. Não utilizou-se ferramentas digitais, apenas papel e caneta. </li>
                                                <li><b>Layout:</b> preferiu-se utilizar um layout pronto, baseado nas premissas e requisitos do protótipo elaborado, o qual tem por objetivo divulgar o evento em questão e permitir o usuário se inscrever em atividades</li>
                                                <li><b>Tratamento do usuário:</b> desenvolvimento das telas de login, inscrição e cancelamento de atividades, download de certificado e etc.</li>
                                                <li><b>Testes:</b> desenvolvido em paralelo com a parte mobile, não foi utilizado qualquer ferramenta para realização dos testes, apenas simulações de usuário.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Mobile:</b> optou-se por deixar por último o desenvolvimento da parte mobile frente a falta de tempo que a equipe tinha para entrega do sistema. Todos os aplicativos foram desenvolvidos em Android Studio, utilizando-se a linguagem Java. 
                                            <ul class="text">
                                                <li><b>Aplicativo validação de presença:</b> realiza a validação da presença do usuário na entrada do evento e também nas atividades que participou efetivamente, momento o qual gera o certificado automaticamente </li>
                                                <li><b>Aplicativo agenda evento:</b> foi o último a ser entregue, tem como premissa exibir na tela uma lista com as atividades do evento, contendo local, horário, palestrante e descrição da atividade </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="text">Por fim, a entrega aconteceu durante a III Semana de Ciência e Tecnologia da Fatec Araras, a qual ocorreu entre 21 e 25 de outubro de 2019.</p>

                                    <p id="section-5" class="title">Resultados</p>
                                    <hr>

                                    <p class="text">Foi realizado a entrega de duas telas principais, a de usuário e administrador. 
                                    Na tela de usuário temos basicamente a divulgação do evento/atividades, registro, login e 
                                    inscrição/cancelamento de atividades para usuários comuns. Disponível em 
                                    <a href="https://eventosfatec.dsicari.com.br/">https://eventosfatec.dsicari.com.br/</a> ou pelo <a href="https://youtu.be/z7Q79lKpZW0">vídeo</a>.</p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/pagina-usuario-sistema-eventos-fatec.png" alt="Página de usuário do sistema Eventos Fatec">
                                    <p class="subtitle-item">Página de usuário do sistema Eventos Fatec</p>

                                    <p class="text">A tela de administrador é capaz de incluir novos eventos, atividades e palestrantes, 
                                    além de permitir alterações, inclusões, exclusões e leitura de todas as tabelas do banco de dados.
                                    Disponível apenas com login de administrador em 
                                    <a href="https://eventosfatec.dsicari.com.br/home">https://eventosfatec.dsicari.com.br/home</a> ou pelo 
                                    <a href="https://youtu.be/of0VlffWNys">vídeo</a>.</p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/pagina-administracao-sistema-eventos-fatec.png" alt="Página de administração do sistema Eventos Fatec">
                                    <p class="subtitle-item">Página de administração do sistema Eventos Fatec</p>

                                    <p id="section-6" class="title">Considerações</p>
                                    <hr>

                                    <p class="text">O funcionamento do sistema ocorreu sem maiores problemas durante a III 
                                    Semana de Ciência e Tecnologia da Fatec Araras.Sempre que a equipe tomava ciência de 
                                    qualquer erro ou ameaça de, se posicionava para prover a solução imediata e quando não 
                                    conseguia, fornecia um telefone particular para o usuário entrar em contato para 
                                    resolução.</p>

                                    <p class="text">As principais preocupações dos administradores e “clientes” 
                                    (coordenação da Fatec Araras) eram os seguintes: </p>

                                    <ul class="text">
                                        <li><b>Confronto de horários:</b> caso um usuário se inscreve-se em atividades 
                                        distintas que ocorressem no mesmo horário, o que não aconteceu pois foi previsto 
                                        na análise de requisitos e também testado sob diversas extremas condições </li>
                                        <li><b>Validação de presença via QR Code:</b> o aplicativo falhar era a principal 
                                        e única preocupação geral do sistema, o qual respondeu com mais de 98% eficácia 
                                        à este ponto, o que significa que das 405 requisições enviadas durante o evento 
                                        para o servidor, 400 foram recebidas e persistidas no banco de dados. </li>
                                    </ul>

                                    <p class="text">O único ponto delicado foi o sistema de login, onde o usuário poderia 
                                    ter problemas com a memória cache do navegador. A equipe não conseguiu resolver o 
                                    problema durante o evento, porém respondeu de uma maneira muito objetiva: </p>

                                    <img class="post-img img-fluid rounded mx-auto d-block" src="img/erro-login.png" alt="Imagem de erro apresentada ao usuário">
                                    <p class="subtitle-item">Imagem de erro apresentada ao usuário</p>

                                    <p class="text">Em suma, o sistema se mostrou estável e crumpriu o seu papel, o de 
                                    gerenciar os usuários e atividades do evento, além de proporcionar ao organizador 
                                    informações úteis e muito relevantes, como: informações pessoais dos usuários 
                                    (e-mail e telefone), interesses dos usuários, baseado em eventos/atividades inscritas e também promover a divulgação da marca </p>
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