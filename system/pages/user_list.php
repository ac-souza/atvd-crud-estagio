<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Listar Usuários</h1>
            <?php
            $sql = "SELECT * FROM usuario";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<table class='table table-striped table-hover table-bordered'>";
                print "<tr>";
                print "<tr>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Email</th>";
                print "<th>Data de Nascimento</th>";
                print "<th>Acões</th>";
                print "</tr>";
                while ($row = $res->fetch_object()) {
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
            } else {
                print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
            }
            ?>


        </div>
    </div>
</div>