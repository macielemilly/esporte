<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/nav.css">
    <title>Sidebar</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="../img/crf.png" id="user_avatar" alt="Avatar">
    
                <p id="user_infos">
                    <span class="item-description perfil">
                        Perfil
                    </span>
                    <span class="item-description">
                        <?php echo $_SESSION['nome']; ?>
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="index.php">
                        <i class="fa-solid fa-house"></i>
                        <span class="item-description">
                            Inicio
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-tag"></i>
                        <span class="item-description">
                            Categorias
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Produtos
                        </span>
                    </a>
                </li>
  
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="../verificar/logout.php" class="item-description">Sair</a>
            </button>
        </div>
    </nav>
    <script src="../js/script.js"></script>
</body>
</html>