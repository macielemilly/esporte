<?php
if (isset($_POST['salvar'])) {
    if (
        isset($_POST['nome']) && !empty($_POST['nome'])
        && isset($_POST['preco']) && !empty($_POST['preco'])
        && isset($_POST['quantidade']) && !empty($_POST['quantidade'])
        && isset($_POST['marca']) && !empty($_POST['marca'])
    ) {

        require '../mydb/conexao.php';
    
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $marca = $_POST['marca'];
        $sql = "INSERT INTO produtos (nome, preco, qtd_estoque, marca) VALUES(:nome,:preco,:qtd_estoque,:marca)";
        $resultado = $pdo->prepare($sql);
        $resultado->bindValue(":nome", $nome);
        $resultado->bindValue(":preco", $preco);
        $resultado->bindValue(":qtd_estoque", $quantidade);
        $resultado->bindValue(":marca", $marca);
        $resultado->execute();

        header("Location: ../template/produtos.php?nome_prod=$nome&sucesso=ok");

    }
}
