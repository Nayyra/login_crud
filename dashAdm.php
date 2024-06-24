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
          <title>admin</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
          <main class="w-100 m-auto form-container">
                    <div class="seja">
                              <h1 class="fs-3">SEJA BEM VINDO
                                        <?php
                                        echo $_SESSION['usuarioNome']
                                        ?>
                              </h1>
                    </div>
                    <div>
                              <table class="table table-bg">
                                        <thead>
                                                  <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Senha</th>
                                                            <th scope="col">Perfil</th>
                                                            <th scope="col">...</th>
                                                            <th scope="col">   </th>
                                                  </tr>
                                        </thead>
                                        <tbody>
                                                  <?php
                                                  while ($user_data = mysqli_fetch_assoc($result)) {
                                                            echo "<tr>";
                                                            echo "<td>" . $user_data['id'] . "</td>";
                                                            echo "<td>" . $user_data['nome'] . "</td>";
                                                            echo "<td>" . $user_data['login'] . "</td>";
                                                            echo "<td>" . $user_data['senha'] . "</td>";
                                                            echo "<td>" . $user_data['nivel_acesso'] . "</td>";
                                                            echo "<td>
                                                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
</svg>
                                                            </a></td>";

                                                            echo "<td><a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
</svg>
                                                            </a ></td>";

                                                            
                                                  }
                                                  ?>

                                        </tbody>
                              </table>
                              <a href="sair.php"><button type="submit" class="btn btn-primary w-100 py-2 btnLogin">Voltar</button></a>
                    </div>

          </main>
</body>

</html>