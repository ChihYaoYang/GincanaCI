<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alteração de Equipe</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <!---Card--->
            <div class="card">
                <h3 class="card-header bg-transparent"><i class="fas fa-edit"></i>Alteração de Equipe</h3>
                <div class="card-body">
                    <?php echo validation_errors(); ?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php
                        //Mensagem
                        echo ($this->session->flashdata('mensagem')) ? $this->session->flashdata('mensagem') : '';
                        ?>

                        <input type="hidden" name="id" id="id" value="<?= isset($equipe) ? $equipe->id : ''; ?>">
                        <div>
                            <label for="nome">Nome de Equipe:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-users"></i></div>
                                </div>
                                <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($equipe) ? $equipe->nome : ''; ?>">
                            </div>
                        </div>

                        <!---Campo file--->
                        <div class="custom-file">
                            <label class="custom-file-label" for="image">Escolha arquivo</label>
                            <input type="file" class="custom-file-input" id="imagem" name="imagem" accept="image/jpg, image/jpeg, image/png">
                            <br><br>
                            <?php
                            if (!empty($equipe->imagem) && file_exists('public/uploads/' . $equipe->imagem)) {
                                echo '<img src="' . base_url('public/uploads/' . $equipe->imagem) . '" width="100" height="100">';
                            }
                            ?>
                        </div>
                        <br><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>