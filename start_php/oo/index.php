<?php
require_once('./animal.php');
require_once('./cachorro.php');

$animal = new Animal("carnivoro", "dinossauro", false);
$animal2 = new Animal("herbivoro", "ave", true);

// $animal->mostrarDetalhe();

// $animal2->mostrarDetalhe();


$luly = new Cachorro("Luly", "carnivoro", "vira-lata", false);

// echo $luly->mostrarDetalhe();
// echo "Nome: " . $luly->nome; 

$luly->latir();


