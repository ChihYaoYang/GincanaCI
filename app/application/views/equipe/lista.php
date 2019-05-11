<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de Equipe</li>
        </ol>
    </nav>
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
                            <th scope="col">Nome das Equipes</th>
                            <th scope="col">Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($equipe) > 0) {
                            foreach ($equipe as $e) {
                                echo '<tr class="text-center">';
                                echo '<td>' . $e->nome . '</td>';
                                echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . base_url() . 'Equipe/deletar/' . $e->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                '<a class="btn btn-sm btn-outline-warning" href="' . base_url() . 'Equipe/alterar/' . $e->id . '"><i class="fas fa-edit"></i> Alterar</a>'
                                . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="2">Nenhum Equipe cadastrado</td></tr>';
                        }
                        ?>
                    <tfoot>
                        <tr>
                            <th scope="row">Total de Equipe</th>
                            <td colspan="2" class="text-right"><?php echo $total; ?></td>
                        </tr>
                    </tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>