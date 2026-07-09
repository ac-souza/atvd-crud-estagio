<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h1>Usuários</h1>
                <?php
                // Cria uma consulta SQL para selecionar todos
                $sql = "SELECT * FROM usuarios";
                $res = $conn->query($sql);

                // Obtém o número de linhas retornadas pela consulta SQL
                $qtd = $res->num_rows;

                if ($qtd > 0) {
                    print "<table class='table table-striped table-hover table-bordered'>";
                    print "<tr>";
                    print "<th>#</th>";
                    print "<th>Nome</th>";
                    print "<th>Email</th>";
                    print "<th>Login</th>";
                    print "<th>Status</th>";
                    print "<th>Ações</th>";
                    print "</tr>";

                    // Itera sobre cada linha retornada pela consulta SQL
                    while ($row = $res->fetch_object()) {

                        // Pega o número (1 ou 0) do banco de dados (tipo boolean/tinyint)
                        $status_db = $row->status;

                        // Traduz o booleano para Texto e Cor do Bootstrap
                        if ($status_db == 1) {
                            $cor_badge = 'bg-success'; // Verde
                            $status_texto = 'Ativo';
                        } else {
                            $cor_badge = 'bg-secondary'; // Cinza
                            $status_texto = 'Inativo';
                        }

                        print "<tr>";
                        print "<td>" . $row->id . "</td>";
                        print "<td>" . $row->nome . "</td>";
                        print "<td>" . $row->email . "</td>";
                        print "<td>" . $row->login . "</td>";

                        // Coluna do Status com a Badge já processada
                        print "<td><span class='badge " . $cor_badge . "'>" . $status_texto . "</span></td>";

                        // Coluna das Ações (Editar e Excluir)
                        print "<td>
                            <button onclick=\"location.href='?aba=editar&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir este usuário?')){location.href='?aba=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
                            </td>";
                        print "</tr>";
                    }

                    print "</table>";
                } else {
                    // Exibe uma mensagem de alerta caso não haja resultados
                    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>