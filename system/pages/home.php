<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("../assets/img/gradient_green_background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(8px);
            z-index: -1;
            transform: scale(1.1);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            width: 100%;
            margin-top: 50px;
            transform: translateY(-50px);
        }

        .card-conteudo {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="card-conteudo">
                <div class="row">
                    <div class="col mt-5">
                        <h1>Bem-vindo ao CRUD de Usuários</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>