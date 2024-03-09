<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $disponivel;

    public function __construct($titulo, $autor, $genero) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->disponivel = true; // Livro disponível por padrão
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '{$this->titulo}' emprestado com sucesso.\n";
        } else {
            echo "Este livro já está emprestado.\n";
        }
    }

    public function devolver() {
        if (!$this->disponivel) {
            $this->disponivel = true;
            echo "Livro '{$this->titulo}' devolvido com sucesso.\n";
        } else {
            echo "Este livro já está disponível.\n";
        }
    }
}