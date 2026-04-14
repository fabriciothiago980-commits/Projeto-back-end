<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Preencha todos os campos!";
        exit;
    }

    // Verifica se já existe
    $verifica = $conn->query("SELECT * FROM clientes WHERE email='$email'");

    if ($verifica->num_rows > 0) {
        echo "Email já cadastrado!";
        exit;
    }

    // Inserir
    $sql = "INSERT INTO clientes (nome, email, senha)
            VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql)) {
        echo "Cadastro realizado com sucesso!<br>";
        echo "<a href='index.php'>Ir para login</a>";
    } else {
        echo "Erro: " . $conn->error;
    }

} else {
    echo "Acesso inválido!";
}
?>