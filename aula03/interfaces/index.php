<?php require_once 'classeinterface.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card shadow">
            <div class="card-header">
                <?= $obj->getHtml('<h5 class="card-title">{name}</h5>')?>          
            </div>
                <?= $obj->getHtml('<p class="card-text">{Endereco}</>')?>
            <div class="card-body"> 
              
            </div>
        </div>

    </div>
</div>
    

</body>
</html>