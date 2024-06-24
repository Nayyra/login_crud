
<?php
session_start();
unset($_SESSION['nivel'], $_SESSION['usuarioName']);
$_SESSION['login'] = "De volta a tela de Login";
header("location:index.php")
?>