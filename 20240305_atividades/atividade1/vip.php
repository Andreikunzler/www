<?php

class VIP extends Ingresso {
    private $adicional;

    public function __construct($valor, $adicional) {
        parent::__construct($valor);
        $this->adicional = $adicional;
    }

    public function imprimeValor() {
        $valor_total = $this->valor + $this->adicional;
        echo "Ingresso VIP: R$ " . number_format($valor_total, 2) . " (Valor do ingresso: R$ " . number_format($this->valor, 2) . ", Adicional: R$ " . number_format($this->adicional, 2) . ")" . PHP_EOL;
    }
}