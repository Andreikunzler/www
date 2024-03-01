<?php
require_once('./contador.php');
$contador = new Contador();
echo "Valor inicial do contador: " . $contador->retornarValor() . "<br>";

$contador->incrementar();
$contador->incrementar();
$contador->incrementar();
echo "Valor após incrementar 3 vezes: " . $contador->retornarValor() . "<br>";

$contador->zerar();
echo "Valor após zerar: " . $contador->retornarValor() . "<br>";
?>