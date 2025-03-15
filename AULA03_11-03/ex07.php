<?php
    function somar($numeros) {
        $soma = array_sum($numeros);
        return $soma;
    }

    $numeros = [5, 10, 15, 20, 25];
    $resultado = somar($numeros);

    echo "A soma dos números é: ".$resultado;
?>