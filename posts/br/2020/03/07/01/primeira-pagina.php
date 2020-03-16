<html>
    <head>
        <?php
            include_once("../../../../../../init.php");       
            include_once($rootDirectory."/templates/head.php");  
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
                <div class="col-1"></div>
                <div class="col-10 content">
                    <div class="container-fluid presentation-box">
                        <div class="row mb-2">
                            <div class="col-12">
                                <img class="avatar-img" src="https://picsum.photos/1920/300">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <span class="title">Lorem ipsum dolor sit</span>
                                <hr>
                                <span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</span>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 date-archive">
                                <span><b>22 de janeiro de 2020</b></span>
                            </div>
                            <div class="col-md-8 badges">
                                <span class="badge badge-warning">Warning</span>
                                <span class="badge badge-info">Info</span>
                                <span class="badge badge-dark">Dark</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>

            <!-- CORPO POST -->
            <div id="corpo-post" class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 content">
                    <div class="container-fluid presentation-box">
                        <div class="row">

                            <!-- TABLE OF CONTENTS -->
                            <div class="col-sm-2 all-titles">
                                <!-- SERA INJETADO VIA JAVASCRIPT -->
                                <!-- Cada .title sera lista aqui, organizar como id=section-1, id=section-2, ... -->
                            </div>

                            <!-- POST -->
                            
                            <div class="col-12 col-sm-10 post-article">
                                <article>
                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>    

                                    <img class="post-img rounded mx-auto d-block" src="img/esquilo.jpg">
                                    <p class="subtitle-item">descricao imagem</p>

                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p id="section-1" class="title">Teste de titulo</p>
                                    <hr>

                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
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

                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p id="section-2" class="title">Teste 2 de titulo maior e bem legal</p>
                                    <hr>

                                    <p class="header-lvl-2">Header</p>
                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>

                                    <p class="header-lvl-2">Header</p>
                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
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
                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
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