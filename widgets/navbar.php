<?php include_once("../init.php"); ?>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a id="logo-navbar" class="nav-link" href="./home.php" class="text-decoration-none">
        <ul class="navbar-nav">
            <li class="nav-item">  
                <img class="dsicari-logo align-top" src="<?php echo($rootDirectory) ?>/assets/icon/ovni_min.svg" width="60" height="60">          
                <span class="navbar-link dsicari-text-logo" href="#">
                    dsicari
                </span>
            </li>    
        </ul>
    </a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo($rootDirectory) ?>/home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo($rootDirectory) ?>/projects.php">Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo($rootDirectory) ?>/about.php">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo($rootDirectory) ?>/archive.php">Arquivo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo($rootDirectory) ?>/contact.php">Contato</a>
            </li>
        </ul>
    </div>
</nav>