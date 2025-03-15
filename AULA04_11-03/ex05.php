<?php
    $alunos = ["Fulano" => 7.5, "Ciclano" => 8.0, "Beltrano" => 6.5, "Beltrana" => 9.0, "Fulana" => 7.0];

    $somaNotas = 0;

    foreach ($alunos as $nome => $nota) {
        $somaNotas += $nota;
    }

    $media = $somaNotas / count($alunos);

    echo "A média das notas dos alunos é: ".$media."<br>";
?>