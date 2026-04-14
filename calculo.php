<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Lavagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Lavanderia Express</h1>
    <p>Cálculo por peso</p>
</header>

<section>
    <h2>Calcular Lavagem</h2>

    <form method="POST">
        Peso da roupa (kg):
        <input type="number" step="0.1" name="peso" required>

        Tipo de plano:
        <select name="plano">
            <option value="10">Normal - R$10/kg</option>
            <option value="8">Mensal - R$8/kg</option>
            <option value="6">Premium - R$6/kg</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $precoKg = $_POST['plano'];

        $total = $peso * $precoKg;

        echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    }
    ?>

    <br>
    <a href="painel.php">
        <button>Voltar</button>
    </a>
</section>

</body>
</html>