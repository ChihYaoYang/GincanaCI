<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perfil de Usuário</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"> <i class="fas fa-edit"></i>Perfil de Usuário</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-dark table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                echo '<tr class="text-center">';
                                echo '<td>' . $this->session->userdata('nome') . '</td>';
                                echo '<td>' . $this->session->userdata('email') . '</td>';
                                echo '</tr>';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>