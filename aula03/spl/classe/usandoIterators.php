<?php

class PalavrasCollection implements IteratorAggregate{
    private $itens = [];
    public function getItens():array{
        return $this->itens;
    }

    public function addItem(string $item){
        $this->itens[] = $item;
    }

    public function getIterator():Itarator{
        return new OrdemAlfabeticaIterator($this);
    }
    public function getReverseIterator():getIterator{
        return OrdemAlfabeticaIterator($this, true);
    }
}