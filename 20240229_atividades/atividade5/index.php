<?php
require_once('./bombaCombustivel.php');
$bomba = new BombaCombustivel("Gasolina", 4.50, 100);

echo "Quantidade de combustível na bomba: " . $bomba->getQuantidadeCombustivel() . " litros<br>";

$litrosAbastecidos = $bomba->abastecerPorValor(50, "Gasolina");
echo "Litros abastecidos: " .  number_format($litrosAbastecidos, 2) . " litros<br>";
echo "Quantidade de combustível na bomba após abastecimento: " . number_format($bomba->getQuantidadeCombustivel(), 2) . " litros<br>";

$valorPago = $bomba->abastecerPorLitro(15, "Gasolina");
echo "Valor pago: R$ " . number_format($valorPago, 2) . "<br>";
echo "Quantidade de combustível na bomba após abastecimento: " . number_format($bomba->getQuantidadeCombustivel(), 2) . " litros<br>";

// Tentativa de abastecer com tipo de combustível não compatível
$valorPago = $bomba->abastecerPorLitro(10, "Álcool");
?>