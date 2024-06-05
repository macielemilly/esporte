<?php 
require '../mydb/conexao.php';
if(isset($_POST["id"])){
    $nome = $_POST['nome'];
    $id = $_POST['id'];

    $sql = "DELETE FROM categorias WHERE id = :id";
    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(":id", $id);
    $resultado->execute();

    header("Location: ../template/categorias.php?nome_categoria=$nome&excluir=ok");
}
?>