<?php
switch ($_REQUEST["action"]) {
    case 'register':
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuarios (nome, login, email, senha) VALUES ('$nome', '$login', '$email', '$senha')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_users';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar o usuário!');</script>";
            print "<script>location.href='?page=home&aba=config_users';</script>";
        }
        break;
}
