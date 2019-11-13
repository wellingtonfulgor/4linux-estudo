<?php

class Funcionario extends Pessoa{
    public $cargo;
    public $setor;
    private $plr;
    

    function fenomenal(){
        echo "Fenomenal";

    }

    protected function abacate(){
        echo "Procedimento";
    }
}