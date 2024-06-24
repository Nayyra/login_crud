<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="w-100 m-auto form-container">
        <form action="valida.php" method="post">

            <div class="d-flex-column align-itens  mb-3 w-100">
                <h1 class="h3 mb-3 fw-normal">Tela de Login</h1>
                <img src="./imgs/usuario-de-perfil (2).png" alt="deu certo n" width="50px" height="50px">
            </div>

            <div class="form-floating">
                <input type="text" name="login" placeholder="your-email@gmail.com" class="form-control" id="floatinginput">
                <label for="floatingInput">E-mail</label>
            </div>

            <div class="form-floating ">
                <input type="password" name="senha" placeholder="Senha" class="form-control" id="floatinginput">
                <label for="floatingInput">Senha</label>
                <a href="cadastro.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Fazer cadastro</a>
                <button type="submit" class="btn btn-primary w-100 py-2 btnLogin">
                    Login
                </button>
            </div>
        </form>
        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>
    </main>
</body>

</html>