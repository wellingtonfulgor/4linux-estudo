<?php

//Parametros para conexao
$servidor  = 'mysql:host=localhost;dbname=blog';
$usuario = 'blog';
$senha = 'blog';


//Teste de conexao
try{
    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->beginTransaction();
    $res = $conexao->query('SELECT * FROM usuarios');
    var_dump($res);
    
    //$res = $conexao->exec('DELETE FROM usuarios');
    //echo "{$res}";
    //$conexao->exec('DELTE FOM usuarios');
    $conexao->commit();
}catch(PDOException $erro){
    $conexao->rollBack();
    echo $erro;
}
