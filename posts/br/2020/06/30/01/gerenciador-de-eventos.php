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

                                    <img class="post-img rounded mx-auto d-block" src="img/sympla.png" alt="Tela inicial da empresa Sympla">
                                    <p class="subtitle-item">Tela inicial da empresa Sympla</p>

                                    <p class="text">O Ingresso Rápido é outra plataforma de oferta de inscrição em eventos, 
                                    a qual é muito conhecida por gerenciar eventos de grande porte, bem como Tickets For 
                                    Fun e Livepass. Porém não aceita que o próprio usuário crie e gerencie seus próprios 
                                    eventos como a Sympla. </p>

                                    <img class="post-img rounded mx-auto d-block" src="img/ingresso-ponto-com.png" alt="Tela inicial da empresa Ingresso.com">
                                    <p class="subtitle-item">Tela inicial da empresa Ingresso.com</p>

                                    <p id="section-2" class="title">Métodos e ferramentas</p>
                                    <hr>

                                    <p class="text">A agilidade para produção e entrega do sistema fez necessário a utilização de
                                     padrões de projetos já consolidados, onde optou-se pelo MVC - Model View Controller, o qual é 
                                     representado pela figura a seguir. </p>
                                    
                                    <img class="post-img rounded mx-auto d-block" src="img/modelo-mvc.png" alt="Modelo MVC">
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

                                    <img class="post-img rounded mx-auto d-block" src="img/topologia-eventos-fatec.png" alt="Topologia eventos fatec">
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

                                    <img class="post-img rounded mx-auto d-block" src="img/modelo-entidade-relacionamento.png" alt="Modelo Entidade Relacionamento">
                                    <p class="subtitle-item">Modelo Entidade Relacionamento</p>

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