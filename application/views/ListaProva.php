<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista da Prova</title>
    <!---Bootstrap--->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!----fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <style>
    .breathe-div {
        color: white;
        line-height: 65px;
        width: 65px;
        height: 65px;
        border: 1px solid #2b92d4;
        border-radius: 25%;
        text-align: center;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
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
            box-shadow: 0 1px 2px rgba(0, 147, 223, 0.4), 0 1px 1px rgba(0, 147, 223, 0.1) inset;
        }

        100% {
            opacity: 1;
            border: 1px solid rgba(59, 235, 235, 0.7);
            box-shadow: 0 1px 30px #0093df, 0 1px 20px #0093df inset;
        }
    }
    </style>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="card-header bg-transparent"><i class="fas fa-list-alt"></i>Lista da Prova</h3>
                <!---Menu--->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="http://127.0.0.1/GincanaCI/index.php/Prova/listar"><i
                            class="fab fa-bootstrap h1 breathe-div" style="color: #0704B7;"></i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link btn btn-primary text-white mr-2"
                                    href="http://127.0.0.1/GincanaCI/index.php/Prova/listar">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-warning text-white"
                                    href="http://127.0.0.1/GincanaCI/index.php/Prova/cadastrar">Cadastrar</a>
                            </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

                <?php
                    $mensagem = $this->session->flashdata('mensagem');
                    if (isset($mensagem)) {
                        echo '<div class="alert alert-success"> <i class="fas fa-check"></i>' . $mensagem . '</div>';
                    }
                    ?>
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Tempo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Número de Integrantes</th>
                            <th scope="col">Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($prova as $dado) {
                                echo '<tr>';
                                echo '<td>' . $dado->nome . '</td>';
                                echo '<td>' . $dado->tempo . '</td>';
                                echo '<td>' . $dado->descricao . '</td>';
                                echo '<td>' . $dado->NumIntegrantes . '</td>';
                                //método
                                echo '<td>' . '<a href="' . $this->config->base_url() . 'index.php/Prova/deletar/' . $dado->id . '" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                ' ' . '<a href="' . $this->config->base_url() . 'index.php/Prova/alterar/' . $dado->id . '" class="btn btn-warning"><i class="fas fa-edit"></i> Alterar</a>'
                                . '</td>';
                                echo '</tr>';
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>