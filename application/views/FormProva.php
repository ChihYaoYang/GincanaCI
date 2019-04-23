<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário da Prova</title>
        <!---Bootstrap--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <!----fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <style>
            button {
                box-shadow: 0 4px 15px 0 rgba(13,44,200,1);
            }
            .breathe-div {
                border: 1px solid #2b92d4;
                border-radius: 15%;
                box-shadow: 0 1px 2px rgba(255, 255, 255, 1);
                overflow: hidden;
                -webkit-animation-timing-function: linear;
                /*緩動 分為 "linear" "ease-in" "ease-out" "ease-in-out" */
                -webkit-animation-name: breathe;
                -webkit-animation-duration: 1500ms;
                /* time animation*/
                -webkit-animation-iteration-count: infinite;
                /*loop animation*/
                -webkit-animation-direction: alternate;
                /*呼吸 animation*/
            }

            @-webkit-keyframes breathe {
                0% {
                    opacity: .4;
                    box-shadow: 0 1px 2px rgba(204, 193, 193, 0.30), 0 1px 1px rgba(204, 193, 193, 0.30) inset;
                }

                100% {
                    opacity: 1;
                    border: 1px solid rgba(255, 255, 255, 1);
                    box-shadow: 0 1px 30px #0093df, 0 1px 20px #0093df inset;
                }
            }
        </style>

        <?php
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        $erro = $this->session->flashdata('erro');
            if (isset($erro)) {
                echo '<div class="alert alert-danger" role="alert">' . $erro . '</div>';
        }
        ?>
               <!---Menu--->
               <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a class="navbar-brand breathe-div" href="<?= $this->config->base_url(); ?>"><i class="fas fa-store"></i> Sistema Gincana</a>
            <!---Menu mobile--->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle" data-toggle="dropdown">Clientes</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= $this->config->base_url() . 'index.php/Prova/listar' ?>" class="dropdown-item">Listar</a>
                            <a href="<?= $this->config->base_url() . 'index.php/Prova/cadastrar' ?>" class="dropdown-item">Cadastrar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col"><div class="col-8 offset-md-2">
                        <!---Card--->
                        <div class="card">
                            <h3 class="card-header bg-transparent"><i class="fas fa-arrow-left"></i> <a href=<?= $this->config->base_url() . 'index.php/Prova/listar' ?>>Back</a><br><i class="fas fa-edit"></i>Formulário da Prova</h3>
                            <div class="card-body">  
                                <form method="POST" action="">
                                    <!--$data['prova'] controller-->
                                    <input type="hidden" name="id" id="id" value="<?= (isset($prova)) ? $prova->id : ''; ?>">
                                    <div>
                                        <label for="nome">Nome:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div>
                                            <input type="text"class="form-control" id="nome"  name="nome" value="<?= (isset($prova)) ? $prova->nome : ''; ?>">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="tempo">Tempo:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                            </div>
                                            <input type="text"class="form-control" id="tempo"  name="tempo" value="<?= (isset($prova)) ? $prova->tempo : ''; ?>">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">h</div>
                                            </div>
                                        </div>
                                    </div>        

                                    <div>
                                        <label for="descricao">Descrição:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-file-alt"></i></div>
                                            </div>
                                            <input type="text"class="form-control" id="descricao"  name="descricao" value="<?= (isset($prova)) ? $prova->descricao : ''; ?>">
                                        </div>
                                    </div>   


                                    <div>
                                        <label for="NumIntegrantes">Número de Integrantes:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-users"></i></div>
                                            </div>
                                            <input type="text"class="form-control" id="NumIntegrantes"  name="NumIntegrantes" value="<?= (isset($prova)) ? $prova->NumIntegrantes : ''; ?>">
                                        </div>
                                    </div>  


                                    <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enviar</button>
                                        <button type="reset" class="btn btn-primary"><i class="fas fa-edit"></i> Limpar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---Bootstrap---->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
    </body>
</html>
