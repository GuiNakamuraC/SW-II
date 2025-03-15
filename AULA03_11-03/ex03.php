<?php
    function par_impar($num) {
        if ($num % 2 == 0) {
            echo "O número: ".$num." é par";
        } else {
            echo "O número: ".$num." é ímpar";
        }
    }

    $num = 10;
    par_impar($num);
?>