<?php
class TestePropriedade{
    public function __set($propriedade, $valor){
        if(property_exists(__CLASS__, $propriedade )){
            $this->propriedade = $valor;
        }else{
            echo "propriedade nao existe";
        }
    }
}

$obj = new TestePropriedade;
