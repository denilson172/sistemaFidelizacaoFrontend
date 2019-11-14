<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SF - Home</title>
    <meta name="Sistema de Fidelização" content="Sistema de Fidelização - 2019" />
    <link type="image/png" href="img/favicon.png"/>

    <!-- Title -->
    <title>Sistema de Fidelização</title>
    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <!-- modal -->
	<link rel="stylesheet" href="css/modal/modal.css">
	<link rel="stylesheet" href="css/modal/style-modal.css">
</head>
<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div> -->

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.php">Sistema de Fidelização</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <label for='modal-trigger-small-loginEmp' class='open-modal dropdown-item'>Empresas</label>
                                        <label for='modal-trigger-small-loginCli' class='open-modal dropdown-item'>Clientes</label>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <label for='modal-trigger-center-cadastrarEmp' class='open-modal dropdown-item'>Empresas</label>
                                        <label for='modal-trigger-center-cadastrarCli' class='open-modal dropdown-item'>Clientes</label>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                    <h2>Olá, esse é o Sistema de Fidelização!</h2>                        
                        <label for='modal-trigger-small-loginCli' class='open-modal btn fancy-btn'>MEUS CUPONS</label>
                        <!-- inicio modal login cliente -->
                        <div class='pure-modal'>
                            <input id='modal-trigger-small-loginCli' class='checkbox' type='checkbox'>
                            <div class='pure-modal-overlay'>
                                <label for='modal-trigger-small-loginCli' class='o-close'></label>
                                <div class='pure-modal-wrap a-center small from-bottom'>
                                    <h4><i class="fa fa-users text-success" aria-hidden="true"></i></h4>
                                    <h5 class='text-success'>PARA CLIENTES</h5>
                                    <h2 class='text-dark'>Login</h2>
                                    <p>
                                        <form action='dbCliente.php' method='POST'>
                                            <div class='modal-body'>
                                                <div class='form-group text-left'>
                                                    <label>Email</label>
                                                    <input type='email' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Senha</label>
                                                    <input type='password' name='data' class='form-control' required>
                                                </div>
                                                <span>Novo por aqui? </span><label for='modal-trigger-center-cadastrarCli' class='open-modal text-success'>Cadastre-se</label>
                                                
                                                <div class='modal-footer'>
                                                    <input type='submit' name='submitlogar' class='btn btn-success' value='Entrar'>
                                                </div>
                                            </div>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- fim modal login cliente -->
                        <!-- inicio modal login empresa -->
                        <div class='pure-modal'>
                            <input id='modal-trigger-small-loginEmp' class='checkbox' type='checkbox'>
                            <div class='pure-modal-overlay'>
                                <label for='modal-trigger-small-loginEmp' class='o-close'></label>
                                <div class='pure-modal-wrap a-center small from-bottom'>
                                <h4><i class="fa fa-building-o text-info" aria-hidden="true"></i></h4>
                                <h5 class='text-info'>PARA EMPRESAS</h5>
                                    <h2 class='text-dark'>Login</h2>
                                    <p>
                                        <form action='dbEstabelecimento.php' method='POST'>
                                            <div class='modal-body'>
                                                <div class='form-group text-left'>
                                                    <label>Email</label>
                                                    <input type='email' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Senha</label>
                                                    <input type='password' name='data' class='form-control' required>
                                                </div>
                                                <span>Novo por aqui? </span><label for='modal-trigger-center-cadastrarEmp' class='open-modal text-info'>Cadastre-se</label>
                                                <div class='modal-footer'>
                                                    <input type='submit' name='submitlogar' class='btn btn-info' value='Entrar'>
                                                </div>
                                            </div>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- fim modal login cliente -->
                        <!-- inicio modal cadastrar cliente -->
                        <div class='pure-modal'>
                            <input id='modal-trigger-center-cadastrarCli' class='checkbox' type='checkbox'>
                            <div class='pure-modal-overlay'>
                                <label for='modal-trigger-center-cadastrarCli' class='o-close'></label>
                                <div class='pure-modal-wrap a-center'>
                                <h4><i class="fa fa-users text-success" aria-hidden="true"></i></h4>
                                    <h3 class='text-success'>Cadastro de Cliente</h3>
                                    <p>
                                        <form action='BOTAR CAMINHO DO CONTROLADOR' method='POST'>
                                            <div class='modal-body'>
                                                <div class='form-group text-left'>
                                                    <label>Email</label>
                                                    <input type='email' name='emailCliente' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Senha</label>
                                                    <input type='password' name='senhaCliente' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Nome</label>
                                                    <input type='text' name='nomeCliente' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>CPF</label>
                                                    <input type='text' name='cpfCliente' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Telefone</label>
                                                    <input type='text' name='telefoneCliente' class='form-control' required>
                                                </div>
                                                <div class='modal-footer'>
                                                    <input type='submit' name='submitCadastroCliente' class='btn btn-success' value='Cadastrar'>
                                                </div>
                                            </div>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- fim modal cadastrar cliente -->
                        <!-- inicio modal cadastrar empresas -->
                        <div class='pure-modal'>
                            <input id='modal-trigger-center-cadastrarEmp' class='checkbox' type='checkbox'>
                            <div class='pure-modal-overlay'>
                                <label for='modal-trigger-center-cadastrarEmp' class='o-close'></label>
                                <div class='pure-modal-wrap from-center'>
                                <h4><i class="fa fa-building-o text-info" aria-hidden="true"></i></h4>
                                    <h3 class='text-info'>Cadastro de Empresas</h3>
                                    <p>
                                        <form action='BOTAR CAMINHO DO CONTROLADOR' method='POST'>
                                            <div class='modal-body'>
                                                <div class='form-group text-left'>
                                                    <label>Email</label>
                                                    <input type='email' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Senha</label>
                                                    <input type='password' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Nome da Empresa</label>
                                                    <input type='text' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Telefone</label>
                                                    <input type='text' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Endereço</label>
                                                    <input type='text' name='data' class='form-control' required>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Categoria </label>
                                                    <select class="btn btn-outline-dark" name="select">
                                                        <option value="1" selected>Automotivo</option> 
                                                        <option value="2">Casa e Decoração</option>
                                                        <option value="3">Energia</option>
                                                        <option value="4">Meio Ambiente</option>
                                                        <option value="5">Moda</option>
                                                        <option value="6">Tecnologia</option>
                                                        <option value="7">Gastronomia</option>
                                                        <option value="8">Finanças</option>
                                                    </select>
                                                </div>
                                                <div class='form-group text-left'>
                                                    <label>Logo </label>
                                                    <input type="file" name="logo" class="outline-dark"  accept="image/png, image/jpeg"/>
                                                </div>
                                                <div class='modal-footer'>
                                                    <input type='submit' name='submitCadastro' class='btn btn-info' value='Cadastrar'>
                                                </div>
                                            </div>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- fim modal cadastrar empresas -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Qualidade</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50"></div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getrightYear());</script> Desenvolvido por FJK
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><label for='modal-trigger-small-loginAdm' class='open-modal text-dark'>Área do Administrador</label></li>
                                        <!-- inicio modal login adm -->
                                        <div class='pure-modal'>
                                            <input id='modal-trigger-small-loginAdm' class='checkbox' type='checkbox'>
                                            <div class='pure-modal-overlay'>
                                                <label for='modal-trigger-small-loginAdm' class='o-close'></label>
                                                <div class='pure-modal-wrap a-center small from-bottom'>
                                                    <h5 class='text-dark'>Login | Administrador</h5>
                                                    <p>
                                                        <form action='BOTAR CAMINHO DO CONTROLADOR' method='POST'>
                                                            <div class='modal-body'>
                                                                <div class='form-group text-left'>
                                                                    <label>Email</label>
                                                                    <input type='email' name='data' class='form-control' required>
                                                                </div>
                                                                <div class='form-group text-left'>
                                                                    <label>Senha</label>
                                                                    <input type='password' name='data' class='form-control' required>
                                                                </div>
                                                                <div class='modal-footer'>
                                                                    <input type='submit' name='submitlogar' class='btn btn-success' value='Entrar'>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fim modal login adm -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

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