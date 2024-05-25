<?php
    if(isset($_POST['enviar'])){
        if(isset($_POST['login']) && !empty($_POST['login'])
        && isset($_POST['senha']) && !empty($_POST['senha'])){
            require '../mydb/conexao.php';
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "INSERT INTO users(login,senha) VALUES (:login,:senha)";
            $resultado = $pdo->prepare($sql);
            $resultado->bindValue("login", $login);
            $resultado->bindValue("senha", $senha);
            $resultado->execute();
            header('location: ../cadastro_login/login.php?success=ok');
        }
         else{
             header('location: ../cadastro_login/formcad.php?erro');
         }
        
    }

?>