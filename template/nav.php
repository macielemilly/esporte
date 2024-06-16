<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/nav.css">
    <title>Estoque</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="d-flex justify-content-start">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mx-2" href="#">
                    <img src="../img/crf.png" alt="Bootstrap" width="40" height="40">
                </a>
            </div>

            <button type="button" class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#confirmarLogoutModal">Sair</button>
        </div>
        <div class="offcanvas offcanvas-start text-bg-dark" style="width: 300px;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" data-bs-backdrop="static">
            <div class="offcanvas-header mt-3">
                <img src="../img/user.png" alt="">
                <p class=" m-2" id="offcanvasDarkNavbarLabel"><?php echo $_SESSION['nome'] ?></p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr class="text-white">
            <div class="offcanvas-body">
                <p class="">Menu</p>
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <div class="btn btn-dark">
                        <li class="nav-item teste">
                            <a class="nav-link  active d-flex align-items-center" aria-current="page" href="index.php">
                                <i class="fa-solid fa-house me-3"></i>Início</a>
                    </div>
                    <div class="btn btn-dark">
                        </li>
                        <li class="nav-item teste">
                            <a class="nav-link active  d-flex align-items-center" href="produtos.php">
                                <i class="fa-solid fa-box me-3"></i>Produtos</a>
                        </li>
                    </div>
                    <div class="btn btn-dark">
                        <li class="nav-item teste">
                            <a class="nav-link active d-flex align-items-center" href="categorias.php">
                                <i class="fa-solid fa-tag me-3"></i>Categorias</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        </div>
    </nav>

    <div class="modal fade text-start" id="confirmarLogoutModal" tabindex="-1" aria-labelledby="confirmarLogoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarLogoutModalLabel">Sair da Conta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza de que deseja sair da sua conta?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form method="post" action="../verificar/logout.php">
                        <button type="submit" class="btn btn-danger">Confirmar saída</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>