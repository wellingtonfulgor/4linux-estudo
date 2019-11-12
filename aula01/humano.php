<?php

class Humano{
    public $nome = "Chato";
    public $idade;


    public function __construct($idadeObj){
        $this->idade = $idadeObj;
    }

    public function __clone(){
        echo "clonando objeto <br>";
    }

    public function andar(){
        echo "Andando e eu tenhho {$this->idade} teste";
        echo "<br>";
    }

    public function falar(){
        echo "Falando";
        echo "<br>";
    }

}


$humano = new Humano(13);
$humano2 = new Humano(15);

$humano->andar();
$humano->falar();

$humano2->andar();