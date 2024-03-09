<?php

class Circulo extends FormatoDeElemento {
    private $raio;

    public function __construct($cor, $raio) {
        parent::__construct($cor);
        $this->raio = $raio;
    }

    public function desenhar() {
        parent::desenhar();
        echo "Desenhando um círculo com raio {$this->raio}\n";
    }
}