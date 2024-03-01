<?php

class Calculadora {
    private $historico = array();

    public function somar($a, $b) {
        $resultado = $a + $b;
        $this->historico[] = "$a + $b = $resultado";
        return $resultado;
    }

    public function subtrair($a, $b) {
        $resultado = $a - $b;
        $this->historico[] = "$a - $b = $resultado";
        return $resultado;
    }

    public function multiplicar($a, $b) {
        $resultado = $a * $b;
        $this->historico[] = "$a * $b = $resultado";
        return $resultado;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            $this->historico[] = "Erro: Divisão por zero";
            return "Erro: Divisão por zero";
        }
        $resultado = $a / $b;
        $this->historico[] = "$a / $b = $resultado";
        return $resultado;
    }

    public function visualizarHistorico() {
        return $this->historico;
    }
}
?>
