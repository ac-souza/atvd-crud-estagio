<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Início</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="../../assets/img/car_list.png">
    <link href="../../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    <div class="offcanvas offcanvas-end sidebar-customizada" tabindex="-1" id="rightMenu" aria-labelledby="rightMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="rightMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-3">
            <div class="row g-3">
                <div class="col-12">
                    <a href="?page=home&aba=config_users" class="menu-card btn-usuarios d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">person</i>
                        <span>Usuários</span>
                    </a>
                </div>

                <div class="col-12">
                    <a href="?page=home&aba=config_vehicle" class="menu-card btn-veiculos d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">airport_shuttle</i>
                        <span>Veículos</span>
                    </a>
                </div>

                <div class="col-12">
                    <a href="?page=home&aba=config_models" class="menu-card btn-modelos d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">abc</i>
                        <span>Modelos</span>
                    </a>
                </div>

                <div class="col-12 mt-5">
                    <a href="?page=logout" class="menu-card bg-danger d-flex flex-column align-items-center justify-content-center text-decoration-none text-white">
                        <i class="material-icons mb-2">logout</i>
                        <span>Sair da conta</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="index.php?page=home">

                <img class="navbar-logo"></img>

                <span class="fs-4">SisVeículos</span>
            </a>

            <button class="navbar-toggler d-inline-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightMenu" aria-controls="rightMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="ms-2">Menu</span>
            </button>
    </nav>

    <div class="main-content">
        <?php
        // Captura a aba atual da URL
    $aba_atual = $_GET['aba'] ?? 'bem_vindo';

    // Define as configurações de cada botão baseado na aba, mantendo a rota da home e adicionando a tela correspondente
    $botoes = [
        'config_models'  => ['texto' => 'Cadastrar Modelo',  'url' => '?page=home&aba=model-signup',  'classe' => 'btn-primary'],
        'config_users'   => ['texto' => 'Novo Usuário',      'url' => '?page=home&aba=user_signup',   'classe' => 'btn-success'],
        'config_vehicle' => ['texto' => 'Adicionar Veículo', 'url' => '?page=home&aba=vehicle_signup', 'classe' => 'btn-warning']
    ];

    // Se a aba atual estiver no array, renderiza o botão correspondente
    if (array_key_exists($aba_atual, $botoes)) {
        $btn = $botoes[$aba_atual];
        echo '
        <div class="d-flex justify-content-end p-3">
            <button class="btn ' . $btn['classe'] . '" onclick="location.href=\'' . $btn['url'] . '\'">' . $btn['texto'] . '</button>
        </div>';
    }
        ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php
                    $aba = $_GET['aba'] ?? 'bem_vindo';

                    // Switch interno para o conteúdo da Home
                    switch ($aba) {
                        case 'config_users':
                            // Força a cor sólida e anula qualquer imagem de fundo anterior
                            echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';

                            require "../functions/users/config_users.php";
                            break;

                        case 'config_vehicle':
                            // Exemplo caso queira colocar uma IMAGEM diferente para a tela de veículos
                            // echo '<style>body { background-image: url("../../assets/img/fundo-veiculos.png") !important; background-size: cover; }</style>';

                            echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';

                            require "../functions/vehicle/config_vehicle.php";
                            break;

                        case 'config_models':
                            // Fundo com cor sólida diferente
                            echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';
                            require "../functions/models/config_models.php";
                            break;
                        
                        case 'model-signup':
                            echo '<style>
                            body, .fundo, .main-content { 
                            background-color: #f8f9fa !important; 
                            background-image: none !important; 
                            }
                            </style>';
                            require "../pages/car-model/model-signup.php";
                            break;

                        case 'create_user':
                            require "../pages/users/users_signup.php";
                            break;
                            
                        case 'vehicle_signup':
                            require "../pages/vehicle/vehicle_signup.php";
                            break;
                        case 'bem_vindo':
                        default:
                            // MENSAGENS REMOVIDAS: 
                            // Ocultamos os "echo" daqui. Agora a tela ficará totalmente limpa 
                            // mantendo apenas o plano de fundo original da Home até o usuário clicar em algo.
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/vendor/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>