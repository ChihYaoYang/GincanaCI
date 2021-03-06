<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastra de Pontuação</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"><i class="fas fa-edit"></i>Formulário da Pontuação</h3>
                <div class="card-body">
                    <?php echo validation_errors(); ?>
                    <form method="POST" action="">
                        <?php
                        //Mensagem
                        echo ($this->session->flashdata('mensagem')) ? $this->session->flashdata('mensagem') : '';
                        ?>
                        <input type="hidden" name="id" id="id">
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
                                            echo '<option value="' . $e->id . '" ' . set_select('id_equipe', $e->id) . ' >' . $e->nome . '</option>';
                                        } else {
                                            echo '<option value="">Nenhuma Equipe cadastrada.</option>';
                                        }
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
                                    foreach ($prova as $p) {
                                        if ($e > 0) {
                                            echo '<option value="' . $p->id . '" ' . set_select('id_prova', $p->id) . '>' . $p->nome . '</option>';
                                        } else {
                                            echo '<option value="">Nenhuma Prova cadastrada.</option>';
                                        }
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
                                <input type="text" class="form-control" id="pontos" name="pontos" value="<?php echo set_value('pontos') ?>">
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enviar</button>
                            <button type="reset" class="btn btn-primary"><i class="fas fa-redo"></i> Limpar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>