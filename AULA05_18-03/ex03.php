<?php
    $json_data = file_get_contents('produtos.json');
    $produtos = json_decode($json_data, true);

    $novo_produto = [
        "nome" => "Colar",
        "preco" => 70.00,
        "quantidade" => 15
    ];

    $produtos[] = $novo_produto;

    $json_produtos_atualizado = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents('produtos.json', $json_produtos_atualizado);

    echo "Novo produto adicionado.";
?>