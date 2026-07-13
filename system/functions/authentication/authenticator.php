<?php

switch ($_REQUEST["action"]) {
    case 'logar':
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $res = $conn->query($sql);

        if ($res && $res->num_rows == 1) {
            $usuario = $res->fetch_assoc();

            $_SESSION["logado"] = true;
            $_SESSION["usuario_nome"] = $usuario["nome"];
            $_SESSION["usuario_id"] = $usuario["id"];

            $id_usuario = $usuario["id"];
            $sql_update = "UPDATE usuarios SET status = 1 WHERE id = '$id_usuario'";
            $conn->query($sql_update);

            print "<script>location.href='?page=home';</script>";
        } else {
            print "<script>alert('Login ou senha incorretos!');</script>";
            print "<script>location.href='?page=login';</script>";
        }
        break;
}
