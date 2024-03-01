<?php
class Carro {
    private $consumoCombustivel; // consumo em km/l
    private $quantidadeCombustivel; // quantidade em litros

    public function __construct($consumoCombustivel) {
        $this->consumoCombustivel = $consumoCombustivel;
        $this->quantidadeCombustivel = 0; // Tanque vazio inicialmente
    }

    public function andar($distancia) {
        // Calcula a quantidade de combustível consumida para percorrer a distância especificada
        $combustivelConsumido = $distancia / $this->consumoCombustivel;
        
        // Verifica se há combustível suficiente para percorrer a distância especificada
        if ($combustivelConsumido <= $this->quantidadeCombustivel) {
            $this->quantidadeCombustivel -= $combustivelConsumido; // Reduz a quantidade de combustível no tanque
            echo "O carro percorreu $distancia km.<br>";
        } else {
            echo "Não há combustível suficiente para percorrer essa distância.<br>";
        }
    }

    public function adicionarGasolina($litros) {
        $this->quantidadeCombustivel += $litros; // Adiciona a quantidade de combustível especificada ao tanque
        echo "Foram adicionados $litros litros de gasolina ao tanque.<br>";
    }

    public function obterGasolina() {
        echo "Nível atual de gasolina no tanque: " . $this->quantidadeCombustivel . " litros.<br>";
    }
}
?>
