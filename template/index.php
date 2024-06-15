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
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="altura">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="inicio text-danger">Inicio</h1>
        </div>
        <hr class="text-danger">
        <div class="row mt-5">
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card text-white bg-dark cartao">
                    <div class="card-body">
                        <h5 class="card-title text">Produtos</h5>
                        <?php 
                        require '../mydb/conexao.php';
                        $sql = "SELECT COUNT(id) as total_produtos FROM produtos";
                        $resultado = $pdo->prepare($sql);
                        $resultado->execute();
                        $total_produtos = $resultado->fetch(PDO::FETCH_ASSOC)['total_produtos'];
                        
                        echo "<h6 class='card-text'>Total de Produtos: $total_produtos</h6>";
                        ?>

                    </div>
                    <div class="card-footer">
                        <a href="produtos.php" class="text-decoration-none text-white">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card text-dark bg-danger cartao">
                    <div class="card-body">
                        <h5 class="card-title text">Categorias</h5>
                        <?php 
                        require '../mydb/conexao.php';
                        $sql = "SELECT COUNT(id) as total_categorias FROM categorias";
                        $resultado = $pdo->prepare($sql);
                        $resultado->execute();
                        $total_categorias = $resultado->fetch(PDO::FETCH_ASSOC)['total_categorias'];
                        
                        echo "<h6 class='card-text'>Total de categorias: $total_categorias</h6>";
                        ?>
                    
                    </div>
                    <div class="card-footer">
                        <a href="categorias.php" class="text-decoration-none text-dark">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
                <div class="card text-white bg-dark cartao">
                    <div class="card-body">
                        <h5 class="card-title text">Valor total</h5>
                        <?php 
                        require '../mydb/conexao.php';
                        $sql = "SELECT SUM(preco * qtd_estoque) AS valor_total FROM produtos";
                        $resultado = $pdo->prepare($sql);
                        $resultado->execute();
                        $valor_total = $resultado->fetch(PDO::FETCH_ASSOC)['valor_total'];

                        echo "<h6 class='card-text'>Valor total em estoque: R$ $valor_total </h6>";
                        ?>
            
                    </div>
                    <div class="card-footer">
                        <a href="produtos.php" class="text-decoration-none text-white">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mt-5 mb-4">
            <h2 class="text-center">Categorias com mais produtos</h2>
        </div>
        <div>
            <table class="table table-bordered table-responsive-md">
                <thead class="table-dark">
                <tr class='text-center'>
                            <th scope="col">categoria</th>
                            <th scope="col">Quantidade</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    require '../verificar/relatorio.php';
                    if($resultado->rowCount() > 0 ){
                        foreach ($resultado as $row){
                            echo "<tr class='text-center'>";
                            echo "<td>" . $row['categoria'] . "</td>";
                            echo "<td>" . $row['contIDcat'] . "</td>";
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>