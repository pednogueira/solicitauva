<?php

if (!isset($_SESSION))
    session_start();

$login = $_SESSION['login'];
$nome_usuario = $_SESSION['nome'];

$nivel_adequado = 2;

if (!isset($_SESSION['id']) OR ( $_SESSION['nivel'] < $nivel_adequado)) {
    session_destroy();
    header("Location: login.php");
}
?>