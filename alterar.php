<?php
include 'conexao.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM clientes WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Editar</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    
    Nome: <input type="text" name="nome" value="<?= $row['nome'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    Senha: <input type="text" name="senha" value="<?= $row['senha'] ?>"><br>

    <button type="submit">Atualizar</button>
</form>