<?php


//Parametros para conexao
$servidor  = 'mysql:host=localhost;dbname=blog';
$usuario = 'blog';
$senha = 'blog';


//Teste de conexao
try{
    //cursor
    $conexao = new PDO($servidor, $usuario, $senha);
}catch(PDOException $erro){
    echo $erro;
}