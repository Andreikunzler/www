<?php

class Velho extends Imovel {
    private $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function imprimeDesconto() {
        echo "Desconto no preço do imóvel velho: R$ " . number_format($this->desconto, 2) . PHP_EOL;
    }
}