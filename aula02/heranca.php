<?php
function __autoload(string $class){
    $arquivo = "classes/$class.php";
    require_once($arquivo);
}

$funcionario = new Funcionario();

$funcionario->Nome = 'Gordofredo';
$funcionario->Sobrenome = 'Silva';
$funcionario->DataNascimento = '2019-02-09';
$funcionario->Sexo = 'Indefinido';
$funcionario->Cargo = 'Programador';
$funcionario->Setor = 'Tecnologia';


echo "<pre>";
var_dump($funcionario);


echo "<hr>";
echo "Nome do funcionario: {$funcionario->nomeCompleto()}";