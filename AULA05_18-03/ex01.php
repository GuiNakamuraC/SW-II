<?php
    $produtos = [
        [
            "nome" => "Relogio",
            "preco" => 100.00,
            "quantidade" => 5
        ],
        [
            "nome" => "Anel",
            "preco" => 50.00,
            "quantidade" => 10
        ],
        [
            "nome" => "Bracelete",
            "preco" => 30.00,
            "quantidade" => 20
        ]
    ];

    $json_produtos = json_encode($produtos, JSON_PRETTY_PRINT);

    file_put_contents('produtos.json', $json_produtos);

    echo "Arquivo JSON criado."
?>