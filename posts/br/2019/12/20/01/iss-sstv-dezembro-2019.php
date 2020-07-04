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
                                <span><b>22 de janeiro de 2020</b></span>
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
                                    <p class="text">Recepção ISS (Internacional Space Station) via protolo SSTV em dezembro 2019, Araras/SP por PY2NM e PU2WAV </p>
                                    <a data-fancybox="gallery" href="img/1.jpg">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/1.jpg" alt="">
                                    </a>
                                    <br>
                                    <a data-fancybox="gallery" href="img/2.jpg">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/2.jpg" alt="">
                                    </a>
                                    <br>
                                    <a data-fancybox="gallery" href="img/3.jpg">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/3.jpg" alt="">
                                    </a>
                                    <br>
                                    <a data-fancybox="gallery" href="img/4.jpg">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/4.jpg" alt="">
                                    </a>
                                    <br>
                                    <a data-fancybox="gallery" href="img/5.jpg">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/5.jpg" alt="">
                                    </a>
                                    <br>
                                    <a data-fancybox="gallery" href="img/6.jpg">
                                        <img class="post-img img-fluid rounded mx-auto d-block" src="img/6.jpg" alt="">
                                    </a>
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