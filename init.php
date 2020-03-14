<?php
    $rootDirectory="";

    if($_SERVER['SERVER_NAME'] == "localhost"){
        // develop
        $rootDirectory=$_SERVER['SERVER_NAME']."/dsicari";
    }
    else{
        // production
        $rootDirectory=$_SERVER['SERVER_NAME'];
    }

    if($_SERVER['SERVER_PORT'] == "80"){
        $rootDirectory="http://".$rootDirectory;
    }
    else{
        $rootDirectory="https://".$rootDirectory;
    }

?>