<?php
session_start();
require '../mydb/conexao.php';

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
    <div class="container">
        <h1 class="inicio text-danger">Produtos</h1>
        <?php
        if (isset($_GET['sucesso'])) {
            $nomeProd = $_GET['nome_prod'];
        ?>
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Produto <?php echo $nomeProd ?> cadastrado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <?php
        if (isset($_GET['excluir'])) {
            $nomeProd = $_GET['nome_prod'];
        ?>
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Produto <?php echo $nomeProd; ?> excluído com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <?php
        if (isset($_GET['editar'])) {
            $nomeProd = $_GET['nome_prod'];
        ?>
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Produto <?php echo $nomeProd; ?> editado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>

        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 mb-2">
            <h3>Produtos cadastrados</h3>
            <button type="button" class="btn btn-success mt-2 mt-md-0" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                Cadastrar produto
            </button>
        </div>

        <div class="table-responsive-sm teste">
            <?php
            if (count($produtos) > 0) {
            ?>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class='text-center'>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($produtos as $produto) {
                            echo "<tr class='text-center'>";
                            echo "<td>" . $produto['id'] . "</td>";
                            echo "<td>" . $produto['nome'] . "</td>";
                            echo "<td>" . $produto['preco'] . "</td>";
                            echo "<td>" . $produto['qtd_estoque'] . "</td>";
                            echo "<td>" . $produto['marca'] . "</td>";
                            echo "<td>
                            <div class='d-flex flex-sm-row justify-content-center'>
                            <button type='button' class='btn btn-warning me-2' data-bs-toggle='modal' data-bs-target='#editarProdutoModal" . $produto['id'] . "'>Editar</button>
                            <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirmarExclusao" . $produto['id'] . "'>Excluir</button>
                            </div>
                            <div class='modal fade' id='editarProdutoModal" . $produto['id'] . "' tabindex='-1' aria-labelledby='editarProdutoModalLabel" . $produto['id'] . "' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='editarProdutoModalLabel" . $produto['id'] . "'>Editar Produto</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body text-start'>
                                            <form action='../verificar/editarProd.php' method='post' class='needs-validation' novalidate>
                                                <div class='mb-3'>
                                                    <label for='nome" . $produto['id'] . "' class='form-label'>Nome:</label>
                                                    <input type='text' class='form-control' id='nome" . $produto['id'] . "' name='nome' value='" . $produto['nome'] . "' required>
                                                    <div class='invalid-feedback'>
                                                        Insira o nome do produto.
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-md-6 mb-3'>
                                                        <label for='preco" . $produto['id'] . "' class='form-label'>Preço:</label>
                                                        <input type='text' class='form-control' id='preco" . $produto['id'] . "' name='preco' value='" . $produto['preco'] . "' required>
                                                        <div class='invalid-feedback'>
                                                            Insira o preço do produto.
                                                        </div>
                                                    </div>
                                                    <div class='col-md-6 mb-3'>
                                                        <label for='quantidade" . $produto['id'] . "' class='form-label'>Quantidade:</label>
                                                        <input type='text' class='form-control' id='quantidade" . $produto['id'] . "' name='quantidade' value='" . $produto['qtd_estoque'] . "' required>
                                                        <div class='invalid-feedback'>
                                                            Insira a quantidade do produto.
                                                        </div>
                                                    </div>
                                                    <div class='col-md-6 mb-3'>
                                                        <label for='marca" . $produto['id'] . "' class='form-label'>Marca:</label>
                                                        <input type='text' class='form-control' id='marca" . $produto['id'] . "' name='marca' value='" . $produto['marca'] . "' required>
                                                        <div class='invalid-feedback'>
                                                            Insira a marca do produto.
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                                <input type='hidden' name='id' value='" . $produto['id'] . "'>
                                                <button type='submit' name='salvar' class='btn btn-primary'>Salvar Alterações</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class='modal fade' id='confirmarExclusao" . $produto['id'] . "' tabindex='-1' aria-labelledby='confirmarExclusaoLabel" . $produto['id'] . "' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='confirmarExclusaoLabel" . $produto['id'] . "'>Excluir produto</h5>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body text-start'>
                                                Tem certeza de que deseja excluir o produto " . $produto['nome'] . "?
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                                                <form method='post' action='../verificar/excluirProd.php'>
                                                    <input type='hidden' name='id' value='" . $produto['id'] . "'>
                                                    <input type='hidden' name='nome' value='" . $produto['nome'] . "'>
                                                    <button type='submit' name='excluir' class='btn btn-danger'>Confirmar Exclusão</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo "<h1 class='text-center'>Sem produtos cadastrados!</h1>";
            }
            ?>
        </div>
    </div>
    <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroModalLabel">Cadastrar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../verificar/cadproduto.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="produtoNome" class="form-label">Nome</label>
                            <input name="nome" type="text" class="form-control" id="produtoNome" required>
                            <div class="invalid-feedback">
                                Insira o nome do produto.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="produtoPreco" class="form-label">Preço</label>
                                <input name="preco" type="text" class="form-control" id="produtoPreco" required>
                                <div class="invalid-feedback">
                                    Insira o preço do produto.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="produtoQuantidade" class="form-label">Quantidade</label>
                                <input name="quantidade" type="number" class="form-control" id="produtoQuantidade" required>
                                <div class="invalid-feedback">
                                    Insira a quantidade do produto.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="produtoMarca" class="form-label">Marca</label>
                                <input name="marca" type="text" class="form-control" id="produtoMarca" required>
                                <div class="invalid-feedback">
                                    Insira a marca do produto.
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss=modal>Cancelar</button>
                        <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
