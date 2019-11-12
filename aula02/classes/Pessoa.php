<?php

class Pessoa{
    public $Nome;
    public $Sobrenome;
    public $DataNascimento;
    public $Sexo;

    public function nomeCompleto() : string{
        return "{$this->Nome} {$this->Sobrenome}";
    }
}