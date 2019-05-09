<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Login de Usuário</title>
    </head>
    <body style="background-color:#7ed6df;">
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 450px">
                <h3 class="card-header bg-primary text-center"><i class="far fa-user"></i> Login de Usuário</h3>
                <div class="card-body">
                    <?php
                    $mensagem = $this->session->flashdata('mensagem');
                    if (isset($mensagem)) {
                        echo '<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-triangle"></i> ' . $mensagem . '</div>';
                    }
                    $mensagems = $this->session->flashdata('mensagems');
                    if (isset($mensagems)) {
                        echo '<div class="alert alert-success" role="alert"><i class="fas fa-check"></i></i> ' . $mensagems . '</div>';
                    }
                    ?>
                    <form method="POST" action="" name="login">
                        <div>
                            <label for="email">E-mail:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text"class="form-control" name="email" id="email" placeholder="Email or Username">
                            </div>
                        </div>

                        <div>
                            <label for="senha">Password:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password"class="form-control" name="senha" id="senha">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                        <a class="btn btn-secondary" href="<?= base_url().'Usuario/cadastrar' ?>">Register</a>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mr-2"><i class="fas fa-check"></i> Acessar</button>
                            <button type="reset" class="btn btn-warning"><i class="fas fa-redo"></i> Limpar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>