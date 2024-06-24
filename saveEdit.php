<?php
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',login='$email'
        WHERE id=$id";
        $result = $conn->query($sqlInsert);
        print_r($result);
    }
    header('Location: dashAdm.php');

?>