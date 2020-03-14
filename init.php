<?php
    $rootDirectory="";

    if($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_ADDR'] == "::1" ){
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

    //define('rootDirectory', $rootDirectory);
    //$GLOBALS['rootDirectory']=$rootDirectory;

?>