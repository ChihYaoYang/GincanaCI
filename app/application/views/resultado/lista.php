<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de Rank</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col">
            <h3 class="card-header bg-transparent"><i class="fas fa-flag-checkered"></i>Rank</h3>
            <div class="table-responsive">
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Posição</th>
                            <th scope="col">Nome da Equipe</th>
                            <th scope="col">Pontos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($resultado as $key => $resul) {
                            $k = $key + 1;
                            echo '<tr class="text-center">';
                            //Se for primeiro
                            if ($k == 1) {
                                echo '<td>' . $k . 'º <i class="fas fa-trophy" style="color:#f9ca24;"></i></td>';
                            } else if ($k == 2) {
                                echo '<td>' . $k . 'º <i class="fas fa-medal" style="color:#E5E5E5;"></i></td>';
                            } else if ($k == 3) {
                                echo '<td>' . $k . 'º <i class="fas fa-award" style="color:#A57164;"></i></td>';
                            } else {
                                echo '<td>' . $k . 'º </td>';
                            }
                            echo '<td>' . $resul->nome_equipe . '</td>';
                            echo '<td>' . $resul->pontos . '</td>';
                            echo '</tr>';
                        }


                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>