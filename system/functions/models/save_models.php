<?php
switch ($_REQUEST["action"]) {
    case 'register':
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];

        $sql = "INSERT INTO modelos (modelo, marca) VALUES ('$modelo', '$marca')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modelo cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_models';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar o modelo!');</script>";
            print "<script>location.href='?aba=config_models';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuario SET nome='{$nome}', 
                    email='{$email}', 
                    senha='{$senha}', 
                    data_nasc='{$data_nasc}' 
                WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário editado com sucesso!');</script>";
            print "<script>location.href='?aba=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar o usuário!');</script>";
            print "<script>location.href='?aba=listar';</script>";
        }
        break;
    case 'excluir':

        $sql = "DELETE FROM usuario WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário excluído com sucesso!');</script>";
            print "<script>location.href='?aba=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir o usuário!');</script>";
            print "<script>location.href='?aba=listar';</script>";
        }
        break;
}
