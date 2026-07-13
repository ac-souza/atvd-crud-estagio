<?php

if (isset($_SESSION["usuario_id"])) {
    $id_usuario = $_SESSION["usuario_id"];

    $sql_update = "UPDATE usuarios SET status = 0 WHERE id = '$id_usuario'";
    $conn->query($sql_update);
}

session_unset();
session_destroy();

print "<script>location.href='?page=login';</script>";
exit;
