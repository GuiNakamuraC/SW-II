<?php
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;
    echo "NOTA 01: ".$nota1."<br>";
    echo "NOTA 02: ".$nota2."<br>";
    echo "NOTA 03: ".$nota3."<br>";
    echo "<br>";

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 6) {
        echo "Média: ".$media." - APROVADO!";
    } else {
        echo "Média: ".$media." - REPROVADO!";
    }
?>