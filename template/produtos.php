<?php
session_start();
require '../mydb/conexao.php';
if (!isset($_SESSION['id'])) {
    header('Location: ../cadastro_login/login.php');
}

$sql = "SELECT * FROM produtos";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

require 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/produtos.css">
</head>

<body class="altura">
    <div class="mx-5">>
        <h1 class="inicio-title text-danger">Produtos</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        < class="table-responsive-sm teste">
            <?php
            if (count($produtos) > 0) {
            ?>
                <table class="table table-hover table-bordered">
                    <thead >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Marca</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach( $produtos as $produto) {
                                echo "<tr>";
                                echo"<td>" . $produto['id'] . "</td>";
                                echo"<td>" . $produto['nome'] . "</td>";
                                echo"<td>" . $produto['preco'] . "</td>";
                                echo"<td>" . $produto['qtd_estoque'] . "</td>";
                                echo"<td>" . $produto['marca'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            <?php
            }else{
                echo "<h1>Sem produtos cadastrados</h1>";
            }
            ?>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>