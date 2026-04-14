<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE clientes 
SET nome='$nome', email='$email', senha='$senha' 
WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: painel.php");
} else {
    echo "Erro ao atualizar!";
}
?>