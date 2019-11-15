<?php

class Funcionario{
    public function oi(){
        echo "ola<br>";
    }

    public function __destruct(){
        echo "Estou morrendo<br>";
    }

    public function __sleep(){
        return ['nome','cargo'];
    }

    public function __wakeup(){
        echo "Morri nao, Ha! Pegadinha do malandro<br>";
        $this->sobrenome = 'Atribuido com o wakeup';
    }
}

$funcionario = new Funcionario;
$funcionario->nome = 'Joaquim Jose';
$funcionario->sobrenome = 'da silva xavier';
$funcionario->dataNascimento = '1746-11-12';
$funcionario->sexo = 'm';
$funcionario->cargo = 'Coveiro';
$funcionario->setor = 'Funerario';


echo "<pre>";
var_dump($funcionario);

echo serialize($funcionario);

$serializado = serialize($funcionario);

unset($funcionario);

$funcionario = unserialize($serializado);
$funcionario->oi();


var_dump($funcionario);