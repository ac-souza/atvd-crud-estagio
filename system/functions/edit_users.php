<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Editar Usuário</h1>
            <?php
            $sql = "SELECT * FROM usuario WHERE id = " . $_REQUEST['id'];
            $res = $conn->query($sql);
            $row = $res->fetch_object();
            ?>
            <form action="?aba=salvar" method="post"> <!-- Cria um formulário HTML que envia os dados para a página "salvar_usuarios.php" usando o método POST -->
                <input type="hidden" name="acao" value="editar"> <!-- Cria um campo oculto que envia a ação "editar" para o arquivo "salvar_usuarios.php" -->
                <input type="hidden" name="id" value="<?php echo $row->id; ?>"> <!-- Cria um campo oculto que envia o ID do usuário para o arquivo "salvar_usuarios.php" -->
                <div class="mb-3">
                    <label>Nome</label> <!-- Cria um rótulo para o campo de entrada de texto com o texto "Nome" -->
                    <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control"> <!-- Cria um campo de entrada de texto com o nome "nome" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3">
                    <label>Email</label> <!-- Cria um rótulo para o campo de entrada de texto com o texto "Email" -->
                    <input type="email" name="email" value="<?php echo $row->email; ?>" class="form-control"> <!-- Cria um campo de entrada de email com o nome "email" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3">
                    <label>Senha</label> <!-- Cria um rótulo para o campo de entrada de senha com o texto "Senha" -->
                    <input type="password" name="senha" class="form-control" required> <!-- Cria um campo de entrada de senha com o nome "senha" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3">
                    <label>Data de Nascimento</label> <!-- Cria um rótulo para o campo de entrada de data com o texto "Data de Nascimento" -->
                    <input type="date" name="data_nasc" value="<?php echo $row->data_nasc; ?>" class="form-control"> <!-- Cria um campo de entrada de data com o nome "data_nasc" e a classe "form-control" do Bootstrap para estilização -->
                </div>

                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Enviar</button> <!-- Cria um botão de envio com o texto "Cadastrar" e a classe "btn btn-primary" do Bootstrap para estilização -->
                </div>
            </form>
        </div>
    </div>
</div>

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
    
    .form-control:focus {
        border-color: #000000;     /* Muda para azul quando está digitando */
        }
</style>