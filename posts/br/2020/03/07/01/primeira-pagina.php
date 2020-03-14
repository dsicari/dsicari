<html>
    <head>
        <?php
            include_once("../../../../../../init.php");       
            include_once($rootDirectory."/templates/head.php");   
        ?>

        <link rel="stylesheet" href="<?php echo($rootDirectory) ?>/assets/css/post.css">

    </head>

    <?php include_once($rootDirectory."/widgets/navbar.php"); ?>

    <body>
        <div class="container-fluid">
            
            <div id="apresentacao" class="row">
                <div class="col-1"></div>
                <div class="col-10 content">
                    <div class="container-fluid presentation-box">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <img class="avatar-img" src="https://via.placeholder.com/350">
                            </div>
                            <div class="col-12 col-md-9">
                                <span class="title">Lorem ipsum dolor sit</span>
                                <hr>
                                <span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>

        </div>

        <?php include_once($rootDirectory."/widgets/go_top_button.php"); ?>

    </body>

    <?php include_once($rootDirectory."/templates/footer.php"); ?>

</html>