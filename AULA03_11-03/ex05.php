<?php
    function somar($numeros) {
        $soma = array_sum($numeros);
        return $soma;
    }

    $numeros = [16, 40, 45, 19, 14];
    $resultado = somar($numeros);

    echo "A soma dos números é: ".$resultado;
?>