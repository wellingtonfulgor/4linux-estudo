<?php

use PHPUnit\Framework\TestCase;


class AlgumaClasse{
    public function fazAlgo(){
        //Implementar
    }
    public function RetornaNumero(){
        //Implementar
    }
}

class Mock extends TestCase{
    public function testMock(){
        $double = $this->createMock(AlgumaClasse::class);
        $double->method('FazAlgo')->willReturn('foo');

        $this->assertSame('foo', $double->fazAlgo(), "nao faz almo");

        $double->method('RetornaNumero')->willReturn(5);

        $this->assertNotSame('foo', $double->fazAlgo(), "nao retorna");
        $this->assertEquals(5, $double->RetornaNumero());

    }

}