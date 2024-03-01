<?php
require_once('./carro.php');
$meuFusca = new Carro(15); // Consumo de combustível de 15 km/l
$meuFusca->adicionarGasolina(20); // Abastecendo com 20 litros de gasolina
$meuFusca->andar(100); // Andando 100 km
$meuFusca->obterGasolina(); // Verificando o nível de gasolina restante
?>