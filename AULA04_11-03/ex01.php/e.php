<?php
    $pessoa = ['nome' => 'João', 'idade' => 30, 'cidade' => 'São Paulo', 'profissao' => 'Desenvolvedor'];

    $amigos = ['Carlos', 'Maria', 'João'];

    $dados = ['pessoa' => $pessoa, 'amigos' => $amigos];

    echo "<pre>";
    print_r($dados);
    echo "</pre>";
?>