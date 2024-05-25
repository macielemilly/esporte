<?php
    if(isset($_POST['enviar'])){
        if(isset($_POST['login']) && !empty($_POST['login'])
        && isset($_POST['senha']) && !empty($_POST['senha'])){
            session_start();
            require '../mydb/conexao.php';
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "SELECT * FROM users WHERE login = :login AND senha = :senha";
            $resultado = $pdo->prepare($sql);
            $resultado->bindValue("login", $login);
            $resultado->bindValue("senha", $senha);
            $resultado->execute();

            if($resultado->rowCount() > 0){
                $dado = $resultado->fetch();

                $_SESSION['id'] = $dado['id'];
                $_SESSION['nome'] = $dado['login'];
                
                header('Location: ../template/index.php');
            }
            else{
                header('Location: ../cadastro_login/login.php?erro');
            }
        }
    }