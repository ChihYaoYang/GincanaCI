<style>
    .social:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
    }

    .social {
        -webkit-transform: scale(0.8);
        /* Browser Variations: */
        -moz-transform: scale(0.8);
        -o-transform: scale(0.8);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }

    /*houver*/
    #social-git:hover {
        color: #535c68;
    }

    #social-tw:hover {
        color: #4834d4;
    }

    #social-gp:hover {
        color: #d34836;
    }

    #social-em:hover {
        color: #f39c12;
    }

    .container {
        width: auto;
        max-width: auto;
        padding: 0 15px;
    }
</style>

<footer class="footer mt-auto py-5">
    <div class="container">
        <div class="fixed-bottom text-center center-block bg-dark">
            <a href="https://github.com/ChihYaoYang/GincanaCI"><i id="social-git" class="fab fa-github-square fa-3x social"></i></a>
            <a href="#"><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
            <a href="#"><i id="social-gp" class="fab fa-google-plus-square fa-3x social"></i></a>
            <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
    </div>
</footer>
<!--Bootstrap---->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Confirmation--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
<!---datatables--->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!----JS--->
<script>
    $(document).ready(function() {
        $('table:not(.semdatable)').DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ Registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ Resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
            }
        });
    });

    $('.delete').on('click',function(e){
        e.preventDefault();
        let url = $(this).attr('href');
        $.confirm({
            title: 'Aviso !',
            content: 'Você realmente deseja excluir ?',
            type: 'green',
            icon: 'fas fa-exclamation-circle',
            buttons: {
                ok: {
                    btnClass: 'btn-primary',
                    action: function() {
                        location.href = url;
                    }
                },
                cancel: function() {
                    $.alert('Processo cancelado !');
                }
            }
        });
    });
</script>
</body>

</html>