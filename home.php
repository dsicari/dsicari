<html>
    <head>
        <?php include_once("./init.php"); ?>        
        <?php include_once("templates/head.php"); ?>
        <link rel="stylesheet" href="./assets/css/home.css">
    </head>

    <?php include_once("widgets/navbar.php"); ?>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="title-cover">DANILO</div>                         
                    <div class="title-cover-second">de nadai</div>
                    <div class="title-cover-second">sícari</div>                                      
                </div>
                <div class="col-lg-4 title-cover-img">
                    <img src="assets/img/developer_pattern.svg">
                </div>
            </div>
            <div class="row row-subtitle">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 col-sm-12">
                    <div class="subtitle-cover" style="line-height: 1;">
                        maker, amateur radio, drummer, enthusiastic,
                    </div>
                    <div class="subtitle-cover-second" style="line-height: 1;">
                        traveller, fire appreciator, bottle opener fanatic, slow drinker...
                    </div>
                </div>
            </div>
            <div class="row row-subtitle">
                <div class="col-sm-12" onclick="window.location.href = '<?php echo($rootDirectory); ?>/contact.php';">
                    <span class="contact">contato</span>
                </div>
            </div>
        </div>        
    </body>

    <?php include_once("templates/footer.php"); ?>

</html>