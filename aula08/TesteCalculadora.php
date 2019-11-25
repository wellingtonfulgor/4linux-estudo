<?php

require_once 'vendor/autoload.php';
require_once 'Calculadora.php';
use PHPUnit\Framework\TestCase;


class CalculadoraTest extends TestCase{
    public function testSomar(){        
        $operacoes = new Calculadora();
        $resultadoSoma = $operacoes->somar(1,3);

        $this->assertEquals(4,$resultadoSoma,'Erro na soma');
        $this->assertEquals(6, $operacoes->somar(3,3));
        $this->assertEquals(8, $operacoes->somar(4,4));
        $this->assertEquals(7, $operacoes->somar(2,5));
        $this->assertEquals(9, $operacoes->somar(4,5));
    }

    public function testSubtrair(){
        $obj_subtrair = new Calculadora();
        $resultadoSubtrair = $obj_subtrair->subtrair(5,1);
        $this->assertEquals(4, $resultadoSubtrair, 'Erro subtrair');
        $this->assertEquals(3, $obj_subtrair->subtrair(5,2));
        $this->assertEquals(true, 2);
    }

}
