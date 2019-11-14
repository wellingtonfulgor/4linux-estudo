<?php

echo "<pre>";
foreach(new directoryIterator('/') as $diretorio){

    echo "$diretorio<br>";
    
    //foreach($diretorio as $openDir){
    //    echo "$openDir<br>";
    //    $opendir2 = readdir[$openDir];
    //}
    //echo gettype($diretorio);
}

echo gettype(new directoryIterator('/'));