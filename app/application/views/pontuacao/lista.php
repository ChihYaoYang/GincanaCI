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
                            <th scope="col">Id da Equipe</th>
                            <th scope="col">Id da Prova</th>
                            <th scope="col">Id do Usuario</th>
                            <th scope="col">Pontos</th>
                            <th scope="col">Data Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pontuacao as $ponto) {
                            echo '<tr class="text-center">';
                            echo '<td>' .$ponto->id_equipe .'</td>';
                            echo '<td>' .$ponto->id_prova .'</td>';
                            echo '<td>' .$ponto->id_usuario .'</td>';
                            echo '<td>' .$ponto->pontos .'</td>';
                            echo '<td>' .$ponto->data_hora .'</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>