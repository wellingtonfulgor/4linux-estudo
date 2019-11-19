<?php

class TesteMetodo{
    public function __call(string $metodo, array $args){
        if(method_exists(__CLASS__, $metodo)){
            echo "chamando o metodo {$metodo}<br>";
            return $this->$metodo(implode($args));
        }else{
            echo "Nao foi possivel chamar o {$metodo}<br>";
            echo "Verifique se o mesmo existe<br>";
        }
    }

    public static function __callStatic(string $metodo, array $args){
        if(method_exists(__CLASS__, $metodo)){
            echo "chamando o metodo {$metodo}<br>";
            return self::$metodo(implode($args));
        }else{
            echo "Nao foi possivel acessar o metodo da classe {$metodo}<br>";
            echo "Verifique se o mesmo existe<br>";
        }
    }

    public static function MostraMensagem(){
        echo "Funcao em execucao";
    }

}

$obj = new TesteMetodo;
$obj->mostraMensagem();
TesteMetodo::mostraMensagem();