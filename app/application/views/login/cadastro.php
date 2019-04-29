<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Register</title>
    </head>
    <body style="background-color:#7ed6df;">
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 450px">
                <h3 class="card-header bg-primary text-center">Register</h3>
                <div class="card-body">
                    <form method="POST" action="">
                    <div>
                            <label for="nome">UserName:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text"class="form-control" name="nome" id="nome" value="">
                            </div>
                        </div>

                       
                       
                        <div>
                            <label for="email">E-mail:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="email"class="form-control" name="email" id="email" value="">
                            </div>
                        </div>

                        <div>
                            <label for="senha">Password:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password"class="form-control" name="senha" id="senha" value="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mr-2"><i class="fas fa-check"></i> Cadastrar</button>
                            <button type="reset" class="btn btn-warning"><i class="fas fa-redo"></i> Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>