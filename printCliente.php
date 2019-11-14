<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Imprimir Bilhete</title>
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
            <a class="btn btn-success" href="#" role="button" onClick="window.print()"><i class="fas fa-print"></i> Imprimir</a></buttom>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                </ul>
                <span class="navbar-item" title="Fechar Janela">
                    <button class="btn btn-danger" onclick="window.close()"><i class="fas fa-times"></i></button>
                </span>
            </div>
        </nav>
        <!-- fim nav horizontal -->
        <!-- inicio card head -->
        <div class="card  text-center">
            <div class="card-header bg-success text-light font-weight-bold">
                <h3>Sistema de Fidelização</h3>
            </div>
        </div>
        <!-- fim card head -->

        <!-- inicio grid -->
        <div class="col py-3 px-md-5 border bg-light">
            <div class='pure-modal-wrap a-center small from-bottom px-md-5'>
                <h4 class='text-dark'>Bilhete de Promoção | <span class="font-weight-bold">Código: 000</span></h4>
                <span class='text-success'>* este cupom deve ser apresentado impresso ou em formato .pdf na referida empresa</span>
                <p>
                    <!-- linha 01 -->
                    <div class="container">
                        <!-- linha 01 -->
                        <label class="font-weight-bold">Sobre do Estabelecimento</label>
                        <div class="row">
                            <div class="col">
                                <div class='form-group text-left'>
                                    <label>Código:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='codEstabelecimento' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Nome:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='nomeEstabelecimento' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Telefone:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='telefoneEstabelecimento' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Endereço:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='enderecoEstabelecimento' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Tipo:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='tipoEstabelecimento' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim linha 01 -->
                        <hr style="margin-top: 10px; margin-bottom: 10px;"/>
                        <!-- linha 02 -->
                        <label class="font-weight-bold">Sobre do Cliente</label>
                        <div class="row">
                            <div class="col">
                                <div class='form-group text-left'>
                                    <label>Código:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='codCliente' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Nome:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='nomeCliente' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>CPF:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='nomeCliente' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Telefone:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='telefoneCliente' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim linha 02 -->
                        <hr style="margin-top: 10px; margin-bottom: 10px;"/>
                        <!-- linha 03 -->
                        <label class="font-weight-bold">Sobre do Bilhete</label>
                        <div class="row">
                            <div class="col">
                                <div class='form-group text-left'>
                                    <label>Código:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='codCliente' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class='form-group text-left'>
                                    <label>Produto:</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name='nomeCliente' class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim linha 03 -->
                    </div>
                </p>
            </div>
        </div>
        <!-- fim grid 01 -->

    <!--  inicio Footer -->
    <footer class="footer navbar-fixed-bottom bg-dark">
        <div class="footer-copyright text-center py-3 text-light">© Desenvolvido por FJK - 2019</div>
    </footer>
    <!-- fim Footer -->
</body>