<?php
class Imovel {
    protected $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getPreco() {
        return $this->preco;
    }
}