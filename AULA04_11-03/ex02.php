<?php
    // Criar o VETOR com 10 números inteiros
    $vetor = [16, 40, 45, 19, 14, 5, 10, 15, 20, 25];

    // Variável para a soma total (tem que estar zerada)
    $total = 0;

    // Laço de repetição 10x
    for ($i = 0; $i < 10; $i++) {
        // Pegar o valor na posição do laço/contador e somar ao total
        $total += $vetor[$i];
    }

    // Mostrar o valor total
    echo "A soma de todos os elementos do array é: ".$total;
?>