<?php
// Certifique-se de que a conexão $conn está disponível aqui (ela já vem do index.php)

switch ($_REQUEST["action"]) {
    case 'logar':
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        // Busca o usuário pelo campo 'login'
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $res = $conn->query($sql);

        // Se encontrou exatamente 1 usuário com esse login e senha
        if ($res && $res->num_rows == 1) {
            $usuario = $res->fetch_assoc();

            // 1. Guarda os dados na sessão (importante guardar o ID ou Login)
            $_SESSION["logado"] = true;
            $_SESSION["usuario_nome"] = $usuario["nome"];
            $_SESSION["usuario_id"] = $usuario["id"]; // <-- Adicione isso (ajuste para o nome da sua coluna de ID)

            // 2. Atualiza o status no banco para Ativo
            $id_usuario = $usuario["id"];
            $sql_update = "UPDATE usuarios SET status = 1 WHERE id = '$id_usuario'";
            $conn->query($sql_update);

            // Redireciona para a Home
            print "<script>location.href='?page=home';</script>";
        } else {
            // Se errou o login ou a senha
            print "<script>alert('Login ou senha incorretos!');</script>";
            print "<script>location.href='?page=login';</script>";
        }
        break;
}
