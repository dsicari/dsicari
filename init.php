<?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
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

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir, 1);                    
        foreach ($files as $key => $value) {
            $path = $dir . DIRECTORY_SEPARATOR . $value;
            if ($value != "." && $value != "..") {
                getDirContents($path, $results);
                if(strpos($value ,".php") !== false){
                    $results[] =  dirname($path); // dirname -> retirar filename
                }                            
            }
        }                
        return $results;
    } 

    function getDateFromPostDirectory($dir){
        $temp = explode(DIRECTORY_SEPARATOR, $dir);
        $strDate = $temp[sizeof($temp)-3]."/".$temp[sizeof($temp)-2]."/".$temp[sizeof($temp)-4];
        return utf8_encode(strftime("%A, %d de %B de %Y", strtotime($strDate)));
    }

    function getDateFromPostUrl($dir){
        $temp = explode("/", $dir);
        $strDate = $temp[sizeof($temp)-3]."/".$temp[sizeof($temp)-2]."/".$temp[sizeof($temp)-4];
        return utf8_encode(strftime("%A, %d de %B de %Y", strtotime($strDate)));
    }

?>