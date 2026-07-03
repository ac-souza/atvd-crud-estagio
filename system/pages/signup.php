<div class="container">
  <div class="row">
    <div class="col mt-5">
      <h1>Criar Usuário</h1>
      <form action="?aba=salvar" method="post">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
          <label>Nome</label>
          <input type="text" id="entradanome" name="nome" class="form-control">
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" id="entradamail" name="email" class="form-control">
        </div>

        <div class="mb-3">
          <label>Senha</label>
          <input type="password" id="entradasenha" name="senha" class="form-control">
        </div>

        <div class="mb-3">
          <label>Data de Nascimento</label>
          <input type="date" id="entradadata" name="data_nasc" class="form-control">
        </div>

        <div class="mb-3 d-flex justify-content-end">
          <button type="submit" id="botaoenviar" class="btn btn-primary" disabled>Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<body>
  <script>
    const inputNome = document.getElementById('entradanome');
    const inputEmail = document.getElementById('entradamail');
    const inputSenha = document.getElementById('entradasenha');
    const inputData = document.getElementById('entradadata');
    const btnEnviar = document.getElementById('botaoenviar');

    function checarInputs() {
      const nomePreenchido = inputNome.value.trim().length > 0;
      const emailPreenchido = inputEmail.value.trim().length > 0;
      const senhaPreenchida = inputSenha.value.trim().length > 0;
      const dataPreenchida = inputData.value.trim().length > 0;

      if (nomePreenchido && emailPreenchido && senhaPreenchida && dataPreenchida) {
        btnEnviar.disabled = false;
      } else {
        btnEnviar.disabled = true;
      }
    }

    inputNome.addEventListener('input', checarInputs);
    inputEmail.addEventListener('input', checarInputs);
    inputSenha.addEventListener('input', checarInputs);
    inputData.addEventListener('input', checarInputs);
  </script>
</body>

<style>
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
    width: 100%;
    margin-top: 50px;
    transform: translateY(-50px);
  }

  .form-control {
    width: 100%;
    max-width: 300px;
    border: 1.5px solid #000000;
    border-radius: 5px;
    padding: 5px;
    outline: none;
  }

  .form-control:focus {
    border-color: #000000;
  }

  .btn btn-primary:disabled {
    background-color: #cccccc;
    color: #666666;
    cursor: not-allowed;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
  }

  .btn btn-primary:enabled {
    background-color: #007bff;
    /* Azul */
    color: white;
    cursor: pointer;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background 0.3s;
  }

  .btn btn-primary:enabled:hover {
    background-color: #0056b3;
  }
</style>