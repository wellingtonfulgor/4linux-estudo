<?php

class TesteException{
    public function mensagem($msg){
        if(empty($msg)){
            throw new Exception("Parametro mensagem obrigatorio", 500);
        }
    
    }
}

$obj = new TesteException;

try{
    echo $obj->mensagem();
}catch(Exception $e){
    echo "Mensagem 'e um parametro obrigatorio<br>";
}catch(ArgumentCountError $e){
    echo "falta parametro<br>";
}finally {
    echo "fim da execucao<br>";
}

