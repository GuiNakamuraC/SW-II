<?php
    $pessoa = ['nome' => 'João', 'idade' => 30, 'cidade' => 'São Paulo', 'profissao' => 'Desenvolvedor'];

    $amigos = ['Carlos', 'Maria', 'João'];

    $dados = ['pessoa' => $pessoa, 'amigos' => $amigos];

    echo "Informações da Pessoa:<br>";
    echo "Nome: ".$dados['pessoa']['nome']."<br>";
    echo "Idade: ".$dados['pessoa']['idade']."<br>";
    echo "Cidade: ".$dados['pessoa']['cidade']."<br>";
    echo "Profissão: ".$dados['pessoa']['profissao']."<br>";

    echo "<br>Meus Amigos:<br>";
    echo "Amigo 1: ".$dados['amigos'][0]."<br>";
    echo "Amigo 2: ".$dados['amigos'][1]."<br>";
    echo "Amigo 3: ".$dados['amigos'][2]."<br>";
?>