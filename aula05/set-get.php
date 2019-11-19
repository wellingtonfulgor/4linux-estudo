<?php

class TestePropriedade{
    protected $nome;

    public function __set($propriedade, $valor){
        if(property_exists(__CLASS__, $propriedade )){
            $this->propriedade = $valor;
        }else{
            echo "propriedade {$propriedade} nao existe<br>";
            echo "O valor: {$valor} Nao pode ser criado no momento";
        }
    }
}


class TestePropriedade2{
    protected $nome;
    protected $idade;
    protected $sobrenome;

    public function __construct(string $nome, int $idade){
        $this->nome = $nome;
        $this->idate = $idade;
    
    }

    public function __set($propriedade, $valor){
        if(property_exists(__CLASS__, $propriedade)){
            echo "Valor Atribuido<br>";
            $this->$propriedade = $valor;
        }else{
            echo "Voce nao possui permissao para criar atributos<br>";
       }       
    }
        
 

    public function __get($propriedade){
        echo "Voce acessou o atributo {$propriedade}<br>";
        echo $this->$propriedade;
    }
}

$obj2 = new TestePropriedade2('Wellington', 20);
//echo $obj2->nome;
$obj2->sobrenome = 'silva';