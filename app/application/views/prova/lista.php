<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="card-header bg-transparent"><i class="fas fa-list-alt"></i>Lista da Prova</h3>
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
                        <tr class="text-center">
                            <th scope="col">Nome</th>
                            <th scope="col">Tempo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Número de Integrantes</th>
                            <th scope="col">Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($prova as $dado) {
                            echo '<tr class="text-center">';
                            echo '<td>' . $dado->nome . '</td>';
                            echo '<td>' . $dado->tempo . '</td>';
                            echo '<td>' . $dado->descricao . '</td>';
                            echo '<td>' . $dado->NumIntegrantes . '</td>';
                            //método
                            echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . $this->config->base_url() . 'Prova/deletar/' . $dado->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                            '<a class="btn btn-sm btn-outline-warning" href="' . $this->config->base_url() . 'Prova/alterar/' . $dado->id . '"><i class="fas fa-edit"></i> Alterar</a>'
                            . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>