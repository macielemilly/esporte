<?php
if (isset($_POST['salvar'])) {
    if (
        isset($_POST['id']) && !empty($_POST['id']) &&
        isset($_POST['nome']) && !empty($_POST['nome'])) {
        require '../mydb/conexao.php';

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        
        $sql = "UPDATE categorias SET nome = :nome WHERE id = :id";
        $resultado = $pdo->prepare($sql);
        $resultado->bindValue(":id", $id);
        $resultado->bindValue(":nome", $nome);
        $resultado->execute();

        header("Location: ../template/categorias.php?nome_categoria=$nome&editar=ok");
    }elseif(empty($_POST['nome'])){
        header('Location:../template/produtos.php?camposnpreenchidos');
    }
}
?>