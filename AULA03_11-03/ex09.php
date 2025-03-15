<?php
    function fatorial($num) {
        $resultado = 1;
        
        for ($i = 1; $i <= $num; $i++) {
            $resultado *= $i;
        }
        
        return $resultado;
    }

    $num = 5;
    echo "O fatorial de $num é: ".fatorial($num);
?>