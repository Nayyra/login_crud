<?php
$localdoBanco = "localhost";
$usuario = "root";
$senha = "";
$bancoDeDados = "sistema";

$conn = mysqli_connect($localdoBanco, $usuario, $senha, $bancoDeDados);

if (!$conn) {
          die("Falha na conexão: " . mysqli_connect_error());
      }
?>