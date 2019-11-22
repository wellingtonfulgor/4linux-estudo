<?php


//Parametros para conexao
$servidor  = 'mysql:host=localhost;dbname=blog';
$usuario = 'blog';
$senha = 'blog';


//Teste de conexao
try{
    //cursor
    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //$count = $conexao->exec("DELETE FROM usuario");

    //adicionar no banco
    //$count = $conexao->exec("INSERT INTO usuarios (nome,email) VALUES ('Daniel','daniel.silva@4linux.com') ");

    //Consultar banco
    $res = $conexao->query('SELECT * FROM usuarios');
    foreach($res as $usuarios){
        echo "Nome: " .$usuarios ['nome']." ";
        echo "Email: " .$usuarios ['email']. "<br>";

    
    }

    //echo "$count linha foram apagadas";
}catch(PDOException $erro){
    echo $erro;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="card">
    
    <?php 
        foreach($res as $usuarios) 
        echo $nome;
    ?>
    </div>    
</body>
</html>