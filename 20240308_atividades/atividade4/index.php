<?php
require_once('./Biblioteca.php');
require_once('./Livro.php');

$livro1 = new Livro("A Revolução dos Bichos", "George Orwell", "Ficção");
$livro2 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", "Fantasia");

$biblioteca = new Biblioteca();
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

$biblioteca->listarLivrosDisponiveis();

$livro1->emprestar();
$biblioteca->listarLivrosDisponiveis();

$livro2->emprestar();
$biblioteca->listarLivrosDisponiveis();

$livro1->devolver();
$biblioteca->listarLivrosDisponiveis();