<?php
class Animal {
    protected $nome;
    protected $idade;
    protected $som;

    public function __construct($nome, $idade, $som) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->som = $som;
    }

    public function emitirSom() {
        echo "{$this->nome} faz {$this->som}\n";
    }
}