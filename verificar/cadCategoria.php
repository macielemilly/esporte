<?php
if (isset($_POST['salvar'])) {
    if (
        isset($_POST['nome']) && !empty($_POST['nome'])
    ) {

        require '../mydb/conexao.php';
    
        $nome = $_POST['nome'];
        $sql = "INSERT INTO categorias (nome) VALUES(:nome)";
        $resultado = $pdo->prepare($sql);
        $resultado->bindValue(":nome", $nome);
        $resultado->execute();

        header("Location: ../template/categorias.php?nome_categoria=$nome&sucesso=ok");

    }elseif(empty($_POST['nome']) ){
        header('Location:../template/categorias.php?camposnpreenchidos');
    }
}