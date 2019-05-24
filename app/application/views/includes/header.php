<!DOCTYPE html>
<html>

    <head>
        <title>Sistema Gincana</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!---Bootstrap CSS--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Fontawesome--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!---datatables--->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    </head>

    <body>
        <style>
            .breathe-div {
                cursor: Default;
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

            .username {
                border: 1px solid white;
                border-radius: 15%;
            }
        </style>
        <!---Menu--->
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a class="navbar-brand breathe-div" href="<?= base_url(); ?>"><i class="fas fa-store"></i> Sistema Gincana</a>
            <!---Menu mobile--->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--Cadastro Prova--->
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Prova</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= base_url() . 'Prova/index' ?>" class="dropdown-item"><i class="fas fa-list-ul"></i> Lista de Prova</a>
                            <a href="<?= base_url() . 'Prova/cadastrar' ?>" class="dropdown-item"><i class="far fa-edit"></i> Cadastra de Prova</a>
                        </div>
                    </li>
                    <!--Cadastro Equipe--->
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Equipes</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= base_url() . 'Equipe/index' ?>" class="dropdown-item"><i class="fas fa-list-ul"></i> Lista de Equipe</a>
                            <a href="<?= base_url() . 'Equipe/cadastrar' ?>" class="dropdown-item"><i class="far fa-edit"></i> Cadastra de Equipe</a>
                        </div>
                    </li>
                    <!--Cadastro Integrante--->
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Integrantes</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= base_url() . 'Integrante/index' ?>" class="dropdown-item"><i class="fas fa-list-ul"></i> Integrante da Lista</a>
                            <a href="<?= base_url() . 'Integrante/cadastrar' ?>" class="dropdown-item"><i class="far fa-edit"></i> Cadastra de Integrante</a>
                        </div>
                    </li>
                    <!--Cadastro Pontuação--->
                    <li class="nav-item dropdown">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Pontuação</a>
                        <div class="dropdown-menu" aria-labelledby="menuCliente">
                            <a href="<?= base_url() . 'Pontuacao/index' ?>" class="dropdown-item"><i class="fas fa-list-ul"></i> Lista de Pontuação</a>
                            <a href="<?= base_url() . 'Pontuacao/cadastrar' ?>" class="dropdown-item"><i class="far fa-edit"></i> Cadastra de Pontuação</a>
                        </div>
                    </li>
                    <!---Rank---->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url() . 'Result/index' ?>">Rank</a>
                    </li>
                </ul>
                <!---Campo User--->
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown pull-left">
                        <a href="#" id="menuCliente" class="nav-link dropdown-toggle text-light" data-toggle="dropdown"><i class="fas fa-user username"></i> <?= $this->session->userdata('nome'); ?></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuCliente">
                            <a class="dropdown-item" href="<?= base_url() . 'user/index' ?>"><i class="fas fa-user username"></i> Perfil de Usuário</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url() . 'Usuario/sair' ?>"><i class="fas fa-sign-out-alt"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>