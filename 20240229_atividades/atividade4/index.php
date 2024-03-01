<?php
require_once('./calculadora.php');
$calculadora = new Calculadora();

echo "Resultado da soma: " . $calculadora->somar(5, 3) . "<br>";
echo "Resultado da subtração: " . $calculadora->subtrair(10, 7) . "<br>";
echo "Resultado da multiplicação: " . $calculadora->multiplicar(4, 6) . "<br>";
echo "Resultado da divisão: " . $calculadora->dividir(20, 4) . "<br>";

$historico = $calculadora->visualizarHistorico();
echo "Histórico das operações:<br>";
foreach ($historico as $op) {
    echo $op . "<br>";
}
?>