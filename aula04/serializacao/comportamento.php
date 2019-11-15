<?php

class VirarString{
    public function __construct($mensagem){
        $this->foo = $mensagem;
    }

    public function __toString(){
        return 'Eae mano! Quero virar string nao<br>';
    }

    public function __invoke(){
        echo '4 dias de curso e nao aprendeu ainda?';
    }
}

$obj = new VirarString('oi');
echo $obj;
$obj(45);
