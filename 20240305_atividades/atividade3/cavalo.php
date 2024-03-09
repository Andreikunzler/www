<?php
class Cavalo extends Animal {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade, "relincho");
    }

    public function galopar() {
        echo "{$this->nome} está galopando\n";
    }
}