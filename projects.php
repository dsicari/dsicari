<html>
    <head>
        <?php include_once("./init.php"); ?>
        <?php include_once("templates/head.php"); ?>
        <link rel="stylesheet" href="./assets/css/projects.css">
        <link rel="stylesheet" href="./assets/css/archive.css">

    </head>

    <?php include_once("widgets/navbar.php"); ?>

    <body>
        <div class="container-fluid">

            <div class="row mb-4">
                <div class="col-sm-2 col-lg-1"></div>
                <div class="col-sm-5 col-lg-10 title-cover-home">
                    Projetos                               
                </div>
                <div class="col-sm-5 col-lg-1"></div>
            </div>

            <?php                       
                $posts = getDirContents("posts".DIRECTORY_SEPARATOR."br");
                //var_dump(getDirContents("posts".DIRECTORY_SEPARATOR."br"));
            ?>
            
            
            <!-- PROJETO -->
            <?php 
                foreach($posts as $postDir) { 
                    $str = file_get_contents($postDir.DIRECTORY_SEPARATOR."post.json");
                    $post = json_decode($str, true);

                    // Get {post_file}.php to link
                    $d = dir($postDir);
                    $filename="";
                    while (false !== ($entry = $d->read())) {                        
                        if(strpos($entry ,".php") !== false){
                            $filename=$postDir.DIRECTORY_SEPARATOR.$entry;
                        }
                    }
                    // TODO, if filename dont exists show error page NOT FOUND

                    // Get tag, to know if its project/archive/...
                    if(in_array('project', $post['tag']) == false){
                        // If didnt find 'project' in tags, continue to next item on foreach
                        continue;
                    }
            ?> 
                
                <div id="apresentacao" class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 content-box">
                        <div class="container-fluid content">
                            <div class="row"> 
                                <div class="col-12 col-md-3">
                                    <img class="avatar-img" src="<?php echo($postDir.DIRECTORY_SEPARATOR.$post['image']) ?>">
                                </div>
                                <div class="col-12 col-md-9 my-auto cursor-pointer" onclick="window.location.href = '<?php echo(str_replace('\\', '/', $rootDirectory.'/'.$filename)); ?>';">
                                    <span class="title"><?php echo($post['title']) ?></span>
                                    <hr>
                                </div>
                            </div>
                            <div class="row mt-2"> 
                                <div class="col-12 cursor-pointer" onclick="window.location.href = '<?php echo(str_replace('\\', '/', $rootDirectory.'/'.$filename)); ?>';">
                                    <span class="text"><?php echo($post['subtitle']) ?></span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4 date-archive">
                                    <span><b><?php echo(getDateFromPostDirectory($postDir)); ?></b></span>
                                </div>
                                <div class="col-md-8 badges">
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

            <?php } ?>
        </div>        
    </body>

    <?php include_once("widgets/go_top_button.php") ?>
    <?php include_once("templates/footer.php"); ?>

</html>