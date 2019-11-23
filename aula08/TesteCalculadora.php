<?php

require_once 'vendor/phpunit/phpunit/tests/unit/Framework/TestCaseTest.php';
require_once 'Calculadora.php';
use PHPUnit\Framework\TesteCase;


class CalculadoraTeste extends TesteCase{
    public function testSoma(){        
        $operacoes = new Calculadora();
        $resultadoSoma = somar(1,3);

        $this->assertEquals(4,$resultadoSoma,'Erro na soma');
    }

}
