<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ../cadastro_login/login.php');
}

require '../mydb/conexao.php';

$sql = "SELECT * FROM categorias";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

require 'nav.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/produtos.css">
</head>

<body class="altura">
    <div class="container">
        <h1 class="inicio text-danger">Categorias</h1>

        <?php if (isset($_GET['sucesso'])) {
             $nomeCategoria = $_GET['nome_categoria']; ?>

            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Categoria <?php echo $nomeCategoria; ?> cadastrada com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if (isset($_GET['excluir'])) { 
             $nomeCategoria = $_GET['nome_categoria'];
            ?>

            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Categoria <?php echo $nomeCategoria; ?> excluída com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if (isset($_GET['editar'])) { 
             $nomeCategoria = $_GET['nome_categoria'];
            ?>

            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Categoria <?php echo $nomeCategoria; ?> editada com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <div class="d-flex flex-md-row flex-wrap justify-content-between mt-4 mb-2">
            <h3>Categorias cadastradas</h3>
            <button type="button" class="btn btn-success mt-2 mt-md-0" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                Cadastrar Categoria
            </button>
        </div>

        <div class="table-responsive-md teste">
            <?php
            if (count($categorias) > 0) {
            ?>
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr class='text-center'>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($categorias as $categoria) {

                            echo "<tr class='text-center'>";
                            echo "<td>" . $categoria['id'] . "</td>";
                            echo "<td>" . $categoria['nome'] . "</td>";
                            echo "<td>
                                    <div class='d-flex flex-sm-row justify-content-center'>
                                        <button type='button' class='btn btn-dark me-2' data-bs-toggle='modal' data-bs-target='#editarCategoriaModal" . $categoria['id'] . "'>Editar</button>
                                        <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirmarExclusao" . $categoria['id'] . "'>Excluir</button>
                                    </div>
                                </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            <?php } else {
                echo "<h1 class='text-center text-danger'>Sem categorias cadastradas!</h1>";
            }
            ?>
        </div>
    </div>

    <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroModalLabel">Cadastrar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../verificar/cadCategoria.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="categoriaNome" class="form-label">Nome</label>
                            <input name="nome" type="text" class="form-control" id="categoriaNome" required>
                            <div class="invalid-feedback">
                                Insira o nome da categoria.
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($categorias as $categoria) { ?>
        <div class="modal fade" id="editarCategoriaModal<?php echo ($categoria['id']); ?>" tabindex="-1" aria-labelledby="editarCategoriaModalLabel<?php echo ($categoria['id']); ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarCategoriaModalLabel<?php echo ($categoria['id']); ?>">Editar categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        <form action="../verificar/editarCategoria.php" method="post" class="needs-validation" novalidate>
                            <div class='mb-3'>
                                <label for='nome<?php echo ($categoria['id']); ?>' class='form-label'>Nome:</label>
                                <input type='text' class='form-control' id='nome<?php echo ($categoria['id']); ?>' name='nome' value='<?php echo ($categoria['nome']); ?>' required>
                                <div class='invalid-feedback'>
                                    Insira o nome da categoria.
                                </div>
                            </div>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                            <input type='hidden' name='id' value='<?php echo ($categoria['id']); ?>'>
                            <button type='submit' name='salvar' class='btn btn-primary'>Salvar Alterações</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='confirmarExclusao<?php echo ($categoria['id']); ?>' tabindex='-1' aria-labelledby='confirmarExclusaoLabel<?php echo ($categoria['id']); ?>' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='confirmarExclusaoLabel<?php echo ($categoria['id']); ?>'>Excluir categoria</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body text-start'>
                        Tem certeza de que deseja excluir a categoria <?php echo ($categoria['nome']); ?>?
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                        <form method='post' action='../verificar/excluirCategoria.php'>
                            <input type='hidden' name='id' value='<?php echo ($categoria['id']); ?>'>
                            <input type='hidden' name='nome' value='<?php echo ($categoria['nome']); ?>'>
                            <button type='submit' name='excluir' class='btn btn-danger'>Confirmar Exclusão</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    