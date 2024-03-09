<?php
require_once('./imovel.php');
require_once('./novo.php');
require_once('./velho.php');

$imovel_novo = new Novo("Rua A, 123", 100000.00, 5000.00);
echo "Endereço: " . $imovel_novo->getEndereco() . PHP_EOL;
echo "Preço: R$ " . number_format($imovel_novo->getPreco(), 2) . PHP_EOL;
$imovel_novo->imprimeAdicional();

$imovel_velho = new Velho("Rua B, 456", 80000.00, 3000.00);
echo "Endereço: " . $imovel_velho->getEndereco() . PHP_EOL;
echo "Preço: R$ " . number_format($imovel_velho->getPreco(), 2) . PHP_EOL;
$imovel_velho->imprimeDesconto();