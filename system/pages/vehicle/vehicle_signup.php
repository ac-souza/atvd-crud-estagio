<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Início</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="../assets/img/car_list.png">
    <link href="../assets/vendor/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="rightMenu" aria-labelledby="rightMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="rightM  enuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action border-0">Link 1</a>
                <a href="#" class="list-group-item list-group-item-action border-0">Link 2</a>
                <a href="#" class="list-group-item list-group-item-action border-0">Link 3</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-flex align-items-center" href="#">
                <img src="../assets/img/car_list.png" alt="Logo" style="width:50px; margin-right: 10px;" class="rounded-pill">
                <span class="fs-4">SisVeículos</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightMenu" aria-controls="rightMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>

    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>