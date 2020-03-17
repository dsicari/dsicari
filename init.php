<?php
    $rootDirectory="";

    if($_SERVER['SERVER_NAME'] == "localhost" || strpos($_SERVER['SERVER_NAME'], "192.168") !== false){
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