<?php
class Camarote extends Ingresso {
    private $adicionalCamarote;

    public function __construct($valor, $adicionalCamarote) {
        parent::__construct($valor);
        $this->adicionalCamarote = $adicionalCamarote;
    }

    public function imprimeValor() {
        $valor_total = $this->valor + $this->adicionalCamarote;
        echo "Ingresso Camarote: R$ " . number_format($valor_total, 2) . " (Valor do ingresso: R$ " . number_format($this->valor, 2) . ", Adicional do camarote: R$ " . number_format($this->adicionalCamarote, 2) . ")" . PHP_EOL;
    }
}