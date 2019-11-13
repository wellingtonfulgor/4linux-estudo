<?php

require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    public $setor;
    public $cargo;

    public function gerarLog(string $dataehor, string $mens){
        echo "gerar log; {$dataehor} {$mens}";
    }
}


$funcionario = new Funcionario();
$funcionario->gerarLog('2019', 'asdasdasdasd');