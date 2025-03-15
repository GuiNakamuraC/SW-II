<?php
    $alunos = ["João" => 7.5, "Maria" => 8.0, "Carlos" => 6.5, "Ana" => 9.0, "Pedro" => 7.0];

    $somaNotas = 0;
    $maiorNota = 0;
    $alunoMaiorNota = "";

    foreach ($alunos as $nome => $nota) {
        $somaNotas += $nota;

        if ($nota > $maiorNota) {
            $maiorNota = $nota;
            $alunoMaiorNota = $nome;
        }
    }

    $media = $somaNotas / count($alunos);

    echo "A média das notas dos alunos é: ".$media."<br>";
    echo "O aluno com a maior nota é: ".$alunoMaiorNota." com a nota de ".$maiorNota."<br>";
?>