<?php
session_start();
require_once "../functions/connection.php";

$pagina = $_GET['page'] ?? 'login';
if ($pagina === 'home' && !isset($_SESSION["logado"])) {
    // Força o desvio para a página de login
    $pagina = 'login';
}
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

        case 'authenticator':
            require "../functions/authentication/authenticator.php";
            break;

        case 'home':
            require "../pages/home/home.php";
            break;

        case 'users_signup':
            require "../pages/users/users_signup.php";
            break;

        case 'model_signup':
            require "../pages/cad-model/model_signup.php";
            break;

        case 'signup-vehicles':
            require "../pages/cad-veiculo/vehicle_signup.php";
            break;

        case 'save_users':
            require "../functions/users/save_users.php";
            break;


        case 'config-cad':
            require "../functions/config-cad-user.php";
            break;

        case 'config-models':
            require "../functions/config-models.php";
            break;

        case 'config-users':
            require "../functions/config-users.php";
            break;

        case 'config-vehicle':
            require "../functions/config-vehicle.php";
            break;

        case 'logout':
            require "../functions/authentication/logout.php";
            break;

        default:
            echo "<h2>Página não encontrada.</h2>";
    }

    ?>

    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>

</body>

</html>