<?php

class MinhaExcessao extends Exception{
    public function __construct($mensagem, $code = 0, Exception $previous = null){
        parent::__construct($mensagem, $code, $previous);
    }

    public function __toString(){
        return __CLASS__. ": [{$this->code}]:{$this->message}<br>";
    }

    public function customFunction(){
        echo "Uma funcao especifica desse tipo de excessao<br>";
    }
}

class TesteException{
    public function mensagem(string $msg): string{
        if(empty($msg)){
            throw new MinhaExcessao('Parametro mensagem e obrigatorio', 500);
        }
        return $msg;
    }
}

$teste = new TesteException;

try{
    echo $teste->mensagem('');
}catch(MinhaExcessao $e){
    echo "Olha ela aqui -> ". $e;
    $e->customFunction();
}