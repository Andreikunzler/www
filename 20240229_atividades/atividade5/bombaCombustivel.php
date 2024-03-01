<?php
class BombaCombustivel {
    private $tipoCombustivel;
    private $valorLitro;
    private $quantidadeCombustivel;

    public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel) {
        $this->tipoCombustivel = $tipoCombustivel;
        $this->valorLitro = $valorLitro;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function abastecerPorValor($valor, $tipoCombustivel) {
        if ($tipoCombustivel !== $this->tipoCombustivel) {
            echo "Tipo de combustível não compatível com a bomba.<br>";
            return 0;
        }

        $litrosAbastecidos = $valor / $this->valorLitro;
        if ($litrosAbastecidos <= $this->quantidadeCombustivel) {
            $this->quantidadeCombustivel -= $litrosAbastecidos;
            return number_format($litrosAbastecidos, 2);
        } else {
            echo "Não há combustível suficiente na bomba.<br>";
            return 0;
        }
    }

    public function abastecerPorLitro($litros, $tipoCombustivel) {
        if ($tipoCombustivel !== $this->tipoCombustivel) {
            echo "Tipo de combustível não compatível com a bomba.<br>";
            return 0;
        }

        if ($litros <= $this->quantidadeCombustivel) {
            $valorPago = $litros * $this->valorLitro;
            $this->quantidadeCombustivel -= $litros;
            return $valorPago;
        } else {
            echo "Não há combustível suficiente na bomba.<br>";
            return 0;
        }
    }

    public function alterarValor($novoValor) {
        $this->valorLitro = $novoValor;
    }

    public function alterarCombustivel($novoCombustivel) {
        $this->tipoCombustivel = $novoCombustivel;
    }

    public function alterarQuantidadeCombustivel($novaQuantidade) {
        $this->quantidadeCombustivel = $novaQuantidade;
    }

    public function getQuantidadeCombustivel() {
        return $this->quantidadeCombustivel;
    }
}
?>
