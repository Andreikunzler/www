<?php
require_once('./animal.php');
require_once('./cachorro.php');
require_once('./cavalo.php');
require_once('./gato.php');
$cachorro = new Cachorro("Rex", 5);
$cachorro->emitirSom();
$cachorro->abanarRabo();

$gato = new Gato("Felix", 3);
$gato->emitirSom();
$gato->arranharMovel();

$cavalo = new Cavalo("Pé de Pano", 10);
$cavalo->emitirSom();
$cavalo->galopar();