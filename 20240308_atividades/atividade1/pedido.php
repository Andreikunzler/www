<?php
class Pedido {
    private $itens = [];

    public function __construct(Item $item) {
        $this->adicionarItem($item);
    }

    public function adicionarItem(Item $item) {
        $this->itens[] = $item;
    }

    public function calcularTotalPedido() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->calcularTotal();
        }
        return $total;
    }

    public function listarItens() {
        foreach ($this->itens as $item) {
            echo "Nome: " . $item->getNome() . ", Quantidade: " . $item->getQuantidade() . ", Preço unitário: " . $item->getPrecoUnitario() . "\n";
        }
    }
}