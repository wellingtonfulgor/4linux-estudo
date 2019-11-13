<?php
function __autoload(string $class){
    $arquivo = "classes/$class.php";
    require_once($arquivo);
}

$funcionario = new Funcionario();

$funcionario->nome = 'Gordofredo';
$funcionario->sobrenome = 'Silva';
$funcionario->dataNascimento = '2019-02-09';
$funcionario->sexo = 'Indefinido';
$funcionario->cargo = 'Programador';
$funcionario->setor = 'Tecnologia';


echo "<pre>";
var_dump($funcionario);


echo "<hr>";
echo "Nome do funcionario: {$funcionario->nomeCompleto()}";

$cliente = new Cliente();
$cliente->nome = 'Marcos';
$cliente->sobrenome = 'fonseca';
$cliente->dataNascimento = '2018-01-09';
$cliente->sexo =  'Masculino';
$cliente->rg = 40102978;
$cliente->cpf = 46581927812;

echo "<hr>";
var_dump($cliente);
echo "<br>";
echo "Nome do cliente: {$cliente->nomeCompleto()}";

$estagiario = new Estagiario();


