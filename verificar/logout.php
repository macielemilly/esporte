<?php
    session_start();

    session_unset();

    session_destroy();

    header('location: ../cadastro_login/login.php');



?>