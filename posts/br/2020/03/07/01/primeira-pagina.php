<html>
    <head>
        <?php
            include_once("../../../../../../init.php");       
            include_once($rootDirectory."/templates/head.php");   
        ?>

        <link rel="stylesheet" href="<?php echo($rootDirectory) ?>/assets/css/archive.css">
        <link rel="stylesheet" href="<?php echo($rootDirectory) ?>/assets/css/post.css">

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
                <div class="col-1"></div>
                <div class="col-10 content">
                    <div class="container-fluid presentation-box">
                        <div class="row">

                            <!-- TABLE OF CONTENTS -->
                            <div class="col-2">
                                <ul class="table-of-content">
                                    <li>Header 1</li>
                                    <li>Header 2</li>
                                    <li>Header 3</li>
                                </ul>
                            </div>

                            <!-- POST -->
                            <div class="col-10">
                                <article>
                                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                    ut labore et dolore magna aliqua. Pulvinar sapien et ligula ullamcorper malesuada proin libero 
                                    nunc consequat. Et malesuada fames ac turpis egestas sed tempus urna et. Massa enim nec dui nunc 
                                    mattis enim. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque eu tincidunt tortor 
                                    aliquam nulla facilisi.</p>    

                                    <img class="post-img rounded mx-auto d-block" src="img/esquilo.jpg">
                                    <p class="subtitle-img">descricao imagem</p>

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

                                    <p class="title">Teste</p>
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

</html>