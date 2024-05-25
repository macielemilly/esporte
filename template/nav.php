<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../css/nav.css" />

  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="menu-btn">
          <i class="ph-bold ph-caret-left"></i>
        </div>
        <div class="head">
          <div class="user-img">
            <img src="../img/crf.png" alt="" />
          </div>
          <div class="user-details">
            <p class="title">Perfil</p>
            <p class="name"><?php echo $_SESSION['nome']; ?></p>
          </div>
        </div>
        <div class="nav">
          <div class="menu">
            <p class="title">Menu</p>
            <ul>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-house-simple"></i>
                  <span class="text">Inicio</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-shopping-bag"></i>
                  <span class="text">Produtos</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-tag"><img src="../img/ctegoria.png" alt="" /></i>
                  <span class="text">Categorias</span>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a href="../verificar/logout.php">
                <i class="icon ph-bold ph-sign-out"></i>
                <span class="text">Sair</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>
    <script src="../js/script.js"></script>
  </body>
</html>