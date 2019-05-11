<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastra de Prova</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"><i class="fas fa-edit"></i>Formulário da Prova</h3>
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
                        <input type="hidden" name="id" id="id">
                        <div>
                            <label for="nome">Nome:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo set_value('nome') ?>">
                            </div>
                        </div>

                        <div>
                            <label for="tempo">Tempo:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                                <input type="text" class="form-control" id="tempo" name="tempo" value="<?php echo set_value('tempo') ?>">
                               
                            </div>
                        </div>

                        <div>
                            <label for="descricao">Descrição:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-file-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo set_value('descricao') ?>">
                            </div>
                        </div>


                        <div>
                            <label for="NumIntegrantes">Número de Integrantes:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-users"></i></div>
                                </div>
                                <input type="text" class="form-control" id="NumIntegrantes" name="NumIntegrantes" value="<?php echo set_value('NumIntegrantes') ?>"> 
                            </div>
                        </div>


                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                Enviar</button>
                            <button type="reset" class="btn btn-primary"><i class="fas fa-edit"></i>
                                Limpar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>