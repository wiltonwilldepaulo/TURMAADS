<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include_once "csspadrao.php"; ?>
</head>

<body>

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <?php include_once "alert.php"; ?>
                    <form method="post" name="frmcadastro" id="frmcadastro">
                        <div class="input-group mb-3">
                            <input required autofocus name="edtnome" id="edtnome" type="text" class="form-control" placeholder="Digite seu nome e sobre nome*">
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

                        <div class="social-auth-links text-center">
                            <button name="bntsalvar" id="bntsalvar" type="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-plus mr-2"></i>
                                Salvar
                            </button>
                        </div>
                    </form>
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
        <!-- Valida os dados do forulário e caso seja valido salva os dado no banco de dados -->
        <?php include_once "jspadrao.php"; ?>
        <script src="js/cadastro.js"></script>
    </body>

</html>