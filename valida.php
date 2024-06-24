<?php
        require_once("conexao.php");
        session_start();

        if((isset($_POST['login']))&&(isset($_POST['senha'])))
        {
                $usuario = $_POST['login'];
                $senha = $_POST['senha'];
                $query = "SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";
                $execucao = mysqli_query($conn, $query);
                $resultado = mysqli_fetch_assoc($execucao);

        if(isset($resultado))
        {
                $_SESSION['nivel'] = $resultado ['nivel_acesso'];
                $_SESSION['usuarioNome'] = $resultado ['login'];
                
                if($_SESSION['nivel'] == "adiministrador"){
                    header("location:dashAdm.php");
                }else{
                    header("location:dash.php");
                }

        }elseif (!isset($resultado)) 
        {
                $_SESSION['login']= "Preencha todos os campos corretamente"; 
                header("location:index.php");

        }else{ 
                $_SESSION['login'] = "Preencha todos os campos corretamente"; 
                header("location:index.php");
        }
    }
?>