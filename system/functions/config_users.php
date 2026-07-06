<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário cadastrado com sucesso!');</script>";
            print "<script>location.href='?aba=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar o usuário!');</script>";
            print "<script>location.href='?aba=listar';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "UPDATE usuario SET nome='{$nome}', 
                    email='{$email}', 
                    senha='{$senha}' 
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