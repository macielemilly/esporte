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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .inicio-title {
            margin-top: 60px;
            /* Adiciona margem superior igual à altura da barra de navegação */
        }

        .text {
            font-size: 25px;
        }
    </style>
</head>

<body style="height: 100vh;">
    <div class="mx-5">>
        <h1 class="inicio-title text-danger">Início</h1>
    </div>
    <div class="d-flex flex-row justify-content-center mt-5">
        <div class="d-flex justify-content-center mx-4">
            <div class="container d-flex justify-content-center">
                <div class="card card text-dark bg-danger mb-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text">Produtos</h5>
                        <p class="card-text">Futuro texto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-decoration-none text-dark">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="container d-flex justify-content-center mx-4">
                <div class="card card text-dark bg-danger mb-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text">Categorias</h5>
                        <p class="card-text">Futuro texto</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-decoration-none text-dark">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="container d-flex justify-content-center mx-4">
                <div class="card card text-dark bg-danger mb-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text">Valor total</h5>
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