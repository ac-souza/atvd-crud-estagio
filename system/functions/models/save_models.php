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
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];

        $sql = "UPDATE modelos SET marca='{$marca}',  
                                    modelo='{$modelo}' 
                WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modelo editado com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_models';</script>";
        } else {
            print "<script>alert('Não foi possível editar o modelo!');</script>";
            print "<script>location.href='?page=home&aba=config_models';</script>";
        }
        break;
    case 'excluir':

        $sql = "DELETE FROM modelos WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modelo excluído com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_models';</script>";
        } else {
            print "<script>alert('Não foi possível excluir o modelo!');</script>";
            print "<script>location.href='?page=home&aba=config_models';</script>";
        }
        break;
}
