<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Lista da Prova</title>
        <!---Bootstrap--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!----fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
              integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="card-header bg-transparent"><i class="fas fa-list-alt"></i>Lista da Prova</h3>
                    <?php
                    //Mensagem
                    $mensagem = $this->session->flashdata('mensagem');
                    if (isset($mensagem)) {
                        echo '<div class="alert alert-success"> <i class="fas fa-check"></i> ' . $mensagem . '</div>';
                    }
                    $erro = $this->session->flashdata('erro');
                    if (isset($erro)) {
                        echo '<div class="alert alert-danger" role="alert"><i class="fas fa-times"></i> ' . $erro . '</div>';
                }
                    ?>
                    <table class="table table-dark table-bordered">
                        <thead>
                            <tr class="text-center">
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
                                echo '<tr class="text-center">';
                                echo '<td>' . $dado->nome . '</td>';
                                echo '<td>' . $dado->tempo . '</td>';
                                echo '<td>' . $dado->descricao . '</td>';
                                echo '<td>' . $dado->NumIntegrantes . '</td>';
                                //método
                                echo '<td class="text-right">' . '<a class="btn btn-sm btn-outline-danger mr-2" href="' . $this->config->base_url() . 'Prova/deletar/' . $dado->id . '"><i class="fas fa-trash-alt"></i> Delete</a>' .
                                 '<a class="btn btn-sm btn-outline-warning" href="' . $this->config->base_url() . 'Prova/alterar/' . $dado->id . '"><i class="fas fa-edit"></i> Alterar</a>'
                                . '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Bootstrap---->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>

</html>