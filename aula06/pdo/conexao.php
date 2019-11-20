<?php

$servidor  = 'mysql:host=localhost;dbname=blog';
$usuario = 'blog'; 
$senha = 'blog';

try{
    $conexao = new PDO($servidor,$usuario,$senha);
    echo "<pre>";
    echo "Conexao efetuada com sucess";
    $res = $conexao->query('SELECT * FROM usuarios');
    var_dump($conexao);
    foreach($res as $linha){
        print_r($linha);
    }
    $conexao = NULL;
}catch(PODException $e){
    echo "Erro {$e->getMessage()}<br>";
}finally{
    die();
    echo "oi";
}