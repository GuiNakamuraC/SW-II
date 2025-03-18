<?php
    $email_busca = isset($_GET['email']) ? $_GET['email'] : 'fulano@email.com';

    $json_data = file_get_contents('usuarios.json');
    $usuarios = json_decode($json_data, true);

    $usuario_encontrado = null;
    foreach ($usuarios as $usuario) {
        if ($usuario['email'] === $email_busca) {
            $usuario_encontrado = $usuario;
            break;
        }
    }

    if ($usuario_encontrado) {
        echo "Usuário encontrado!<br>";
        echo "ID: " . $usuario_encontrado['id'] . "<br>";
        echo "Nome: " . $usuario_encontrado['nome'] . "<br>";
        echo "Email: " . $usuario_encontrado['email'] . "<br>";
    } else {
        echo "Erro: Usuário com o e-mail '$email_busca' não encontrado!";
    }
?>