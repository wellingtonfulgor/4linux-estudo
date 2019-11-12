<?php

    class Profissao{
        public $Salario;
        public $Cargo;
        public $tempoDeCasa;

        public function __construct($Cargo){
            echo $Cargo . "Criado com sucesso";
        }

        public function __destruct(){
            echo "Objeto sendo destruido";
        }
        
    }
    
    echo "<pre>";
    $pedreiro = new Profissao('Pedreiro');

    echo "<br>";
    var_dump($pedreiro);
    unset($pedreiro);
    var_dump($pedreiro);