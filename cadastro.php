<<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Lavanderia Express</h1>
    <p>Seu sistema de lavanderia online</p>
</header>

<section>
    <h2>Cadastro</h2>

    <form action="salvar.php" method="POST">
        Nome:
        <input type="text" name="nome" required>

        Email:
        <input type="email" name="email" required>

        Senha:
        <input type="password" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>

    <p>Já tem conta?</p>
    <a href="index.php">
        <button type="button">Voltar para Login</button>
    </a>
</section>

</body>
</html>