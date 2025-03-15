<?php
    $numeros = [3, 1, 66, 2, 77, 43, 77, 98, 90, 22, 34, 11, 12, 78, 44];

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    
    echo "Quantidade de números pares: ".$pares."<br>";
    echo "Quantidade de números ímpares: ".$impares;
?>