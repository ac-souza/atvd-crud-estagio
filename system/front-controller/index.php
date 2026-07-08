<?php
session_start();
require_once "../functions/connection.php";

$pagina = $_GET['page'] ?? 'login';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../assets/img/car_list.png">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <title>SisVeículos</title>


    <?php
    if (file_exists("../assets/css/$pagina.css")) {
        echo '<link rel="stylesheet" href="../assets/css/' . $pagina . '.css">';
    }

    if ($pagina === 'home') {
        foreach (['cad-user', 'cad-model', 'cad-vei'] as $extra) {
            if (file_exists("../assets/css/$extra.css")) {
                echo '<link rel="stylesheet" href="../assets/css/' . $extra . '.css">';
            }
        }
    }
    ?>
</head>

<body class="fundo">

    <?php

    switch ($pagina) {

        case 'login':
            require "../pages/users/login.php";
            break;

        case 'home':
            require "../pages/home/home.php";
            break;

        case 'cad-user':
            require "../pages/users/signup.php";
            break;

        case 'cad-model':
            require "../pages/cad-model/cad-model.php";
            break;

        case 'cad-vei':
            require "../pages/cad-veiculo/cad-vei.php";
            break;

        case 'salvar':
            require "../functions/salvar-user.php";
            break;

        case 'config-model':
            require "../functions/config-model.php";
            break;

        case 'config-cad':
            require "../functions/config-cad-user.php";
            break;

        case 'config-user':
            require "../functions/config-user.php";
            break;

        case 'config-vei':
            require "../functions/config-vei.php";
            break;

        case 'logout':
            require "../functions/logout.php";
            break;

        default:
            echo "<h2>Página não encontrada.</h2>";
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>