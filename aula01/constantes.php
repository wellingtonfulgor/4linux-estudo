<?php

class Usuario{
    const STATUSATIVO = true;
    const STATUS_INATIVO = false;

    public $ativo = true;

}

$usuario = new Usuario();
var_dump($usuario->ativo === Usuario::STATUSATIVO);
var_dump($usuario->ativo === Usuario::STATUS_INATIVO);

echo "<hr>";

$usuario->ativo = true;

var_dump($usuario->ativo === Usuario::STATUSATIVO);
var_dump($usuario->ativo === Usuario::STATUS_INATIVO);


echo "<hr>";


if($usuario->ativo === Usuario::STATUSATIVO):
    echo "ativo";
else:
    echo "Desativado";
endif;