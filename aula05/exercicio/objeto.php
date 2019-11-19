<?php

require_once 'OjetoInterface.php';

class Exercicio implements objeto{
    public function __toString(){
        echo "Estou sendo convertido para string<br>";
    }

    public function __invoke(){
        echo "Estou sendo chamado como metodo<br>";
    }
    
    public function __set($parametro, $valor){
        echo "Atribuindo a variavel {$parametro} {$valor}<br>";
    }
    
    public function __get($parametro){
        echo "Acessando o atributo {$parametro}<br>";
    }
    
    public function __call($metodo, $valores){
        echo "Chamando {$metodo}<br>";
        //return $this->metodo;
    }
    
    public static function __callStatic($metodo, $valores){
        echo "chamando {$metodo}<br>";
    }

    public function metodo(){
        //Nao functiona
    }
}

$obj = new Exercicio;
$obj->metodo();