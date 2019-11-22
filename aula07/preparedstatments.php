<?php

//Parametros para conexao
$servidor  = 'mysql:host=localhost;dbname=blog';
$usuario = 'blog';
$senha = 'blog';


//Teste de conexao
try{
    $conexao = new PDO($servidor, $usuario, $senha);

    $email = "aluno%";
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $statemant = $conexao->prepare('SELECT * FROM usuarios WHERE email LIKE :email');
    $statemant->bindParam(':email', $email, PDO::PARAM_STR, 50);
    $statemant->execute();

    $res = $statemant->fetchAll(PDO::FETCH_ASSOC);


    foreach($res as $usuario){
        echo $usuario['nome'] . "<br>";
        echo $usuario['email'] . "<br>";
    }

}catch(PDOException $erro){
    echo $erro;
}
