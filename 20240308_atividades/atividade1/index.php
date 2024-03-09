<?php
require_once('./item.php');
require_once('./pedido.php');

$item1 = new Item("Produto A", 2, 10);
$item2 = new Item("Produto B", 1, 20);

$pedido = new Pedido($item1);
$pedido->adicionarItem($item2);

echo "Itens do pedido:\n";
$pedido->listarItens();

echo "Total do pedido: R$ " . $pedido->calcularTotalPedido() . "\n";