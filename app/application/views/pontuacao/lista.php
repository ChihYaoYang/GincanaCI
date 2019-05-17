<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de Pontuação</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col">
            <h3 class="card-header bg-transparent"><i class="fas fa-list-alt"></i>Lista de Pontuação</h3>
            <?php
            //Mensagem
            echo ($this->session->flashdata('mensagem')) ? $this->session->flashdata('mensagem') : '';
            ?>
            <div class="table-responsive">
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nome da Equipe</th>
                            <th scope="col">Nome da Prova</th>
                            <th scope="col">Cadastrado por</th>
                            <th scope="col">Pontos</th>
                            <th scope="col">Data Hora</th>
                            <th scope="col">Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($pontuacao) > 0) {
                            foreach ($pontuacao as $ponto) {
                                echo '<tr class="text-center">';
                                echo '<td>' . $ponto->nome_equipe . '</td>';
                                echo '<td>' . $ponto->nome_prova . '</td>';
                                echo '<td>' . $ponto->nome_usuario . '</td>';
                                echo '<td>' . $ponto->pontos . '</td>';
                                echo '<td>' . $ponto->data_hora . '</td>';
                                echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . base_url() . 'Pontuacao/deletar/' . $ponto->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                    '<a class="btn btn-sm btn-outline-warning" href="' . base_url() . 'Pontuacao/alterar/' . $ponto->id . '"><i class="fas fa-edit"></i> Alterar</a>'
                                    . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="6">Nenhum Pontuação cadastrado</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>