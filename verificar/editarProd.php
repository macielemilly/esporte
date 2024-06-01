<?php
if (isset($_POST['salvar'])) {
    if (
        isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['nome']) && !empty($_POST['nome']) &&
        isset($_POST['preco']) && !empty($_POST['preco']) &&
        isset($_POST['quantidade']) && !empty($_POST['quantidade']) &&
        isset($_POST['marca']) && !empty($_POST['marca'])
    ) {
        require '../mydb/conexao.php';

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $marca = $_POST['marca'];

        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, qtd_estoque = :qtd_estoque, marca = :marca WHERE id = :id";
        $resultado = $pdo->prepare($sql);
        $resultado->bindValue(":id", $id);
        $resultado->bindValue(":nome", $nome);
        $resultado->bindValue(":preco", $preco);
        $resultado->bindValue(":qtd_estoque", $quantidade);
        $resultado->bindValue(":marca", $marca);
        $resultado->execute();

        header("Location: ../template/produtos.php?nome_prod=$nome&editar=ok");
    }
}
?>
