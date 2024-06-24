<?php
if (!empty($_GET['id'])) {
          include_once('conexao.php');
          $id = $_GET['id'];
          $sqlSelect = "SELECT * FROM usuarios WHERE id='$id'";

          $result = $conn->query($sqlSelect);
          if ($result->num_rows > 0) {
                    while ($user_data = mysqli_fetch_assoc($result)) {
                              $nome = $user_data['nome'];
                              $email = $user_data['login'];
                              $senha = $user_data['senha'];
                    }
          } else {
                    header('Location: dashAdm.php');
          }
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
          <title>editar</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="w-100 m-auto form-container">
          <div class="box">
                    <form action="saveEdit.php" method="POST">
                                        <legend><b>Editar Cliente</b></legend>
                                        <br>
                                        <div class="inputBox">
                                                  <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome; ?>>
                                                  <label for="nome" class="labelInput">Nome completo</label>
                                        </div>
                                        <br><br>
                                        <div class="inputBox">
                                                  <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha; ?> >
                                                  <label for="senha" class="labelInput">Senha</label>
                                        </div>
                                        <br><br>
                                        <div class="inputBox">
                                                  <input type="text" name="login" id="login" class="inputUser" value=<?php echo $email; ?> >
                                                  <label for="login" class="labelInput">Email</label>
                                        </div>
                                        <input type="hidden" name="id" value=<?php echo $id;?>>
                                        <input type="submit" name="update" id="submit" class="btn btn-primary w-100 py-2 btnLogin">
                    </form>
</body>

</html>