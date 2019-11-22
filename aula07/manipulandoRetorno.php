<?php

//Parametros para conexao
$servidor  = 'mysql:host=localhost;dbname=blog';
$usuario = 'blog';
$senha = 'blog';


//Teste de conexao
try{
    $conexao = new PDO($servidor, $usuario, $senha);
    $res = $conexao->query('SELECT * FROM usuarios');

    var_dump($res->fetchAll(PDO::FETCH_ASSOC));
    
    while($linha = $res->fetch(PDO::FETCH_ASSOC)){
        echo "Nome: {$linha['nome']}<br>";
    }
}catch(PDOException $erro){
    echo $erro;
}
