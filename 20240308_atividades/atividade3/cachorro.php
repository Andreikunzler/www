<?php

class Cachorro extends Animal {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade, "latido");
    }

    public function abanarRabo() {
        echo "{$this->nome} está abanando o rabo\n";
    }
}