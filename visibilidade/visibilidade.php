<?php
class MinhaClasse{
    public function __construct(){

    }

    public function MeuPublico(){

    }


    public function MeuProtegido(){

    }

    private function MeuPrivado(){

    }
    // Quando nao passo visibilidade -> public
    function foo(){
        $this->MeuPublico();
        $this->MeuProtegido();
        $this->MeuPrivado();
    }
}


//$obj = new MinhaClasse();
//$obj->MeuPublico();


//$obj->foo();


class MinhaClasse2 extends MinhaClasse{
    function Foo2(){
        $this->MeuPublico;
        $this->MeuProtegido;
        $this->MeuPrivado;
    }
}


$obj2 = new MinhaClasse2;
$obj2->Foo2();