<?php

use PHPUnit\Framework\TesteCase;
require_once 'Calculadora.php';


class CalculadoraTeste extends TesteCase{
    public function testSoma(){        
        $operacoes = new Calculadora();
        $resultadoSoma = somar(1,3);

        $this->assertEquals(4,$resultadoSoma,'Erro na soma');
    }

}
