<?php
require_once('./conta.php');
$conta = new ContaCorrente(123456, "Fulano de Tal");
echo "Nome do correntista: " . $conta->getNomeCorrentista() . "<br>";
$conta->exibirSaldo();

$conta->deposito(1000);
$conta->exibirSaldo();

$conta->saque(1500);
$conta->exibirSaldo();

$conta->alterarNome("Ciclano de Tal");
echo "Novo nome do correntista: " . $conta->getNomeCorrentista() . "<br>";
?>