<?php

class Bola {
    private $cor;
    private $circunferencia;
    private $material;

    public function __construct($cor, $circunferencia, $material) {
        $this->cor = $cor;
        $this->circunferencia = $circunferencia;
        $this->material = $material;
    }

    public function trocarCor($novaCor) {
        $this->cor = $novaCor;
    }

    public function mostrarCor() {
        return $this->cor;
    }
}
?>
