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