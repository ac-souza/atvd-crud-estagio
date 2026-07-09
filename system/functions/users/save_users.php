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
            // AQUI ESTÁ A MUDANÇA: Redirecionando para o login
            print "<script>location.href='?page=login';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar o usuário!');</script>";
            // Se der erro, você pode mandar ele de volta pro formulário de cadastro
            print "<script>location.href='?page=users_signup';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $login = $_POST["login"];

        $sql = "UPDATE usuarios SET nome='{$nome}', 
                    email='{$email}', 
                    senha='{$senha}', 
                    login='{$login}' 
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

        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

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
