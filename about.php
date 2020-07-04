<html>
    <head>
        <?php include_once("./init.php"); ?>
        <?php include_once("templates/head.php"); ?>
        <link rel="stylesheet" href="./assets/css/about.css">
        <link rel="stylesheet" href="./assets/css/post.css">
    </head>

    <?php include_once("widgets/navbar.php"); ?>

    <body>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-2 col-lg-1"></div>
                <div class="col-md-5 col-lg-10 title-cover">
                    Who's bad                                 
                </div>
                <div class="col-md-5 col-lg-1"></div>
            </div>

            <div class="row">
                <div class="col-md-1 col-lg-1"></div>
                <div class="subtitle-cover float-right col-md-10 col-lg-10">
                    Bad - Jackson, Michael
                </div>
                <div class="col-md-1 col-lg-1"></div>
            </div>     

            <!-- PRESENTATION BOX -->
            <div id="apresentacao" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <img class="avatar-img" src="assets/img/foto_perfil.jpg">
                            </div>
                            <div class="col-12 col-md-9">
                                <span class="title">Danilo de Nadai Sícari</span>
                                <hr>
                                <span class="text">Nascido em 1990 e criado com muito sucrilhos no prato, acredita fielmente no poder da internet e que se alguém foi capaz de fazer, outro alguém também fará. Iniciou carreira em uma fabricante de sensores industriais e uns tantos anos depois resolveu pular a cerca e foi para a área de TI, a qual tinha por hobby. Hoje, o hobby é outro, curte cortar madeira, tocar bateria e fazer download de imagens metereológicas de satélites no quintal de sua avó.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <!-- LINKS PAGE -->
            <div id="links" class="row mt-2">
                <div class="col-sm-1"></div>
                <div class="col-4 col-sm-2">
                    <a href="#formacao" class="text-decoration-none cursor-pointer">
                        <div id="formacao-link" class="link-big">
                            <span>Formação</span>                        
                        </div>
                    </a>
                </div>
                <div class="col-4 col-sm-2">
                    <a href="#xp" class="text-decoration-none cursor-pointer">
                        <div class="link-big">
                            <span>Xp</span>                        
                        </div>
                    </a>
                </div>
                <div class="col-4 col-sm-2">
                    <a href="#skills" class="text-decoration-none cursor-pointer">
                        <div id="skills-link" class="link-big">
                            <span>Skills</span>                        
                        </div>
                    </a>
                </div>  
                <!-- DISAPPEAR WHEN MOBILE -->                        
                <div class="col-sm-2 disappear-when-mobile">
                    <a href="#hobbies" class="text-decoration-none cursor-pointer">
                        <div class="link-big">
                            <span>Hobbies</span>                        
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 disappear-when-mobile">
                    <a href="#projetos" class="text-decoration-none cursor-pointer">
                        <div class="link-big">
                            <span>Projetos</span>                        
                        </div>
                    </a>
                </div>
                
                <div class="col-1"></div>
            </div>

            <!-- LINKS PAGE WHEN MOBILE-->
            <div id="links" class="row mt-2">
                <!-- APPEAR WHEN MOBILE -->
                <div class="col-2 appear-when-mobile"></div>
                <div class="col-4 appear-when-mobile">
                    <a href="#skills" class="text-decoration-none cursor-pointer">
                        <div class="link-big">
                            <span>Hobbies</span>                        
                        </div>
                    </a>
                </div>
                <div class="col-4 appear-when-mobile">
                    <a href="#skills" class="text-decoration-none cursor-pointer">
                        <div class="link-big">
                            <span>Projetos</span>                        
                        </div>
                    </a>
                </div>
            </div>

            <!-- FORMACAO -->
            <div id="formacao" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content list-box">

                        <div class="row">
                            <div class="col-md-12 title">
                                <span>Formação</span>
                                <hr>
                            </div>
                        </div>

                        <!-- CURSO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Tecnologia em Sistemas para Internet</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>FATEC - Faculdade de Tecnologia</b>
                                    <br>Araras/SP, conclusão jun/2020
                                    <br><a href="https://www.fatecararas.com.br/" target="_blank">fatecararas.com.br</a>
                                </span>
                            </div>
                        </div>    

                        <!-- CURSO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Licenciatura Matemática</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>UFSCAR - Universidade Federal de São Carlos</b>
                                    <br>Sorocaba/SP, Cursado até o 3o ano
                                    <br><a href="https://www.sorocaba.ufscar.br/" target="_blank">sorocaba.ufscar.br</a>
                                </span>
                            </div>
                        </div> 

                        <!-- CURSO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Pós-graduação Lato Sensu Gestão de Projetos e Negócios</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>FACENS - Faculdade de Engenharia de Sorocaba</b>
                                    <br>Sorocaba/SP, 2015
                                    <br><a href="https://www.facens.br/home" target="_blank">facens.br</a>
                                </span>
                            </div>
                        </div> 

                        <!-- CURSO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Bacharelado Engenharia Elétrica</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>FACENS - Faculdade de Engenharia de Sorocaba</b>
                                    <br>Sorocaba/SP, 2013
                                    <br><a href="https://www.facens.br/home" target="_blank">facens.br</a>
                                </span>
                            </div>
                        </div> 

                        <!-- CURSO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Tecnologia em Eletrônica</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>FATEC - Faculdade de Tecnologia</b>
                                    <br>Tatuí/SP, 2010
                                    <br><a href="https://www.fatectatui.edu.br/" target="_blank">fatectatui.edu.br</a>
                                </span>
                            </div>
                        </div> 

                        <!-- CURSO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Técnico em Informática</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>ETEC - Escola Tecnica</b>
                                    <br>Tatuí/SP, 2008
                                    <br><a href="https://www.etecsalesgomes.com.br/" target="_blank">etecsalesgomes.com.br</a>
                                </span>
                            </div>
                        </div> 

                    </div>
                </div>                
                <div class="col-1"></div>
            </div>

            <!-- XP -->
            <div id="xp" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content list-box">

                        <div class="row">
                            <div class="col-md-12 title">
                                <span>XP</span>
                                <hr>
                            </div>
                        </div>

                        <!-- EXPERIENCIA -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>CI&T Software</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>Estagiário Desenvolvimento de Software</b>
                                    <br><span class="periodo">fev/2020 - atual</span>
                                    <br><br>Desenvolvedor atuando junto a squad, analisando e propondo melhorias, buscando agregar performance e vazão de entrega ao time. Atualmente trabalhando em frontend com REACTJS e backend com JAVA (SPRINGBOOT), persistindo dados em banco de dados relacional e não relacional.
                                    <br><a href="https://br.ciandt.com/" target="_blank">br.ciandt.com</a>
                                </span>
                            </div>
                        </div>                           

                        <!-- EXPERIENCIA -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>PLDevice - Tecnologia em Computadores</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>Gerente de Pesquisa e Desenvolvimento</b>
                                    <br><span class="periodo">abr/2017 - jan/2020</span>
                                    <br><br>Pesquisa e desenvolvimento de novas tecnologias, fornecedores e técnicas agregando valor as operações da empresa.Conhecimento em smartcards, mifare, EMV e protocolos de transação financeira. Desenvolvimento de firmware para microcontroladores ATMEL, software para ambiente Windows, esquemas elétricos e placas de circuito impresso.
                                    <br><a href="http://www.pldevice.com.br/" target="_blank">pldevice.com.br</a>
                                </span>
                            </div>
                        </div> 

                         <!-- EXPERIENCIA -->
                         <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>INFRATEMP – Instrumentos de Medição e Controle LTDA</span>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 description-item">                                    
                                <span>
                                    <b>Engenheiro de Desenvolvimento C</b>
                                    <br><span class="periodo">abr/2012 - abr/2017</span>
                                    <br><br>Aplicação de sistemas cftv e medição de temperatura sem contato para indústria em geral. Projeto elétrico e mecânico, visita a cliente, start up de sistemas, contato direto com fornecedores, suporte técnico, elaboração de manuais, compras e gerenciamento do portfólio de produtos da engenharia.
                                    <br><a href="https://www.infratemp.com.br/" target="_blank">infratemp.com.br</a>
                                </span>
                            </div>
                        </div> 

                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <!-- SKILLS -->
            <div id="skills" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content list-box">

                        <div class="row">
                            <div class="col-md-12 title">
                                <span>SKILLS</span>
                                <hr>
                            </div>
                        </div>

                        <!-- MAIN STACK -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Main Stack</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item">                                    
                                <!-- <img class="tech-image" src="assets/icon/technologies/java.svg">
                                <img class="tech-image" src="assets/icon/technologies/spring.svg">
                                <img class="tech-image" src="assets/icon/technologies/hibernate.svg">
                                <img class="tech-image" src="assets/icon/technologies/mysql.svg">
                                <img class="tech-image" src="assets/icon/technologies/docker.svg"> -->
                                <ul>
                                    <li><b>Java (Spring Boot)</b>: backend</li>  
                                    <li><b>React</b>: frontend</li>                                  
                                    <li><b>MySql</b> e <b>DynamoDB</b>: persistência de dados</li>                                                                        
                                    <li><b>Docker</b>: infraestrutura</li>
                                </ul>
                            </div>
                        </div>    

                        <!-- JA FIZ MUITA COISA EM -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Já fiz muita coisa em</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item">                                    
                                <!-- <img class="tech-image" src="assets/icon/technologies/builder_c++.svg">
                                <img class="tech-image" src="assets/icon/technologies/csharp.svg">
                                <img class="tech-image" src="assets/icon/technologies/python.svg">
                                <img class="tech-image" src="assets/icon/technologies/php.svg"> -->
                                <ul>
                                    <li><b>Borland Builder C++ 6</b>: interfaces gráficas para equipamentos eletrônicos, comunicação USB e Serial, interface com smartcards, implementação ISO8583</li>
                                    <li><b>C#</b>: detecção de faces em vídeo, interface gráfica para kioske de autoatendimento, gerenciamento de equipamentos rede com mapa integrado</li>
                                    <li><b>Python</b>: processamento de video e imagem, matemática aplicada e muita, muita diversão</li>
                                    <li><b>PHP</b>: sistema de gerenciamento de eventos, sistema de gerenciamento de treinamentos</li>
                                </ul>
                            </div>
                        </div> 

                        <!-- E TAMBEM EM -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>E também em</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item">                                    
                                <!-- <img class="tech-image" src="assets/icon/technologies/arduino.svg">
                                <img class="tech-image" src="assets/icon/technologies/arm.svg">
                                <img class="tech-image" src="assets/icon/technologies/arm_mbed.svg">
                                <img class="tech-image" src="assets/icon/technologies/raspberry.svg">
                                <img class="tech-image" src="assets/icon/technologies/qt.svg"> -->
                                <ul>
                                    <li><b>Atmel</b>: comunicação serial, USB, interface com sistemas de potência, rede 
                                    wirelless ZIGBEE, displays LCD, matriz de LEDs</li>
                                    <li><b>ARM</b> e <b>ARM mbed</b>: implementação de protocolo USB</li>                                    
                                    <li><b>Raspbery Pi</b>: videoWall para sistema de monitoramento de vídeo, interface 
                                    SPI com displays TFT, roteamento de rede 3G, fliperama, contador de descargas elétricas, servidor DLNA, controlador de estação de radioamador</li>
                                    <li><b>QT</b>: interface gráfica e browsers para sistemas embarcados</li>
                                </ul>
                            </div>
                        </div> 

                        <!-- CONHECENDO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>Conhecendo</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item">                                    
                                <!-- <img class="tech-image" src="assets/icon/technologies/flutter.svg">
                                <img class="tech-image" src="assets/icon/technologies/mongodb.svg">
                                <img class="tech-image" src="assets/icon/technologies/nodejs.svg"> -->
                                <ul>                                    
                                    <li><b>Node JS</b></li>
                                    <li><b>React Native</b></li>
                                    <li><b>Flutter</b></li>                                    
                                </ul>
                            </div>
                        </div> 

                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <!-- HOBBIES -->
            <div id="hobbies" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content list-box">

                        <div class="row">
                            <div class="col-md-12 title">
                                <span>Hobbies</span>
                                <hr>
                            </div>
                        </div>

                        <!-- HOBBY -->
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">      
                                        <a data-fancybox="gallery" href="assets/img/eletronica.png">                                  
                                            <img class="hobby-img" src="assets/img/eletronica.png" alt="">
                                        </a>
                                        <div style="text-align: center;" class="description-item mt-1 mb-2">Eletrônica</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-fancybox="gallery" href="assets/img/radioamador.jfif"> 
                                            <img class="hobby-img" src="assets/img/radioamador.jfif" alt="">
                                        </a>
                                        <div style="text-align: center;" class="description-item mt-1 mb-2">Rádio Amador</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <a data-fancybox="gallery" href="assets/img/bateria.png"> 
                                            <img class="hobby-img" src="assets/img/bateria.png" alt="">
                                        </a>
                                        <div style="text-align: center;" class="description-item mt-1">Música</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                               
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <!-- PROJETOS -->
            <div id="projetos" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content-box">
                    <div class="container-fluid content list-box">

                        <div class="row">
                            <div class="col-md-12 title">
                                <span>Projetos</span>
                                <hr>
                            </div>
                        </div>

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>GERENCIADOR DE EVENTOS</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Sistema para controle de cadastro e inscrição em atividades, possibilita a entrega de certificados de forma automática através de validação de presença feita por QRCODE
                                    <br><a href="https://eventosfatec.dsicari.com.br" target="_blank">site</a>
                                    <br><a href="/posts/br/2020/06/30/01/gerenciador-de-eventos.php" target="_blank">post</a>
                                </span>
                            </div>
                        </div> 

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>PETFEEDER</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Alimentador automático para pets que possui balança para pesagem do alimento, webcam para visualização do pet e pagina web para configuração e interação com o alimentador. Responsável pelo desenvolvimento do design mecânico, firmware e servidor utilizando C++. 
                                    <br><a href="https://www.youtube.com/watch?v=MZubIsdSAlw" target="_blank">vídeo</a>
                                    <br><a href="/posts/br/2019/11/27/01/petfeeder-alimentador-automatico-para-pets.php" target="_blank">post</a>
                                </span>
                            </div>
                        </div>    

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>EMPODERAMENTO INTERGALÁTICO DO RADIOAMADORISMO UTILIZANDO PYTHON</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Como python e radioamadorismo enviam imagens para o espaço? Uma conversa breve sobre o assunto durante o CAIPYRA 2019
                                    <br><a href="https://youtu.be/_aOLxoQESIA" target="_blank">vídeo CAIPYRA 2019</a>
                                    <br><a href="https://drive.google.com/file/d/0BwSGDpqawMkKSUNibmVCN2k0SnluMW1BVm1xTS14ajM5T0xB/view?usp=sharing" target="_blank">matéria Jornal Opnião, pag. 3</a>
                                </span>
                            </div>
                        </div> 

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>HOMEPAGE CEPINTANDO 7</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Desenvolvimento e hospedagem da homepage do Centro Educacional Pintando 7
                                    <br><a href="https://www.cepintando7.com.br/" target="_blank">homepage</a>
                                </span>
                            </div>
                        </div> 

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>RADIOAMADOR – PU2WAV</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Radioamador classe C, indicativo PU2WAV, para operação em todo território do Brasil, aprovado em 2018 (ANATEL – São Paulo). Interesse e projetos com recepção de imagens via satélite, comunicação digital, SSTV, python para radioamadorismo, participação de contestes nacionais e internacionais, DX na banda de 10m preferencialmente para contatos internacionais
                                    <br><a href="https://sistemas.anatel.gov.br/easp/Novo/ConsultaIndicativo/Tela.asp" target="_blank">consultar indicativo</a>
                                </span>
                            </div>
                        </div> 

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>RADIOAMADOR – KC1KRX</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Radioamador classe Technician, indicativo KC1KRX, para operação em todo território dos Estados Unidos da América, aprovado em 2018 (MIT – Massachusetts)
                                    <br><a href="http://www.arrl.org/advanced-call-sign-search" target="_blank">consultar indicativo</a>
                                </span>
                            </div>
                        </div> 

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>DAILY TIMELAPSE</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Timelapse diário de Cerquilho/SP e Araras/SP sendo postadas no twitter. Projeto feito em python. No momento offline por mudança de endereço.
                                    <br><a href="https://twitter.com/dsicariii" target="_blank">twitter</a>
                                </span>
                            </div>
                        </div>

                        <!-- PROJETO -->
                        <div class="row">
                            <div class="col-md-12 title-item"> 
                                <span>OXIMETRO DE PULSO SEM FIO</span>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12 description-item mb-3">                                    
                                <span>
                                    Interface entre dispositivos médicos não invasivos para transferir informações de taxa de oxigenação do sangue, batimento cardíaco e pressão arterial via internet para um computador pessoal, possibilitando um profissional da saúde realizar exames online de seu paciente e em tempo real, sem a necessidade de contato pessoal.
                                    <br><a href="http://g1.globo.com/sao-paulo/sorocaba-jundiai/noticia/2013/01/universitario-cria-oximetro-de-pulso-sem-fio-em-sorocaba-sp.html" target="_blank">matéria G1 </a>                                                 
                                </span>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div> 

        <?php include_once("widgets/go_top_button.php"); ?>

    </body>
    
    <?php include_once("templates/footer.php"); ?>

</html>