<?php
class Biblioteca {
    private $livros = [];

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
        echo "Livro '{$livro->getTitulo()}' adicionado à biblioteca.\n";
    }

    public function listarLivrosDisponiveis() {
        echo "Livros disponíveis na biblioteca:\n";
        foreach ($this->livros as $livro) {
            if ($livro->isDisponivel()) {
                echo "- {$livro->getTitulo()} ({$livro->getGenero()}) - {$livro->getAutor()}\n";
            }
        }
    }
}