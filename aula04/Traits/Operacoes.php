<?php

trait Operacoes{
    public function somar(float $valores) : float{
        $total = null;
        foreach($valores as $valor){
            $total += $valor;
        }
        return $total;

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