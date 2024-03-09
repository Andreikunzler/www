<?php

class Gato extends Animal {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade, "miado");
    }

    public function arranharMovel() {
        echo "{$this->nome} está arranhando o móvel\n";
    }
}