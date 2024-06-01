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
            <div class="d-flex justify-content-end">
                <li class="nav-item dropdown d-flex align-items-center mx-2">
                    <a class="nav-link dropdown-toggle text-bg-dark " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['nome']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="#">Produtos</a></li>
                        <li><a class="dropdown-item" href="#">Categorias</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">sair</a></li>
                    </ul>
                </li>
                <button type="button" class="btn btn-danger  mx-3"><a href="../verificar/logout.php" class="text-decoration-none text-white ">Sair</a></button>
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark" style="width: 300px;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center letra" aria-current="page" href="index.php">
                                <i class="fa-solid fa-house me-3"></i>Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center letra" href="produtos.php">
                                <i class="fa-solid fa-box me-3"></i>Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex active align-items-center letra" href="#">
                                <i class="fa-solid fa-tag me-3"></i>Categorias</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>