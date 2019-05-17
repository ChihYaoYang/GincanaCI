<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Integrante da Lista</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col">
            <h3 class="card-header bg-transparent"><i class="fas fa-list-alt"></i>Integrante da Lista</h3>
            <?php
            //Mensagem
            echo ($this->session->flashdata('mensagem')) ? $this->session->flashdata('mensagem') : '';
            ?>
            <div class="table-responsive">
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nome da Equipe</th>
                            <th scope="col">Nome do Integrante</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($integrante) > 0) {
                            foreach ($integrante as $integ) {
                                echo '<tr class="text-center">';
                                echo '<td>' . $integ->nome_equipe . '</td>';
                                echo '<td>' . $integ->nome . '</td>';
                                echo '<td>' . $integ->data_nasc . '</td>';
                                echo '<td>' . $integ->rg . '</td>';
                                echo '<td>' . $integ->cpf . '</td>';
                                echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . base_url() . 'Integrante/deletar/' . $integ->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                    '<a class="btn btn-sm btn-outline-warning" href="' . base_url() . 'Integrante/alterar/' . $integ->id . '"><i class="fas fa-edit"></i> Alterar</a>'
                                    . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="6">Nenhum Integrante cadastrado</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>