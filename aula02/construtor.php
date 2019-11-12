<?php

    class Profissao{
        public $Salario;
        public $Cargo;
        public $tempoDeCasa;

        public function __construct($Cargo){
            echo $Cargo . "Criado com sucesso";
        }

        
    }
    
    echo "<pre>";
    $pedreiro = new Profissao('Pedreiro');

    echo "<br>";
    var_dump($pedreiro);