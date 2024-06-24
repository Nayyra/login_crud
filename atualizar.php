<?php
$novo_email = "novo@email.com";

// Atualiza o email do usuário com ID 1
$sql = "UPDATE usuarios SET email = '$novo_email' WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Email atualizado com sucesso!";
} else {
    echo "Erro ao atualizar email: " . $conn->error;
}

// ...
?>
