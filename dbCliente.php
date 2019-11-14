<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sistema de Fidelização</title>
    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- modal -->
	<link rel="stylesheet" href="css/modal/modal.css">
	<link rel="stylesheet" href="css/modal/style-modal.css">
    <!-- icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>    
        <!-- inicio nav horizontal -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand text-white" href="#">Sistema de Fidelização</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                </ul>
                <span class="navbar-item">
                <a class="nav-link text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Sair <span class="sr-only">(current)</span></a>
                </span>
            </div>
        </nav>
        <!-- fim nav horizontal -->
        <!-- inicio card head -->
        <div class="card  text-center">
            <div class="card-header bg-success text-light font-weight-bold">
                Área do Cliente
            </div>
        </div>
        <!-- fim card head -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link text-success active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <i class="fas fa-ticket-alt"></i> Seus Bilhetes
                </a>
                <!-- <a class="nav-item nav-link text-success" id="nav-infoCliente-tab" data-toggle="tab" href="#nav-infoCliente" role="tab" aria-controls="nav-infoCliente" aria-selected="false">
                    <i class="fas fa-info"></i> Suas Informações
                </a> -->
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <!-- cupons cliente =============================================================================================================-->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Seus Bilhetes Ativos</h2>
                                <span class='text-success'>* lista de empresas com seus cupons promocionais ativos</span>
                                <p>
                                    <form action='#' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeEstabelecimento' class="form-control" value="McDonalds" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                    <input type="text" name='nomeProduto' class="form-control" value="Cerveja" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-eye"></i> Detalhes</button>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeEstabelecimento' class="form-control" value="Habib's" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                    <input type="text" name='nomeProduto' class="form-control" value="Cachaça" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-eye"></i> Detalhes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>    
                        </div>
                    </div>
                    <!-- fim grid 01 -->

                     <!-- inicio grid 02 -->
                     <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-dark text-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-white'>Detalhes</h2>
                                <span class='text-success'>* este é seu blihete promocional, imprima e leve-o no estabelecimento</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                    <div class='modal-body'>
                                        <div class='form-group text-left'>
                                            <label>Nome do Estabelecimento</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name='nomeEstabelecimento' class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class='form-group text-left'>
                                            <label>Nome do Produto</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name='nomeProduto' class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class='form-group text-left'>
                                            <label>Código do Cupom</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name='codCupom' class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class='modal-footer'>
                                        <a href="printCliente.php" type="button" class="btn btn-success" title="Gerar Bilhete" target="_blank"><i class="fas fa-ticket-alt"></i> Gerar Bilhete</a>
                                        </div>
                                    </div>
                                </form>
                                </p>
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>
        </div>
            
    
    <!--  inicio Footer -->
    <footer class="footer navbar-fixed-bottom bg-dark">
        <div class="footer-copyright text-center py-3 text-light">© Desenvolvido por FJK - 2019</div>
    </footer>
    <!-- fim Footer -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <!-- modal js -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</body>