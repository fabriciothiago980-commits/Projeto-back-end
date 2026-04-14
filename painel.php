<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>

<h2>Painel do Cliente</h2>

<a href="logout.php">Sair</a>

<h3>Usuários</h3>

<?php
$result = $conn->query("SELECT * FROM clientes");

while ($row = $result->fetch_assoc()) {
    echo $row['nome'] . " - " . $row['email'];
    echo " <a href='alterar.php?id=".$row['id']."'>Editar</a>";
    echo " <a href='excluir.php?id=".$row['id']."'>Excluir</a><br>";
}
?>

<a href="calculo.php">
    <button>Calcular Lavagem</button>
</a>