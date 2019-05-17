<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastra de Equipe</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"><i class="fas fa-edit"></i>Formulário de Equipe</h3>
                <div class="card-body">
                    <?php echo validation_errors(); ?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php
                        //Mensagem
                        echo ($this->session->flashdata('mensagem')) ? $this->session->flashdata('mensagem') : '';
                        ?>
                        <input type="hidden" name="id" id="id">
                        <div>
                            <label for="nome">Nome de Equipe:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-users"></i></div>
                                </div>
                                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo set_value('nome') ?>">
                            </div>
                        </div>

                        <!---Campo file--->
                        <div class="custom-file">
                            <label class="custom-file-label" for="image">Escolha arquivo</label>
                            <input type="file" class="custom-file-input" id="imagem" name="imagem" accept="image/jpg, image/jpeg, image/png">
                        </div>
                        <br><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Enviar</button>
                            <button type="reset" class="btn btn-primary"><i class="fas fa-redo"></i> Limpar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>