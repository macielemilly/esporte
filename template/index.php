<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ../cadastro_login/login.php');
}
require 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="altura">
    <div class="mx-5">
        <h1 class="inicio-title text-danger">Início</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card text-dark bg-danger cartao">
                    <div class="card-body">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text">Futuro texto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="produtos.php" class="text-decoration-none text-dark">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card text-dark bg-danger cartao">
                    <div class="card-body">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Futuro texto</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-decoration-none text-dark">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card text-dark bg-danger cartao">
                    <div class="card-body">
                        <h5 class="card-title">Valor total</h5>
                        <p class="card-text">Futuro texto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-decoration-none text-dark">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>