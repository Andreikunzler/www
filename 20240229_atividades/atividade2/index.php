<?php
require_once('./bola.php');
$bola = new Bola("azul", 20, "plástico");
echo "Cor da bola: " . $bola->mostrarCor() . "<br>";

$bola->trocarCor("vermelho");
echo "Nova cor da bola: " . $bola->mostrarCor() . "<br>";
?>