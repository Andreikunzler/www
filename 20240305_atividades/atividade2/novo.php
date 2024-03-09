<?php

class Novo extends Imovel {
    private $adicional;

    public function __construct($endereco, $preco, $adicional) {
        parent::__construct($endereco, $preco);
        $this->adicional = $adicional;
    }

    public function getAdicional() {
        return $this->adicional;
    }

    public function imprimeAdicional() {
        echo "Adicional no preço do imóvel novo: R$ " . number_format($this->adicional, 2) . PHP_EOL;
    }
}
