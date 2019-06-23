<?php require_once '.\core\main\controller\IndexController.php';?>
<!doctype html>
    <html lang="pt-br">
        <head>
            <!-- Required meta tags -->
            <title>teste</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="">
                <link rel="stylesheet" href="node_modules/bootstrap/compilados/bootstrap.css">
            <link rel="stylesheet" href="node_modules/bootstrap/compilados/style.css">
    </head>

    <body>
        <!--navbar-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light cor-primaria">
            <div class="container">
                <a class="navbar-brand" href="#">Lampadascan</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio"> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#noticias"> Novidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Twitter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Sobre </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Obras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Staff</a>
                        </li>
                    </ul>

                    <form class="form-inline ml-auto" action="">
                        <input class="form-control ml-1 mr-1" type="search" name="" id="" placeholder="Pesquisar...">
                        <button class="btn btn-default" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>

        <!--logo inicial-->
        <div id="inicio" class="container-fluid cor-primaria">
            <div class="row justify-content-sm-center">
                <div class="col-md-5">
                    <img id="inicio_imagem" class="imagem" src="core/resources/img/estrutura/lampada_inicio.png">
                    <img id="inicio_logo" class="logo" src="core/resources/img/estrutura/lampada_logo.png">
                </div>
            </div>
        </div>

        <!--descartavel// serve apenas para que o carrocel fique melhor quandos e pula para ele-->
        <div id="noticias" class="container">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h1 class="display-3">Novidades</h1>
                    <p>O que vem acontecendo no nosso minimundo.</p>
                </div>
            </div>
        </div>


        <!--carrocel(noticias)-->
        <div id="noticias-carrocel" class="container">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="core/resources/img/mangas/Asobi_asobase.png" class="img-fluid d-block">
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h3>manga</h3>
                            <p>um um manga q vai vir no futuro longicuo</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="core/resources/img/mangas/Kiznaiver.png" class="img-fluid d-block">
                        <div class="carousel-caption  d-none d-md-block text-dark">
                            <h3>manga</h3>
                            <p>um um manga q vai vir no futuro longicuo</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="core/resources/img/mangas/Hisone_to_Maso-tan_nao_no_Sora.png" class="img-fluid d-block">
                        <div class="carousel-caption  d-none d-md-block text-dark">
                            <h3>manga</h3>
                            <p>um um manga q vai vir no futuro longicuo</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Proximo</span>
                </a>
            </div>
        </div>




        <!--personagens (mangas)-->
        <div id="personagens" class="container-fluid cor-primaria ">
            <div class="container">        
                <?php printarPersonagens();?>
            </div>
        </div>
    


        <!--chama modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">chama modal</button>



        <!--cards (mangas)// isso não ficará aqui-->
        <div class="row justify-content-sm-center">
            <div class="col-sm-10 mb-5 col-md-4 ">
                <div class="card">
                    <div class="card-header text-muted">
                        Hakata_tonkotsu_ramens
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="core/resources/img/mangas/Hakata_tonkotsu_ramens.png">
                        <h2 class="card-tittle">titulo</h2>
                        <h4 class="card-subtittle mb-2 text-muted">sub-titul</h4>
                        <p class="card-text">uma coisa aleatoria</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">texto 1</li>
                        <li class="list-group-item">texto 2</li>
                        <li class="list-group-item">texto 3</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">link1</a>
                        <a href="#" class="card-link">link2</a>
                        <a href="#" class="card-link">link3</a>
                    </div>
                </div>
            </div>
        </div>





        <!--MODAL-->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-tittle">Login lâmpadascan</h4>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <span>login:</span><input type="text" name="login" id="login"><br><br>
                            <span>senha:</span><input type="password" name="senha" id="senha">
                        </form>
                    </div>
                    <div class="modal=footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">logar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

        <!--efeito animação swing-->
        <script>
            $(function() {
                $('a[href^="#"]').click(function() {
                    if ($(this).attr("href") !== "#carousel") {
                        var href = $(this).attr("href");
                        var velocidade = 500;
                        var destino = $(href == "#" || href == "" ? 'html' : href);
                        var posicao = destino.offset().top;
                        $('body,html').animate({
                            scrollTop: posicao
                        }, velocidade, 'swing');
                        return false;
                    }
                });
            });
        </script>
    </body>

    </html>