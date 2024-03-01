<?php

$listaProdutos = array();

function cadastrarProduto($nome, $preco) {
    global $listaProdutos;
    array_push($listaProdutos, array (
        "nome" => $nome,
        "preco" => $preco
    ));
}

function listarProdutos() {
    global $listaProdutos;
    foreach ($listaProdutos as $key => $value) {
        echo "<h3> Produto: " . $value['nome'] . "</h3>";
        echo "<hr />";
        echo "<h3> Preço: $" . $value['preco'] . "</h3>";
        echo "<hr />";
    }
}

function excluirProduto($nome) {
    global $listaProdutos;

    foreach ($listaProdutos as $key => $value) {
        if (strtolower($value['nome']) == strtolower($nome)) {
            unset($listaProdutos[$key]);
        }
    }
}


cadastrarProduto("Celular", 1000);
cadastrarProduto("Notebook", 1500);
cadastrarProduto("Tablet", 500);
cadastrarProduto("TV", 800);


excluirProduto('celular');


listarProdutos();
?>