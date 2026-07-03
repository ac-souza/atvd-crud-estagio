<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>SisVeículos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="../assets/img/car_list.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .navbar .dropdown-menu {
            min-width: 320px;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #loginFormElement button[type="submit"] {
            width: 100%;
            padding: 0.6rem;
            background-color: #212529;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .password-toggle-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background: none;
            border: none;
            color: #6c757d;
            z-index: 10;
            /* Garante que o botão fique na frente do input */
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="#">
                <img src="../assets/img/car_list.png" alt="Logo" style="width:50px; margin-right: 10px;" class="rounded-pill">
                <span class="fs-4">SisVeículos</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-inline-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="material-icons">person</i> Minha Conta
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="tnb-login-dropdown-form-container" id="tnb-login-dropdown-loginForm">
                                <div class="auth-header">
                                    <div class="auth-title" style="font-weight: bold; font-size: 1.2rem;">Entrar</div>
                                    <div class="auth-subtitle" style="font-size: 0.85rem; color: #6c757d; margin-bottom: 10px;">Acesse sua conta e gerencie seus veículos</div>
                                </div>

                                <p class="switch-form" style="font-size: 0.9rem;">
                                    Não tem uma conta? <a id="tnb-login-dropdown-signup-link" href="#" style="color: #0d6efd; text-decoration: none;">Cadastre-se</a>
                                </p>

                                <form id="loginFormElement">
                                    <div class="form-group">
                                        <input type="email" id="tnb-login-dropdown-email" autocomplete="email" spellcheck="false" autocapitalize="off" placeholder="Email" required>
                                    </div>

                                    <div class="form-group tnb-login-dropdown-password-container">
                                        <div style="position: relative;">
                                            <input type="password" id="tnb-login-dropdown-password" autocomplete="current-password" placeholder="Senha" required style="padding-right: 40px;">
                                            <button type="button" id="togglePassword" class="password-toggle-btn">
                                                <i class="material-icons" style="font-size: 20px;">visibility_off</i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="forgot-password" id="tnb-login-dropdown-reset-password" style="font-size: 0.85rem; margin-bottom: 15px; cursor: pointer; color: #6c757d;">
                                        Esqueceu sua senha?
                                    </div>

                                    <div id="loginStatus" class="status"></div>
                                    <button type="submit">
                                        <span class="button-text">Entrar</span>
                                        <span class="button-loader"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3 text-center">
        <h3>Bem-vindo ao SisVeículos</h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
        document.getElementById('togglePassword').addEventListener('click', function(event) {
            // 1. Evita que o botão tente dar "submit" no formulário ou fechar coisas indesejadas
            event.preventDefault();
            event.stopPropagation();

            const passwordInput = document.getElementById('tnb-login-dropdown-password');
            // 2. Buscamos o ícone diretamente pelo ID ou pela tag de forma segura, usando 'this' (o botão)
            const icon = this.querySelector('i');

            if (passwordInput && icon) {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.textContent = 'visibility';
                } else {
                    passwordInput.type = 'password';
                    icon.textContent = 'visibility_off';
                }
            }
        });

        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownMenu.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    </script>
</body>

</html>