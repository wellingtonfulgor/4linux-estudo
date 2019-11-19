<?php

interface objeto{
    /** 
    *__toString()
    *__invoke()
    *__set()
    *__get()
    *__call()
    *__callStatic()
    */

    public function __toString();

    public function __invoke();
    
    public function __set($parametro, $valor);
    
    public function __get($parametro);
    
    public function __call($metodo, $valores);
    
    public static function __callStatic($metodo, $valores);

    public function metodo();

}