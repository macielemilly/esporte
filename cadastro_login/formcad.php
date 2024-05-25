<!DOCTYPE html>
<html class="h-100" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/cadastro.css">

</head>
<body class="gradient-custom">
    <form action="../verificar/cadastra.php" method="post" data-parsley-validate>
        <div class="container">
            <div class="row d-flex justify-content-center flex-column align-items-center vh-100">
            <?php
                if (isset($_GET['erro'])) {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>já existe um usuário com esse login cadastrado!
                            <button type='button' class='close align-items-' data-dismiss='alert'        aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }
                ?>
                <div class="col-12 col-md-8 col-lg-6 col-xl-5
                ">
                    <div class="card bg-dark text-white borda">

                        <div class="card-body p-5">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="../img/crf.png" alt="" class="mb-2">
                            </div>

                            <div class="mt-md-1 pb-2">

                                <h1 class="fw-bold mb-4 text-center">Cadastro</h1>

                                <div class="mb-4">
                                    <input type="text" class="form-control bg-dark text-white form-control-lg input"
                                        name="login" placeholder="Login" required />
                                </div>

                                <div class="mb-4 py-1">
                                    <input type="password"
                                        class="form-control bg-dark text-white form-control-lg input text-start"
                                        name="senha" placeholder="Senha" required   />
                                </div>

                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-outline-light btn-lg mt-4 px-5" type="submit"
                                        name="enviar">Enviar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/parsleyjs/dist/parsley.min.js"></script>
<script src="../node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
<link rel="stylesheet" href="../node_modules/parsleyjs/src/parsley.css">
</body>

</html>