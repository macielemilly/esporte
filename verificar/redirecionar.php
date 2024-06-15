<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ../cadastro_login/login.php');
}
require 'nav.php';
?>