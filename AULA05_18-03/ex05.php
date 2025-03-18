<?php
    $json_data = file_get_contents('produtos.json');
    $produtos = json_decode($json_data, true);

    $produto_remover = "Anel";

    $produtos_atualizados = array_filter($produtos, function($produto) use ($produto_remover) {
        return $produto['nome'] !== $produto_remover;
    });

    $produtos_atualizados = array_values($produtos_atualizados);

    $json_produtos_atualizado = json_encode($produtos_atualizados, JSON_PRETTY_PRINT);
    file_put_contents('produtos.json', $json_produtos_atualizado);
    
    echo "Produto '$produto_remover' removido com sucesso!";
?>