<?php
session_start();
include_once('conexao.php');

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>dashbord</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
        <main class="w-100 m-auto form-container">
                <h1 class="fs-3">seja bem vindo
                        <?php
                        echo $_SESSION['usuarioNome']
                        ?>
                </h1>
                <table class="table table-bg">
                                        <thead>
                                                  <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">Email</th>
                                                  </tr>
                                        </thead>
                                        <tbody>
                                                  <?php
                                                  while ($user_data = mysqli_fetch_assoc($result)) {
                                                            echo "<tr>";
                                                            echo "<td>" . $user_data['id'] . "</td>";
                                                            echo "<td>" . $user_data['nome'] . "</td>";
                                                            echo "<td>" . $user_data['login'] . "</td>";   
                                                  }
                                                  ?>

                                        </tbody>
                              </table>
                <a href="sair.php"><button type="submit" class="btn btn-primary w-100 py-2 btnLogin">Voltar</button></a>
        </main>
</body>

</html>