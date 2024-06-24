<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['login']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $perfil = mysqli_real_escape_string($conn, $_POST['nivel_acesso']);

    $query = "INSERT INTO usuarios (nome, senha, login, nivel_acesso) 
              VALUES ('$nome', '$senha', '$email', '$perfil')";

    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>cadastro</title>
</head>

<body class="d-flex align-items-startr py-4 bg-body-tertiary">
    <main class="w-100 m-auto form-container">
        <form action="cadastro.php" method="POST">

            <div class="d-flex-column align-itens  mb-3 w-100">
                <h1 class="h3 mb-3 fw-normal">Tela de cadastro</h1>
                </div>

            <div class="form-floating">
                <input type="text" name="nome" placeholder="nome" class="form-control" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating">
                <input type="text" name="login" placeholder="your-email@gmail.com" class="form-control" id="login">
                <label for="login">E-mail</label>
            </div>
            <div class="form-floating">
                <input type="text" name="senha" placeholder="password" class="form-control" id="senha">
                <label for="senha">Senha</label>
            </div>
            <div class="form-floating">
                <input type="text" name="nivel_acesso" placeholder="nivel_acesso" class="form-control" id="nivel_acesso">
                <label for="nivel_acesso">Perfil</label>
            </div>
            <input type="submit" name="submit" id="submit" class="btn btn-primary w-100 py-2 btnLogin">
        </form>
        <a href="sair.php"><button type="submit" class="btn btn-primary w-100 py-2 btnLogin">Voltar</button></a>
    </main>
</body>

</html>