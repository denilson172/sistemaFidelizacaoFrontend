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
            <div class="card-header bg-info text-light font-weight-bold">
                Área Empresarial
            </div>
        </div>
        <!-- fim card head -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link text-info active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <i class="fas fa-ticket-alt"></i> Cupons
                </a>
                <a class="nav-item nav-link text-info" id="nav-promocoes-tab" data-toggle="tab" href="#nav-promocoes" role="tab" aria-controls="nav-promocoes" aria-selected="false">
                    <i class="fas fa-hand-holding-usd"></i> Promoções
                </a>
                <a class="nav-item nav-link text-info" id="nav-produtos-tab" data-toggle="tab" href="#nav-produtos" role="tab" aria-controls="nav-produtos" aria-selected="false">
                    <i class="fas fa-wine-bottle"></i> Produtos
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <!-- cupons =============================================================================================================-->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Gerar Cupom</h2>
                                <p>
                                    <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>CPF do Cliente</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='cpfCliente' class="form-control" placeholder="CPF" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Código do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeCliente' class="form-control" placeholder="Código" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Estabelecimento</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='estabelecimento' class="form-control" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                </div>
                                            </div>

                                            <div class='modal-footer'>
                                                <input type='submit' name='submitCadastroCupom' class='btn btn-success btn-lg btn-block btn-sm' title='Gerar Cupom' value='Gerar'>
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
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Buscar Cupom</h2>
                                <span class='text-info'>* para incrementar a pontuação, busque pelo cupom correspondente</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>CPF do Cliente</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='cpfCliente' class="form-control" placeholder="Ex. 1222" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>

                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Nome do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeProduto' class="form-control" placeholder="Ex. Pizza" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>
                                            </div>

                                            <div class='modal-footer'>
                                                <input type='submit' name='submitCadastroCupom' class='btn btn-success btn-lg btn-block btn-sm' title='Buscar Cupons' value='Buscar'>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div> 

                        <div class="col py-3 px-md-5 border bg-dark text-white">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <div class="text-right">
                                <div class="container">
                                    <div class="row">
                                        <!-- botão de incremento -->
                                        <div class="col-sm">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" title='Incrementar Pontuação' aria-label="Recipient's username" aria-describedby="button-incremento">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="button-incremento" title='Incrementar Pontuação'><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- botão de decremento -->
                                        <div class="col-sm">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" title='Decrementar Pontuação' aria-label="Recipient's username" aria-describedby="button-incremento">
                                                <div class="input-group-append">
                                                    <button class="btn btn-warning" type="button" id="button-incremento" title='Decrementar Pontuação'><i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- botão de decremento -->
                                         <div class="col-sm">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="Apagar" title="Excluir Cupom" aria-label="Recipient's username" aria-describedby="button-incremento" disabled>
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger" type="button" id="button-incremento" title='Excluir Cupom'><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Cód. Cupom</th>
                                            <th scope="col">Cód. Cliente</th>
                                            <th scope="col">Cód. Produto</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col" class="bg-success text-light">Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <td>João</td>
                                            <td>Pizza</td>
                                            <th scope="row" class="bg-success text-light">9</th>
                                        </tr>                                        
                                    </tbody>
                                </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>
                        </div> 
                    </div>
                    <!-- fim grid 02 -->
                </div>  
            </div>
            <!-- promoções =============================================================================================================-->
            <div class="tab-pane fade" id="nav-promocoes" role="tabpanel" aria-labelledby="nav-promocoes-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-danger'>Promoções - Pendentes</h2>
                                <span class='text-danger'>* bilhetes de promoções que não foram enviados</span>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Código</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col" class="bg-success text-white">Pontuação</th>
                                            <th scope="col">Enviar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <td>João</td>
                                            <td>Pizza</td>
                                            <th scope="row" class="bg-success text-white">10</th>
                                            <td>
                                                <button type="button" class="btn btn-outline-success btn-sm" title='Enviar para Cliente'><i class="fas fa-check-double"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>    
                        </div>
                    </div>
                    <!-- fim grid 01 -->

                     <!-- inicio grid 02 -->
                     <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-success'>Buscar Promoções - Ativas</h2>
                                <span class='text-success'>* bilhetes de promoções que já foram enviados</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>Código do Cliente</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='codCliente' class="form-control" placeholder="Ex. 1222" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>

                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Código do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeProduto' class="form-control" placeholder="Ex. Pizza" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                </div>
                                            </div>

                                            <div class='modal-footer'>
                                                <input type='submit' name='submitCadastroCupom' class='btn btn-success btn-lg btn-block btn-sm' title='Buscar Cupons' value='Buscar'>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div> 

                        <div class="col py-3 px-md-5 border bg-dark text-white">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                            <div class="text-right">
                                    <button type="button" class="btn btn-danger btn-sm" title='Desabilitar Promoção'>Desabilitar <i class="fas fa-times"></i></button>
                                </div>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Cód. Cupom</th>
                                            <th scope="col">Cód. Cliente</th>
                                            <th scope="col">Cód. Produto</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col" class="bg-success text-light">Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <th scope="row">1</th>
                                            <td>João</td>
                                            <td>Pizza</td>
                                            <th scope="row" class="bg-success text-light">9</th>
                                        </tr>                                        
                                    </tbody>
                                </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>
                        </div> 
                    </div>
                    <!-- fim grid 02 -->
                </div>  
            </div>
            <!-- produtos =============================================================================================================-->
            <div class="tab-pane fade" id="nav-produtos" role="tabpanel" aria-labelledby="nav-produtos-tab">
                <div class="row mx-md-n5 col-sm">
                    <!-- inicio grid 01 -->
                    <div class="col py-3 px-md-5 border bg-light">
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Cadastrar Produto</h2>
                                <span class='text-info'>* somente produtos elegíveis a fidelização</span>
                                <p>
                                    <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>Nome</label>
                                                <input type='text' name='nomeProduto' class='form-control' required>
                                            </div>
                                            <div class='form-group text-left'>
                                                <label>Limite de pontos</label>
                                                <input min='1' type='number' name='limitePontos' class='form-control' required>
                                            </div>
                                            <div class='modal-footer'>
                                            <input type='submit' name='submitCadastroProduto' class='btn btn-success btn-lg btn-block btn-sm' value='Cadastrar'>
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
                        <div class="col py-3 px-md-5 border bg-light">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <h2 class='text-dark'>Buscar Produtos</h2>
                                <span class='text-info'>* produtos cadastrados no sistema</span>
                                <p>
                                <form action='dbEstabelecimento.php' method='POST'>
                                        <div class='modal-body'>
                                            <div class='form-group text-left'>
                                                <label>Nome do Produto</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name='nomeProduto' class="form-control" placeholder="Ex. Pizza" aria-label="Recipient's username" aria-describedby="button-incremento">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button" id="button-incremento"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div> 

                        <div class="col py-3 px-md-5 border bg-dark text-white">
                            <div class='pure-modal-wrap a-center small from-bottom'>
                                <p>
                                <!-- inicio tabela cupons ativos -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Cód. Produto</th>
                                            <th scope="col">Nome Produto</th>
                                            <th scope="col">Limite de Pontos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <!-- inserir valores dinâmicos -->
                                            <th scope="row">1</th>
                                            <th scope="row">Pizza</th>
                                            <th scope="row">10</th>
                                        </tr>                                        
                                    </tbody>
                                </table>
                                <!-- fim tabela cupons ativos -->
                                </p>
                            </div>
                        </div> 
                    </div>
                    <!-- fim grid 02 -->
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