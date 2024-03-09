<?php

abstract class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    abstract public function imprimeValor();
}

class Normal extends Ingresso {
    public function imprimeValor() {
        echo "Ingresso Normal: R$ " . number_format($this->valor, 2) . PHP_EOL;
    }
}