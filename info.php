<?php
    include_once("init.php");
    //if(strpos($rootDirectory, "localhost") !== false || strpos($rootDirectory, "::1") !== false || strpos($rootDirectory, "127.0.0.1") !== false){
        echo($rootDirectory."<br>");
        echo($_SERVER['SERVER_ADDR']."<br>");
        echo($_SERVER['SERVER_NAME']."<br>");
        echo($_SERVER['SERVER_PORT']."<br>");
        echo(phpinfo());
    //}
    //else{
    //    header("/home.php"); 
    //    exit();
    //}
?>