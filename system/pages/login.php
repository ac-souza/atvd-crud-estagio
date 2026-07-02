<!DOCTYPE html> <!-- Declaração do tipo de documento HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->

<head>
    <meta charset="utf-8"> <!-- Define a codificação de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Define a largura da viewport para o tamanho do dispositivo e a escala inicial como 1, garantindo que o site seja responsivo -->
    <title>Login de Usuário</title> <!-- Define o título da página como "Login de Usuário" -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Link para o arquivo CSS do Bootstrap, que fornece estilos e componentes prontos para a página web -->
    <link rel="icon" type="image" href="https://em-content.zobj.net/source/google/439/automobile_1f697.png"> <!-- Define o ícone da página como uma imagem de um arquivo PNG localizado no caminho especificado -->
    <style>
        body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        position: relative; /* Necessário para posicionar o fundo embaçado */
    }

    /* Camada fantasma para a imagem de fundo */
        body::before {
        content: "";
        position: fixed; /* Mantém o fundo fixo ao rolar a página */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        
        /* Substitua pelo caminho ou URL da sua imagem */
        background-image: url('https://radioclube.dol.com.br/wp-content/uploads/2024/01/Design-sem-nome-27_00843631_0_-scgHdR.jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        
        /* O SEGREDO DO EMBAÇADO: */
        filter: blur(8px); /* Quanto maior o número, mais embaçado fica */
        
        z-index: -1; /* Joga a imagem para trás de absolutamente tudo */
        transform: scale(1.1); /* Evita que as bordas da tela fiquem brancas por causa do blur */
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #3294D2;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD Inc.</a> <!-- Cria um link de marcação na barra de navegação com o texto "Cadastro de Usuários" -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="?page=new_user">Criar Usuário</a> <!-- Cria um link na barra de navegação com o texto "Novo Usuário" -->
                    </li>
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="?page=user_list">Listar Usuários</a> <!-- Cria um link na barra de navegação com o texto "Listar Usuários" -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container"> <!-- Cria um contêiner para centralizar o conteúdo da página -->
        <div class="row"> <!-- Cria uma linha para organizar o conteúdo em colunas -->
            <div class="col mt-5 card-conteudo"> <!-- Cria uma coluna com margem superior de 5 unidades para adicionar espaçamento -->
                <?php
                // Usamos require_once aqui porque o arquivo de configuração só precisa (e deve) ser carregado uma vez.
                require_once("../includes/config.php"); 

                switch (@$_REQUEST['page']) { 
                    case "new_user":
                        require("signup.php");
                        break;
                    case "listar":
                        require("listar_usuarios.php");
                        break;
                    case "salvar":
                        require("salvar_usuarios.php");
                        break;
                    case "editar":
                        require("editar_usuarios.php");
                        break;
                    default:
                        echo "<h1>Bem vindos ao teste de sistema CRUD!</h1>";
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js></script> <!-- Link para o arquivo JavaScript do Bootstrap, que fornece funcionalidades interativas para a página web -->
</body>

</html>

<style>
    .container {
    display: flex;
    flex-direction: column; /* Empilha os inputs e mensagens */
    align-items: center;    /* Centraliza tudo horizontalmente */
    gap: 15px;              /* Cria um espaçamento vertical maneiro entre os elementos */
    
    width: 100%;            /* Opcional: garante que o container ocupe a largura da tela */
    margin-top: 50px;       /* Opcional: desgruda o topo da tela */
    transform: translateY(-50px); /* Valores negativos sobem o elemento. Ajuste o número como preferir! */
  }

    .card-conteudo {
    background-color: rgba(255, 255, 255, 0.85); /* Fundo branco com 85% de opacidade */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Sombra suave para dar profundidade */
    border: 1px solid rgba(255, 255, 255, 0.3);
}
</style>