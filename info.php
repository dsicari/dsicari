<?php
    include_once("init.php");
    if(strpos($rootDirectory, "localhost") !== false){
        echo("rootDirectory=".$rootDirectory."<br>");
        echo("SERVER_ADDR=".$_SERVER['SERVER_ADDR']."<br>");
        echo("SERVER_NAME=".$_SERVER['SERVER_NAME']."<br>");
        echo("SERVER_PORT=".$_SERVER['SERVER_PORT']."<br>");
        echo(phpinfo());
    }
    else{
       header("home.php"); 
       exit();
    }
?>