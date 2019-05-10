<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alteração de Integrante</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"> <i class="fas fa-edit"></i>Alteração de Integrante</h3>
                <div class="card-body">
                    <form method="POST" action="">
                        <?php
                        $mensagem = $this->session->flashdata('mensagem');
                        if (isset($mensagem)) {
                            echo '<div class="alert alert-success"> <i class="fas fa-check"></i>' . $mensagem . '</div>';
                        }
                        $erro = $this->session->flashdata('erro');
                        if (isset($erro)) {
                            echo '<div class="alert alert-danger" role="alert"><i class="fas fa-times"></i> ' . $erro . '</div>';
                        }
                        ?>
                        <input type="hidden" name="id" id="id" value="<?= (isset($integrante)) ? $integrante->id : ''; ?>">
                        <!----Nome da Equipe--->
                        <div>
                            <label for="id_equipe">Nome da Equipe:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-users"></i></div>
                                </div>
                                <select id="id_equipe" name="id_equipe" class="form-control">
                                    <option value="">Seleciona uma Equipe</option>
                                    <?php
                                    foreach ($equipe as $e) {
                                        if ($e > 0) {
                                            echo '<option ' . ($integrante->id_equipe == $e->id ? 'selected' : null) . ' value="' . $e->id . '">' . $e->nome . '</option>';
                                        } else {
                                            echo '<option value="">Nenhuma Equipe cadastrada.</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>    
                        <!---Nome----->
                        <div>
                            <label for="nome">Nome do Integrante:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?= (isset($integrante)) ? $integrante->nome : ''; ?>">
                            </div>
                        </div>
                        <!--Data_Nascimento---->
                        <div>
                            <label for="data_nasc">Data de Nascimento:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-week"></i></div>
                                </div>
                                <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?= (isset($integrante)) ? $integrante->data_nasc : ''; ?>">
                            </div>
                        </div>
                        <!--RG------>
                        <div>
                            <label for="rg">RG:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                                </div>
                                <input type="text" class="form-control" id="rg" name="rg" value="<?= (isset($integrante)) ? $integrante->rg : ''; ?>">
                            </div>
                        </div>

                        <div>
                            <label for="cpf">CPF:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                                </div>
                                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= (isset($integrante)) ? $integrante->cpf : ''; ?>">
                            </div>
                        </div>


                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Enviar</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>