<?php
    $json_data = file_get_contents('usuarios.json');

    $usuarios = json_decode($json_data, true);

    foreach ($usuarios as $e) {
        echo "Nome: " . $e['nome'] . "<br>";
        echo "Email: " . $e['email'] . "<br><br>";
    }
?>