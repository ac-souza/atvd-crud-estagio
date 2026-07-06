<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image" href="../assets/img/car_list.png">
  <link href="../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/signup.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    </div>
  </nav>

  <div class="main-content">

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card p-4">
            <h2 class="card-title">Cadastro seu usuário SisVeículos</h2>

            <form id="signupFormElement">
              <div class="form-group">
                <input
                  type="name"
                  id="tnb-signup-username"
                  autocomplete="username"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Nome"
                  required>
              </div>

              <div class="form-group">
                <input
                  type="email"
                  id="tnb-signup-email"
                  autocomplete="email"
                  spellcheck="false"
                  autocapitalize="off"
                  placeholder="Email"
                  required>
              </div>

              <div class="form-group tnb-signup-password" style="position: relative;">
                <input
                  type="password"
                  id="tnb-signup-password"
                  autocomplete="current-password"
                  placeholder="Senha"
                  required>
                <button type="button" id="togglePassword" class="password-toggle-btn">
                  <i class="material-icons" style="font-size: 20px; display: block;">visibility_off</i>
                </button>
              </div>

              <div id="signupStatus" class="status"></div>
              <button type="submit">
                <span class="button-text">Criar Usuário</span>
                <span class="button-loader"></span>
              </button>
            </form>
          </div>
        </div> </div> </div> </div> <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/signup.js"></script>

</body>
</html>