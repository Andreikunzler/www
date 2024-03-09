<?php

class Item {
    private $nome;
    private $quantidade;
    private $precoUnitario;

    public function __construct($nome, $quantidade, $precoUnitario) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }

    public function calcularTotal() {
        return $this->quantidade * $this->precoUnitario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getPrecoUnitario() {
        return $this->precoUnitario;
    }
}
