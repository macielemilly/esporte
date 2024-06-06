<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="gradient-custom">

    <form action="../verificar/logar.php" method="post" data-parsley-validate>
        <div class="container ">
            <div class="row d-flex flex-column justify-content-center align-items-center vh-100">
                <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == "ok") {
                        echo "<div class='alert  alert-success alert-dismissible fade show' role='alert'>Uuário acadastrado com sucesso!
                            <button type='button' class='close' data-dismiss='alert'        aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }
                }
                ?>
                <?php
                if (isset($_GET['erro'])) {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Login ou senha inválidos, tente novamente!
                            <button type='button' class='close align-items-' data-dismiss='alert'        aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }
        
                ?>
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white borda">

                        <div class="card-body p-5">
                            <div class="d-flex justify-content-center align-items-center py-2">
                                <img src="../img/crf.png" alt="" class=" mb-2">
                            </div>
                            <div class="mt-md-0 pb-5">

                                <h1 class="fw-bold mb-4 d-flex flex-column justify-content-center align-items-center">
                                    Login</h1>

                                <div class="mb-4">
                                    <label for="login">Login</label><label class="text-danger" for="login">*</label>
                                    <input type="text" class="input bg-dark form-control text-white form-control-lg" name="login" placeholder="Login" required />
                                </div>

                                <div class="mb-4 py-2">
                                    <label for="senha">Senha</label><label class="text-danger" for="senha">*</label>
                                    <input type="password" class="input bg-dark form-control text-white form-control-lg" name="senha" placeholder="Senha" required />
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <button class="btn btn-outline-light btn-lg mt-4 px-5" type="submit" name="enviar">Enviar</button>
                                </div>
                            </div>

                            <div class="text-center">
                                <p class="mb-0 mt-0">Não tem um login?<a href="formcad.php" class="text-white-50 fw-bold "> cadastre-se</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="../node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="../node_modules/parsleyjs/src/parsley.css">
</body>

</html>