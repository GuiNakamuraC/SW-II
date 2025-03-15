<?php
    $notas = array(10, 8, 7, 9, 6, 5, 3, 4);

    $menor = $notas[0];
    $maior = $notas[0];

    for ($i = 1; $i < count($notas); $i++) {
        if ($notas[$i] < $menor) {
            $menor = $notas[$i];
        }
        if ($notas[$i] > $maior) {
            $maior = $notas[$i];
        }
    }

    echo "A menor nota é: ".$menor."<br>";
    echo "A maior nota é: ".$maior;
?>
