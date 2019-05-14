<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alteração de Pontuação</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"><i class="fas fa-edit"></i>Alteração de Pontuação</h3>
                <div class="card-body">
                    <?php echo validation_errors(); ?>
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
                        <input type="hidden" name="id" id="id" value="<?= (isset($pontos)) ? $pontos->id : ''; ?>">
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
                                    if (count($equipe) > 0) {
                                        foreach ($equipe as $e) {

                                            echo '<option ' . ($pontos->id_equipe == $e->id ? 'selected ' : null) . ' value="' . $e->id . '">' . $e->nome . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">Nenhuma Equipe cadastrada.</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 

                        <!----Nome da Prova--->
                        <div>
                            <label for="id_prova">Nome da Prova:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-book"></i></div>
                                </div>
                                <select id="id_prova" name="id_prova" class="form-control">
                                    <option value="">Seleciona uma Prova</option>
                                    <?php
                                    if (count($prova) > 0) {
                                        foreach ($prova as $p) {

                                            echo '<option ' . ($pontos->id_prova == $p->id ? 'selected ' : null) . 'value="' . $p->id . '">' . $p->nome . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">Nenhuma Prova cadastrada.</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 


                        <!----Nome da usuario--->
                        <div>
                            <label for="id_usuario">Nome da Usuário:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <select id="id_usuario" name="id_usuario" class="form-control">
                                    <option value="">Seleciona Usuário</option>
                                    <?php
                                    if (count($usuario) > 0) {
                                        foreach ($usuario as $u) {
                                            echo '<option ' . ($pontos->id_usuario == $u->id ? 'selected ' : null) . 'value="' . $u->id . '">' . $u->nome . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">Nenhuma Usuário cadastrada.</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 
                        <!--Pontos---->
                        <div>
                            <label for="pontos">Pontos:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fab fa-bitcoin"></i></div>
                                </div>
                                <input type="text" class="form-control" id="pontos" name="pontos" value="<?= (isset($pontos)) ? $pontos->pontos : '';?>"> 
                            </div>
                        </div>

                        <!--Data Hora---->
                        <div>
                            <label for="data_hora">Data / Hora:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                                <input type="datetime" class="form-control" id="data_hora" name="data_hora" value="<?= (isset($pontos)) ? $pontos->data_hora : ''; ?>"> 
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>