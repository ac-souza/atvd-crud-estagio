<?php
var_dump($_POST);
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
}
