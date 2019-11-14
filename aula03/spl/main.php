<?php

function __autoload(string $class){
    $arquivo = "classe/*.php";
    require_once($arquivo);
}

$colecao = new PalavrasCollection;
$colecao->addItem("Primeiro");
$colecao->addItem("Segundo");
$colecao->addItem("Terceiro");


echo "Ordem de inclusao: <br>";
foreach($colecao->getIterator() as $item){
    echo "$item<br>";
}

