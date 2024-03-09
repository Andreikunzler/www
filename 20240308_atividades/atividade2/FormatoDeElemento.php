<?php
class FormatoDeElemento {
    protected $cor;

    public function __construct($cor) {
        $this->cor = $cor;
    }

    public function desenhar() {
        echo "Desenhando elemento com cor {$this->cor}\n";
    }

    public function redimensionar($escala) {
        echo "Redimensionando elemento por uma escala de {$escala}\n";
    }
}
