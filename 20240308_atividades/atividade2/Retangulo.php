<?php

class Retangulo extends FormatoDeElemento {
    private $largura;
    private $altura;

    public function __construct($cor, $largura, $altura) {
        parent::__construct($cor);
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function desenhar() {
        parent::desenhar();
        echo "Desenhando um retângulo com largura {$this->largura} e altura {$this->altura}\n";
    }
}