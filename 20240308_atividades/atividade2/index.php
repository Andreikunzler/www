<?php
require_once('./FormatoDeElemento.php');
require_once('./Circulo.php');
require_once('./Retangulo.php');

$circulo = new Circulo("azul", 5);
$circulo->desenhar();
$circulo->redimensionar(2);

$retangulo = new Retangulo("vermelho", 10, 7);
$retangulo->desenhar();
$retangulo->redimensionar(1.5);