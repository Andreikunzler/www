<?php

class Contador {
    private $valor;

    public function __construct() {
        $this->valor = 0;
    }

    public function zerar() {
        $this->valor = 0;
    }

    public function incrementar() {
        $this->valor++;
    }

    public function retornarValor() {
        return $this->valor;
    }
}
?>
