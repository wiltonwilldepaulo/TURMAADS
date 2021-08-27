<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="templete/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="templete/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="templete/AdminLTE-3.1.0/dist/css/adminlte.min.css">
</head>

<body>

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register a new membership</p>

                    <form method="post">
                        <div class="input-group mb-3">
                            <input name="edtnome" id="edtnome" type="text" class="form-control" placeholder="Digite seu nome e sobre nome*">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="edtemail" id="edtemail" type="email" class="form-control" placeholder="Digite seu endereço de e-mail*">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="edtsenha" id="edtsenha" type="password" class="form-control" placeholder="Digite sua senha*">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input name="edttermos" name="edttermos" type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        Estou de acordo com todas as condições, <a href="#">Leia os termos</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="social-auth-links text-center">
                        <button name="bntsalvar" id="bntsalvar" type="submit" class="btn btn-block btn-primary">
                            <i class="fas fa-plus mr-2"></i>
                            Cadastrar
                        </button>
                    </div>
                    <div class="social-auth-links text-center">
                        <a href="login.php" type="button" class="btn btn-block btn-warning">
                            <i class="fas fa-ban"></i>
                            Cancelar
                        </a>
                    </div>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>

        <!-- jQuery -->
        <script src="templete/AdminLTE-3.1.0//plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="templete/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="templete/AdminLTE-3.1.0/dist/js/adminlte.min.js"></script>
    </body>

</html>