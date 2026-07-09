<?php
// Não precisa de session_start() aqui porque o index.php já iniciou a sessão lá no topo

if (isset($_SESSION["usuario_id"])) {
    $id_usuario = $_SESSION["usuario_id"];

    // 1. Atualiza o banco de dados para Inativo
    $sql_update = "UPDATE usuarios SET status = 0 WHERE id = '$id_usuario'";
    $conn->query($sql_update);
}

// 2. Destrói todas as variáveis da sessão
session_unset();
session_destroy();

// 3. Redireciona para a página de login
print "<script>location.href='?page=login';</script>";
exit;
