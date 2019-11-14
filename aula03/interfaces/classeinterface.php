<?php

require_once 'interfaces.php';
class Template implements iTemplate{

    private $vars = array();

    public function setVariavel(string $name, $var){
        $this->vars[$name] = $var;
    }

    public function getHtml($template):string{
        foreach($this->vars as $name => $value){
            $template = str_replace( '{' . $name . '}' ,$value ,$template);
        }
        return $template;
    }
}

$obj = new Template();
$obj->setVariavel('name','asdasdasd');
$obj->setVariavel('email','asdfasdf@gasdga.com.br');
$obj->setVariavel('telefone','(11) 99999-9999');
$obj->setVariavel('endereco','Rua teste, N 000');
$obj->setVariavel('final','Todos os direitos reservados');
