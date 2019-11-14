<?php
require_once 'traits.php';

class Calculadora{
    use operacoes;

}

$calc = new Calculadora;
echo $calc->soma(1,2);
echo $calc->subtrai(2,9);