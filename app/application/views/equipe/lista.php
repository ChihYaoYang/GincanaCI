<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="card-header bg-transparent"><i class="fas fa-list-alt"></i>Lista de Equipe</h3>
            <?php
            //Mensagem
            $mensagem = $this->session->flashdata('mensagem');
            if (isset($mensagem)) {
                echo '<div class="alert alert-success"> <i class="fas fa-check"></i> ' . $mensagem . '</div>';
            }
            $erro = $this->session->flashdata('erro');
            if (isset($erro)) {
                echo '<div class="alert alert-danger" role="alert"><i class="fas fa-times"></i> ' . $erro . '</div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nº de Equipe</th>
                            <th scope="col">Nome das Equipes</th>
                        </tr>
                    </thead>
                    <tbody class="bg-">
                        <?php
                        foreach ($equipe as $e) {
                            echo '<tr class="text-center">';
                                echo '<td>' . $e->id . '</td>';
                                echo '<td>' . $e->nome . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>