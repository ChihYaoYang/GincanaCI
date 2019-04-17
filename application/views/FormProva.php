<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista da Prova</title>
        <!---Bootstrap--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!----fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Formulário da Prova</h3>   
                    <!--Nome--->
                    <form method="POST" action="">
                    <div>
                        <label for="nome">Nome:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text"class="form-control" id="nome"  name="nome">
                            </div>
                    </div>

                    <div>
                        <label for="tempo">Tempo:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-clock"></i></div>
                            </div>
                            <input type="text"class="form-control" id="tempo"  name="tempo">
                            </div>
                    </div>        

                    <div>
                        <label for="descricao">Descrição:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-file-alt"></i></div>
                            </div>
                            <input type="text"class="form-control" id="descricao"  name="descricao">
                            </div>
                    </div>   


                    <div>
                        <label for="NumIntegrantes">Número de Integrantes:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-users"></i></div>
                            </div>
                            <input type="text"class="form-control" id="NumIntegrantes"  name="NumIntegrantes">
                            </div>
                    </div>  


                            <br>
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enviar</button>
                            <button type="reset" class="btn btn-primary"><i class="fas fa-edit"></i> Limpar</button>
                            </form>
                </div>
            </div>
        </div>
    </body>
</html>
