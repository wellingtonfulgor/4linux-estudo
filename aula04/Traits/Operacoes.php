<?php

trait Operacoes{
    public function somar(float $valores){
        return $n1 + $n2;
    }

    public function subtrair($n1, $n2){
        return $n1 - $n2;
    }

    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }

    public function dividir($n1, $n2){
        return $n1 / $n2;
    }
}

trait A{
    public function a(){
        echo "Eu sou a funcao a da trait a <br>";
    }
    public function b(){
        echo "Eu sou a funcao a da trait b <br>";
    }
}

trait B{
    public function a(){
        echo "Eu sou a funcao a da trait a <br>";
    }
    public function b(){
        echo "Eu sou a funcao a da trait b <br>";
    }
        
    public function c(){
        echo "Eu sou b funcao a da trait c <br>";
    }
}


var_dump((new class{
    use a, b{
        B::b insteadOf A;
        A::a insteadOf B;
        B::a as metodoAdaTraitB;
    }

})->metodoAdaTraitB());

trait C{
    use A,B{
        B::b insteadOf A;
        A::a insteadOf B;
        B::a as metodoAdaTraitB;
    }
}

var_dump((new class {
    use C;
})->metodoAdaTraitB());