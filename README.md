-----------------------------=LOGIN.PHP=---------------------------------

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
            position: relative;
            /* Necessário para posicionar o fundo embaçado */
        }

        /* Camada fantasma para a imagem de fundo */
        body::before {
            content: "";
            position: fixed;
            /* Mantém o fundo fixo ao rolar a página */
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
            filter: blur(8px);
            /* Quanto maior o número, mais embaçado fica */

            z-index: -1;
            /* Joga a imagem para trás de absolutamente tudo */
            transform: scale(1.1);
            /* Evita que as bordas da tela fiquem brancas por causa do blur */
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
        flex-direction: column;
        /* Empilha os inputs e mensagens */
        align-items: center;
        /* Centraliza tudo horizontalmente */
        gap: 15px;
        /* Cria um espaçamento vertical maneiro entre os elementos */

        width: 100%;
        /* Opcional: garante que o container ocupe a largura da tela */
        margin-top: 50px;
        /* Opcional: desgruda o topo da tela */
        transform: translateY(-50px);
        /* Valores negativos sobem o elemento. Ajuste o número como preferir! */
    }

    .card-conteudo {
        background-color: rgba(255, 255, 255, 0.85);
        /* Fundo branco com 85% de opacidade */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        /* Sombra suave para dar profundidade */
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>

-----------------------------=LOGIN.PHP=---------------------------------

-----------------------------=SIGNUP.PHP=--------------------------------

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Criar Usuário</h1>
            <form action="?aba=salvar" method="post"> <!-- Cria um formulário HTML que envia os dados para a página "salvar_usuarios.php" usando o método POST -->
                <input type="hidden" name="acao" value="cadastrar"> <!-- Cria um campo oculto que envia a ação "cadastrar" para o arquivo "salvar_usuarios.php" -->
                <div class="mb-3">
                    <label>Nome</label> <!-- Cria um rótulo para o campo de entrada de texto com o texto "Nome" -->
                    <input type="text" id="entradanome" name="nome" class="form-control"> <!-- Cria um campo de entrada de texto com o nome "nome" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3">
                    <label>Email</label> <!-- Cria um rótulo para o campo de entrada de texto com o texto "Email" -->
                    <input type="email" id="entradamail" name="email" class="form-control"> <!-- Cria um campo de entrada de email com o nome "email" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3">
                    <label>Senha</label> <!-- Cria um rótulo para o campo de entrada de senha com o texto "Senha" -->
                    <input type="password" id="entradasenha" name="senha" class="form-control"> <!-- Cria um campo de entrada de senha com o nome "senha" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3">
                    <label>Data de Nascimento</label> <!-- Cria um rótulo para o campo de entrada de data com o texto "Data de Nascimento" -->
                    <input type="date" id="entradadata" name="data_nasc" class="form-control"> <!-- Cria um campo de entrada de data com o nome "data_nasc" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" id="botaoenviar" class="btn btn-primary" disabled>Enviar</button> <!-- Cria um botão de envio com o texto "Cadastrar" e a classe "btn btn-primary" do Bootstrap para estilização -->
                </div>
            </form>
        </div>
    </div>
</div>

<body>
    <script>
  // Seleciona os elementos do HTML
  const inputNome = document.getElementById('entradanome');
  const inputEmail = document.getElementById('entradamail');
  const inputSenha = document.getElementById('entradasenha');
  const inputData = document.getElementById('entradadata');
  const btnEnviar = document.getElementById('botaoenviar');

  // Função que checa se os campos estão preenchidos
  function checarInputs() {
    // .trim() remove espaços em branco que o usuário possa digitar para burlar
    const nomePreenchido = inputNome.value.trim().length > 0;
    const emailPreenchido = inputEmail.value.trim().length > 0;
    const senhaPreenchida = inputSenha.value.trim().length > 0;
    const dataPreenchida = inputData.value.trim().length > 0;
    // Se ambos tiverem pelo menos 1 letra, ativa o botão (remove o disabled)
    if (nomePreenchido && emailPreenchido && senhaPreenchida && dataPreenchida) {
      btnEnviar.disabled = false;
    } else {
      btnEnviar.disabled = true;
    }
  }

  // Escuta o evento de digitação ("input") em cada uma das caixas
  inputNome.addEventListener('input', checarInputs);
  inputEmail.addEventListener('input', checarInputs);
  inputSenha.addEventListener('input', checarInputs);
  inputData.addEventListener('input', checarInputs);
    </script>
</body>

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

  .form-control {
    width: 100%;
    max-width: 300px;
    
    /* Adicione estas linhas abaixo: */
    border: 1.5px solid #000000; /* 3px de espessura, linha sólida, cor preta */
    border-radius: 5px;        /* Deixa os cantos levemente arredondados (opcional) */
    padding: 5px;              /* Dá um espaço interno para o texto não colar na borda */
    outline: none;             /* Remove aquela borda padrão azulada quando clica */
    }

    /* Dica de ouro: mudar a cor da borda quando o usuário clica no input (Foco) */
  .form-control:focus {
    border-color: #000000;     /* Muda para azul quando está digitando */
    }
  
  /* Cor padrão quando o botão está desativado (cinza) */
  .btn btn-primary:disabled {
  background-color: #cccccc;
  color: #666666;
  cursor: not-allowed; /* Muda o ponteiro do mouse para indicar que está travado */
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
}

/* Cor quando o botão for ativado (azul) */
  .btn btn-primary:enabled {
  background-color: #007bff; /* Azul */
  color: white;
  cursor: pointer;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  transition: background 0.3s; /* Efeito suave ao mudar de cor */
}

/* Efeito de passar o mouse no botão azul */
   .btn btn-primary:enabled:hover {
  background-color: #0056b3; /* Azul mais escuro */
}

</style>

-----------------------------=SIGNUP.PHP=--------------------------------

-----------------------------=USER_LIST.PHP=--------------------------------

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Listar Usuários</h1>
            <?php
            $sql = "SELECT * FROM usuario"; // Cria uma consulta SQL para selecionar todos
            
            $res = $conn->query($sql);

            $qtd = $res->num_rows; // Obtém o número de linhas retornadas pela consulta SQL

            if ($qtd > 0) {
                print "<table class='table table-striped table-hover table-bordered'>"; // Cria uma tabela com classes do Bootstrap para estilização
                print "<tr>";
                    print "<tr>";
                    print "<th>#</th>";
                    print "<th>Nome</th>";
                    print "<th>Email</th>";
                    print "<th>Data de Nascimento</th>";
                    print "<th>Acões</th>";
                    print "</tr>";
                while ($row =$res->fetch_object())  { // Itera sobre cada linha retornada pela consulta SQL
                    print "<tr>";
                    print "<td>" . $row->id . "</td>";
                    print "<td>" . $row->nome . "</td>";
                    print "<td>" . $row->email . "</td>";
                    print "<td>" . $row->data_nasc . "</td>";
                    print "<td>
                        <button onclick=\"location.href='?aba=editar&id=" . $row->id . "'\" class='btn
                            btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir este usuário?')){location.href='?aba=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" class='btn
                            btn-danger'>Excluir</button>
                        </td>";
                    print "</tr>";
                }
                print "</table>";
                }else {
                print "<p class='alert alert-danger'>Não encontrou resultados!</p>"; // Exibe uma mensagem de alerta caso não haja resultados
                } 
            ?>


        </div>
    </div>
</div>

-----------------------------=USER_LIST.PHP=--------------------------------