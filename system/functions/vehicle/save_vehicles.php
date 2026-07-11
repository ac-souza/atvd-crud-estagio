<?php
switch ($_REQUEST["action"]) {

    case 'register':
        $placa = $_POST["placa"];
        $cor = $_POST["cor"];
        $ano = $_POST["ano"];
        $modelo_id = $_POST["modelo_id"];

        $sql = "INSERT INTO veiculos (placa, cor, ano, modelo_id) VALUES ('$placa', '$cor', '$ano', '$modelo_id')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Veículo cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_vehicle';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar o veículo!');</script>";
            print "<script>location.href='?page=home&aba=config_vehicle';</script>";
        }
        break;

    case 'editar':
        $placa = $_POST["placa"];
        $cor = $_POST["cor"];
        $ano = $_POST["ano"];
        $modelo_id = $_POST["modelo_id"];

        $sql = "UPDATE veiculos SET placa='{$placa}', 
                                cor='{$cor}', 
                                ano='{$ano}',
                                modelo_id='{$modelo_id}'
            WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Veículo editado com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_vehicle';</script>";
        } else {
            print "<script>alert('Não foi possível editar o veículo!');</script>";
            print "<script>location.href='?page=home&aba=config_vehicle';</script>";
        }
        break;

    case 'excluir':

        $sql = "DELETE FROM veiculos WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Veículo excluído com sucesso!');</script>";
            print "<script>location.href='?page=home&aba=config_vehicle';</script>";
        } else {
            print "<script>alert('Não foi possível excluir o veículo!');</script>";
            print "<script>location.href='?page=home&aba=config_vehicle';</script>";
        }
        break;
}
